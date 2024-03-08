<?php
require __DIR__ . "/../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

ini_set('display_errors', 1);
error_reporting(E_ALL);

$mail = new PHPMailer;


// $mail->isSMTP();
// $mail->Host = "smtp.ionos.es";
// $mail->SMTPAuth = true;
// $mail->Username = "info@theelectricbuffalo.com";
// $mail->Password = "QDj7yNir8?UmUQ+";
// $mail->SMTPSecure = "tls";
// $mail->Port = 993;


$mail->setFrom("info@theelectricbuffalo.com", "The Electric Buffalo");
$mail->addAddress("info@theelectricbuffalo.com");
$mail->Subject = "Tienes un nuevo mensaje";
$mail->isHTML(true);
$mail->CharSet = "UTF-8";
$contenido = "<html><p>Tienes un nuevo mensaje</p></html>";

$mail->Body = $contenido;
$mail->AltBody = "Esto es texto alternativo sin HTML";



    $mail->send();
