<?php
//Llamando campos
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
 //Datos para el correo
 $destinatario = "agarefaciones_lubricantes@outlook.com";
 $asunto="Contacto desde el sitio web";

 $carta ="De: $name \n";
 $carta ="Correo: $email \n";
 $carta ="Comenatrio: $message \n";

 //Envio de correo

 mail($destinatario,$asunto,$carta)

    header("location: success.html");
?>