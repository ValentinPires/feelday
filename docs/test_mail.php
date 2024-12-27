<?php
$to = "feeldaynow@gmail.com";
$subject = "Prueba de correo";
$message = "¡Hola! Este es un mensaje de prueba.";
$headers = "From: noreply@example.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Correo enviado correctamente.";
} else {
    echo "Hubo un error al enviar el correo.";
}
?>