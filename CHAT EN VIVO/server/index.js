import express from 'express';
import logger from 'morgan';
import { Server } from 'socket.io';
import dotenv from 'dotenv';
import { createServer } from 'http';
import mysql from 'mysql2/promise';

dotenv.config();

const port = process.env.PORT ?? 3000;

const app = express();
const server = createServer(app);
const io = new Server(server, {
  connectionStateRecovery: {}
});

app.use(logger('dev'));
io.on('connection', async (socket) => {
  console.log('a user has connected');

  socket.on('disconnect', () => {
    console.log('a user has disconnected');
  });

  socket.on('chat message', async (msg) => {
    const userId = socket.handshake.auth.userid;
    try {
      const connection = await connectaralabasededatos();
      const query = 'INSERT INTO chat (message, fecha_mensaje, Id_usuario) VALUES (?, ?, ?)';
      const [results] = await connection.execute(query, [msg, new Date(), userId]);

      const queryGetName = 'SELECT nombre FROM registros WHERE IDusuario = ?';
      const [usernameRows] = await connection.execute(queryGetName, [userId]);
      const username = usernameRows.length > 0 ? usernameRows[0].nombre : 'Anónimo';

      console.log('La data fue insertada correctamente');
      
      const insertId = results.insertId;
      await connection.end();

      io.emit('chat message', msg, insertId.toString(), username, new Date(), userId);
    } catch (err) {
      console.error('Error en insertar la data:', err);
    }
  });


  if (!socket.recovered) {
    try {
      const connection = await connectaralabasededatos();
      const userId = socket.handshake.auth.userid;
      const serverOffset = socket.handshake.auth.serverOffset ?? 0;
      const [results] = await connection.execute('SELECT IDchat, message, fecha_mensaje,nombre FROM chat inner join registros on chat.Id_usuario=registros.IDusuario WHERE IDchat > ?', [serverOffset]);
      results.forEach(row => {
        socket.emit('chat message',row.message,row.IDchat.toString(),row.nombre, row.fecha_mensaje);
      });
      await connection.end();
    } catch (e) {
      console.error(e);
    }
  };
});

const dbConfig = {
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'usuarios'
};

async function connectaralabasededatos() {
  const connection = await mysql.createConnection(dbConfig);
  await connection.connect();
  return connection;
}

app.get('/', (req, res) => {
  res.sendFile(process.cwd() + '/Interfaz/Index.html');
});

server.listen(port, () => {
  console.log(`Server running on port ${port}`);
});
