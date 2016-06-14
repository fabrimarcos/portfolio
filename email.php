<?php
//Primero definimos las variables.
    $destino= "marcosfabrizio48@hotmail.com";
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

//Con esta variable juntamos todos los datos.
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nMensaje: " . $mensaje;

//Ahora enviamos el mail.
    mail($destino,"Contacto desde Portfolio", $contenido);

//Si queremos redireccionar a una web de agradecimiento por el mensaje (creando la web aparte)
    header("location:index.html");


?>
