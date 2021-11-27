<?php include ("db.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
<body class="imagen_inicio">

    <div class="formulario" >
    <h1>INICIAR SESIÓN.</h1>
    <form action="consultar.php"method="POST">
        
        
        <input type="text" id="usuario" name="usuario" placeholder="Ingresa el usuario">
<br>
<br>
        
        <input type="password" id="contra" name="contra" placeholder="Ingresa tu contraseña">
<br>
<br>
        <button id="enviar"name="Iniciar">Iniciar.</button>
        <br>
        <span class="crear_cuenta"><a href="registro.php">Crear cuenta</a> </span>
    </form>
</div>

    
    <script src="javaScript/main.js"></script>

</body>

</html>

