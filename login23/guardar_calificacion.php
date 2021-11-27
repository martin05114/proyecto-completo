<?php 

include('db.php');

if(isset($_POST['Enviar'])){
    $Id = uniqid('', true);
    $nombre_usuario = $_POST['nombre_usuario'];
    $Calificacion = $_POST['Calificacion'];
    echo $Id;
    echo $Calificacion;
    echo $nombre_usuario;
    $query = "insert into calificacion values ('$Id','$Calificacion','$nombre_usuario')";
    $result =mysqli_query($conn,$query);
    if(!$result){
        die("Falla en el query");
    }
    header('location:calificacion.php');   
}



?>