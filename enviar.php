<?php
    $destino = 'cincout.technology@gmail.com';
    $nombre = $_POST["nombre"];
    $correo =$_POST["correo"];
    $mobile =$_POST["mobile"]
    $mensaje =$_POST["mensaje"];

    $contenido = "Nombre: " .$nombre . "\Mobile: ".$mobile "\nCorreo: ".$correo . "\nMensaje: " .$mensaje
    mail($destino,"Contacto",$contenido);
    echo "<script> alert('Correo enviado')</script>"
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>
