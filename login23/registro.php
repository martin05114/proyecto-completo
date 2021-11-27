<?php include ("db.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="imagen_inicio">
    <div  class="formulario2" >
        <h1>REGISTRO.</h1>
        <form action="guardar_datos.php" method="POST">
            <input type="email" id="correo" name="correo" placeholder="Correo Electronico">
    <br>
    <br>
            
            
            <input type="text" id="usuario" name="usuario" placeholder="Usuario">
    <br>
    <br>
            
            <input type="password" id="contra" name="contra" placeholder="Contraseña">
    <br>
    <br>
    <input type="number" id="telefono" name="telefono" placeholder="Telefono">
    <br>
    <br>
    <input type="date" id="fecha_n" name="fecha_n" placeholder="Fecha Nacimiento">
    <br>
    <br>
            <button id="resgistrarse" name="resgistrarse">Registrarse.</button>
            <br>
            <span class="crear_cuenta"><a href="Index.php">Iniciar Sesion</a> </span>
        </form>
    </div>
</body>
</html>