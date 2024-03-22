<?php 
namespace Clases;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class Email {

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token){
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;

    }

    public function enviarConfirmacion(){
        // Crear el objeto de email

        $mail = new PHPMailer();
        $mail->isSMTP();

        $mail->Host = $_ENV["EMAIL_HOST"];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV["EMAIL_USER"];
        $mail->Password = $_ENV["EMAIL_PASS"];
        $mail->SMTPSecure = "tls";
        $mail->Port = $_ENV["EMAIL_PORT"];

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->setFrom("info@theelectribuffalo.com");
        $mail->addAddress("info@theeelectricbuffalo.com", "The Electric Buffalo");
        $mail->Subject = "Confirma tu cuenta";
        $mail->isHTML();
        $mail->CharSet= "UTF-8";

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola ". $this->nombre."</strong>. Has creado tu cuenta. Sólo debes confirmarla presionando el enlace</p>";
        $contenido .= "<p>Presiona aquí: <a href='". $_ENV["APP_URL"] . "/confirmar-cuenta?token=".$this->token."'
        >Confirmar cuenta</a
        > </p>";
        $contenido .= "<p>Si no has solicitado esta cuenta puedes ignorar el mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        $mail->send();
      


    }

    public function enviarInstrucciones(){

        $mail = new PHPMailer();
        $mail->isSMTP();

        $mail->Host = "smtp-relay.brevo.com";
        $mail->SMTPAuth = true;
        $mail->Username = "apreilmc@gmail.com";
        $mail->Password = "xsmtpsib-e2bd5459e2135497307c6ef0bf022d9098d7ef346a74e92fc4765f0d8b93310d-prnmQqwDHxzKO08t";
        $mail->SMTPSecure = "tls";
        $mail->Port = $_ENV["EMAIL_PORT"];

        // $mail->SMTPOptions = array(
        //     'ssl' => array(
        //         'verify_peer' => false,
        //         'verify_peer_name' => false,
        //         'allow_self_signed' => true
        //     )
        // );

        $mail->setFrom("info@theelectribuffalo.com");
        $mail->addAddress($this->email);
        $mail->Subject = "Reestablece tu contraseña";
        $mail->isHTML();
        $mail->CharSet = "UTF-8";

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong>. Has solicitado reestablecer tu contraseña. Sigue el siguiente enlace</p>";
        $contenido .= "<p>Presiona aquí: <a href='" . $_ENV["APP_URL"] . "/recuperar?token=" . $this->token . "'
        >Reestablecer contraseña</a
        > </p>";
        $contenido .= "<p>Si no has solicitado este cambio puedes ignorar el mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        $mail->send();

    }
}