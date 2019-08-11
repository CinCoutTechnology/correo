<?php
    $destino = 'cincout.technology@gmail.com';
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $correo =$_POST['correo'];
    $mensaje =$_POST['mensaje'];

    $header = "PHP";
    $contenido = .$mensaje . "\nAtentamente: " .$nombre;
    mail($destino, $asunto, $contenido, $header);
    echo "<script> alert('Correo enviado')</script>"
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>
