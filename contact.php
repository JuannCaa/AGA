<?php
//Llamando campos
    $name = $_POST['nombre'];
    $email = $_POST['correo'];
    $message = $_POST['comentario'];
 //Datos para el correo
 $destinatario = "agarefaciones_lubricantes@outlook.com";
 $asunto="Contacto desde el sitio web";

 $carta ="De: $name \n";
 $carta ="Correo: $email \n";
 $carta ="Comenatrio: $message ";

 //Envio de correo

 mail($destinatario,$asunto,$carta);

    header("location: success.html");
?>