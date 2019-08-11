<?php
    $destino = 'cincout.technology@gmail.com';
    $nombre = $_POST["nombre"];
    $correo =$_POST["correo"];
    $mobile =$_POST["mobile"]
    $mensaje =$_POST["mensaje"];

    $contenido = "Nombre: " .$nombre . "\Mobile: ".$mobile "\nCorreo: ".$correo . "\nMensaje: " .$mensaje
    mail($destino,"Contacto",$contenido);
    header("location: index.html");
?>