const express = require('express');
const http = require('http');
const { Server } = require('socket.io');

const app = express();
const server = http.createServer(app);
const io = new Server(server);

io.on('connection',(socket)=>{
  socket.on('chat',(msg)=>{
    io.emit('chat',msg)
  })
})

app.get('/', (req, res) => {
  res.sendFile(`${__dirname}/index.html`);
});

server.listen(3000, () => {
  console.log('Servidor corriendo en http://localhost:3000');
});