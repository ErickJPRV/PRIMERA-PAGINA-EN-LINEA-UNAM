<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="chat.png" type="image/x-icon">
    <title>CHAT EN vivo</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: rgb(145,213,89);
            background: linear-gradient(90deg, rgba(145,213,89,1) 0%, rgba(61,181,115,1) 34%, rgba(1,200,247,1) 76%, rgba(61,222,208,1) 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .section {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            background-color: white;
            width: 90%;
            max-width: 500px;
            box-sizing: border-box;
        }

        p {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-shadow: gray;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-top: 10px;
        }

        input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-top: 5px;
            background-color: transparent;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }

        .btn-hover {
            width: 100%;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
            margin-top: 20px;
            height: 55px;
            text-align: center;
            border: none;
            background-size: 300% 100%;
            background-image: linear-gradient(to right, #25aae1, #40e495, #30dd8a, #2bb673);
            border-radius: 50px;
            box-shadow: 0 4px 15px 0 rgba(49, 196, 190, 0.75);
            transition: all 0.4s ease-in-out;
        }

        .btn-hover:hover {
            background-position: 100% 0;
            transition: all 0.4s ease-in-out;
        }

        .btn-hover:focus {
            outline: none;
        }
    </style>
    <script>
        function validateForm() {
            const email = document.getElementById('email').value;
            const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            
            if (!emailPattern.test(email)) {
                alert('Por favor, ingresa un correo electrónico válido.');
                return false;
            };}
    </script>
</head>
<body>
    <section class="section">
        <p>Registrate para entrar al chat</p>
        <form action="registro.php" method="post" onsubmit="return validateForm();">

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="name" placeholder="Ingresa tus nombres:"><br>

            <label for="apellido">Apellidos:</label>
            <input type="text" id="apellido" name="ap" placeholder="Ingresa tus apellidos"><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Ingresa tu email"><br>

            <label for="contra">Contraseña:</label>
            <input type="password" id="contra" name="contra" placeholder="Ingresa tu contraseña"><br>
            
            <button class="btn-hover" type="submit">Registrarse</button>
        </form>
    </section>
</body>
</html>
