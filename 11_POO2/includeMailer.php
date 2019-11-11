<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$mail = new PHPMailer(true);
// Configuración del servidor
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = "SMPT.mail.yahoo.com"; //uso esto porq es yahoo
$mail->Username = 'mailparapruebas87';
$mail->Password = 'validar22';
$mail->SMTPSecure = "ssl"; // PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 465;

// Configuración envio y destinatario
$mail->setFrom('maildeprueba12as45as78as@yahoo.com', 'Mailer'); //solo me muestra de donde vien
$mail->addAddress('serrudo.jc@gmail.com', 'Joe User');
//$mail->addReplyTo();
//$mail->addCC();
//$mail->addBCC();

$mail->isHTML(true);
$mail->Subject = 'Confirmacion de alta';
$mail->Body = 'Confirmacion de alta usuario <b>en negrita!</b>';

$mail->send();
echo 'E-mail enviado';

?>