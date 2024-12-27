
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'valentinpires_55@yahoo.com.ar'; // Tu correo de Gmail
    $mail->Password = 'concursos2012'; // Tu contraseña o contraseña de aplicación
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Configuración del correo
    $mail->setFrom('feeldaynow@gmail.com', 'Tu Nombre');
    $mail->addAddress('valentinpires_55@yahoo.com.ar'); // Dirección de destino

    $mail->isHTML(true);
    $mail->Subject = 'Correo enviado desde PHPMailer con Gmail';
    $mail->Body = '<p>¡Hola! Este es un correo enviado usando Gmail y PHPMailer.</p>';
    $mail->AltBody = '¡Hola! Este es un correo enviado usando Gmail y PHPMailer.';

    $mail->send();
    echo 'Correo enviado correctamente.';
} catch (Exception $e) {
    echo "Error al enviar el correo: {$mail->ErrorInfo}";
}
?>