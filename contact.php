<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'www.agarefacciones.com';
    $email_subject = 'Nuevo mensaje de un clinte online';
    $email_body = "Name: $name.\n".
                  "Email: $email.\n".
                  "Message: $message.\n";

    $to ="agarefacciones_lubricantes@outlook.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";
  
    mail($to,$email_subject,$email_body,$headers);
  
    header("location: success.html");
?>