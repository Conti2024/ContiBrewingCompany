<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Validar campos obligatorios
    if (!isset($_POST['nombre']) || !isset($_POST['apellido']) || !isset($_POST['celular']) || !isset($_POST['email']) || !isset($_POST['coments'])) {
        echo 'Ocurrió un error inesperado y no se realizó el registro. Por favor, intente nuevamente.';
        exit;
    }

    // Obtener datos del formulario
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $celular = trim($_POST['celular']);
    $email = trim($_POST['email']);
    $comentarios = trim($_POST['coments']);

    // Validar correo electrónico
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Por favor, introduce un correo válido.";
        exit;
    }

    // Validar número de celular
    if (!preg_match('/^\d{10}$/', $celular)) {
        echo "El número de celular debe contener 10 dígitos.";
        exit;
    }

    // Crear instancia de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configurar servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'contiprogra@gmail.com'; // Correo electrónico del remitente
        $mail->Password = 'elgn sewx wfil qicc'; // Contraseña del correo electrónico
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Configurar remitente y destinatario
        $mail->setFrom('contiprogra@gmail.com', 'CERVEZA REGISTROS CONTI BREWING');
        $mail->addAddress('contiprogra@gmail.com', 'CONTI BREWING'); // Correo del vendedor

        // Contenido del correo para el vendedor
        $mail->isHTML(true);
        $mail->Subject = 'Nuevo registro en formulario de contacto';
        $messageAdmin = "
        <html>
        <body>
            <h2>DATOS DE CONTACTO:</h2>
            <p><strong>Nombre:</strong> $nombre</p>
            <p><strong>Apellidos:</strong> $apellido</p>
            <p><strong>Celular:</strong>  $celular</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Comentarios:</strong> $comentarios</p>
        </body>|||
        </html>";
        $mail->Body = $messageAdmin;
        $mail->send();

        // Limpiar direcciones  de correo y añadir el correo del usuario
        $mail->clearAddresses();
        $mail->addAddress($email, $nombre);

        // Contenido del correo para el usuario
        $mail->Subject = 'Registro CERVEZA CONTI BREWING';
        $messageUser = "
        <html>
        <body>
            <p>Hola $nombre,</p>
            <p>Gracias por registrarte :). Uno de nuestros asesores se pondrá en contacto contigo pronto.</p>
            <p>Detalles de tu registro:</p>
            <ul>
                <li><strong>Nombre:</strong> $nombre</li>
                <li><strong>Apellidos:</strong> $apellido</li>
                <li><strong>Celular:</strong> $celular</li>
                <li><strong>Email:</strong> $email</li>
                <li><strong>Comentarios:</strong> $comentarios</li>
            </ul>
            <p>Gracias por contactarnos.</p>
        </body>
        </html>";
        $mail->Body = $messageUser;
        $mail->send();
        
        echo "success"; // Envío exitoso
    } catch (Exception $e) {
        echo "Error enviando el correo: {$mail->ErrorInfo}";
    }
} else {
    echo "Acceso no autorizado.";
}
?>

