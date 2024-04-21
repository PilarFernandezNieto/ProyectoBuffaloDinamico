<?php 
namespace Clases;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Email {

    public $nombre;
    public $apellidos;
    public $email;
    public $telefono;
    public $localidad;
    public $provincia;
    public $mensaje;
    public $token;
    public $alertas = [];

    public function __construct($nombre = "", $apellidos = "", $email = "", $telefono = "", $localidad = "", $provincia = "", $mensaje = "", $token = "" ){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->localidad = $localidad;
        $this->provincia =$provincia;
        $this->mensaje = $mensaje;
        $this->token = $token;


    }

    public function getAlertas(){
        return $this->alertas;
    }


    public function validar(){
        if(!$this->nombre){
           $this->alertas["error"][] = "Debes introducir un nombre";
        }
        if (!$this->email) {
            $this->alertas["error"][] = "Debes introducir un email de contacto";
        }
        if (!$this->localidad) {
            $this->alertas["error"][] = "Queremos saber desde donde nos escribes";
        }
        if (!$this->mensaje) {
            $this->alertas["error"][] = "Hace falta un mensaje";
        }
        return $this->alertas;
    }

    public function enviarConfirmacion() {
        // Crear el objeto de email

        $mail = new PHPMailer();
        $mail->isSMTP();

        $mail->Host = $_ENV["EMAIL_HOST"];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV["EMAIL_USER"];
        $mail->Password = $_ENV["EMAIL_PASS"];
        $mail->SMTPSecure = "tls";
        $mail->Port = $_ENV["EMAIL_PORT"];


        $mail->setFrom("info@theelectribuffalo.com");
        $mail->addAddress("info@theeelectricbuffalo.com", "The Electric Buffalo");
        $mail->Subject = "Confirma tu cuenta";
        $mail->isHTML();
        $mail->CharSet = "UTF-8";

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong>. Has creado tu cuenta. Sólo debes confirmarla presionando el enlace</p>";
        $contenido .= "<p>Presiona aquí: <a href='".$_ENV["APP_URL"]."/confirmar-cuenta?token=" . $this->token . "'
        >Confirmar cuenta</a
        > </p>";
        $contenido .= "<p>Si no has solicitado esta cuenta puedes ignorar el mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        $mail->send();
    }

    public function enviarInstrucciones() {

        $mail = new PHPMailer();
        $mail->isSMTP();

        $mail->Host = $_ENV["EMAIL_HOST"];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV["EMAIL_USER"];
        $mail->Password = $_ENV["EMAIL_PASS"];
        $mail->SMTPSecure = "tls";
        $mail->Port = $_ENV["EMAIL_PORT"];

        $mail->setFrom("info@theelectribuffalo.com");
        $mail->addAddress("info@theeelectricbuffalo.com", "The Electric Buffalo");
        $mail->Subject = "Reestablece tu contraseña";
        $mail->isHTML();
        $mail->CharSet = "UTF-8";

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong>. Has solicitado reestablecer tu contraseña. Sigue el siguiente enlace</p>";
        $contenido .= "<p>Presiona aquí: <a href='". $_ENV["APP_URL"]. "/recuperar?token=" . $this->token . "'
        >Reestablecer contraseña</a
        > </p>";
        $contenido .= "<p>Si no has solicitado este cambio puedes ignorar el mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;
    
        $mail->send();
    }

    public function formularioContactoWeb(){
        $mail = new PHPMailer();
        //$mail->SMTPDebug  = 2;

        try {
            $mail->isSMTP();

            $mail->Host = $_ENV["EMAIL_HOST"];
            $mail->SMTPAuth = true;
            $mail->Username = $_ENV["EMAIL_USER"];
            $mail->Password = $_ENV["EMAIL_PASS"];
            $mail->SMTPSecure = "TLS";
            
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            $mail->setFrom("info@theelectricbuffalo.com", $this->email);
            $mail->addAddress("info@theelectricbuffalo.com", "The Electric Buffalo");
            $mail->addReplyTo($this->email, $this->nombre . " " . $this->apellidos);
            $mail->Subject = "Tienes un nuevo mensaje desde la Web";
            $mail->isHTML(true);
            $mail->CharSet = "UTF-8";
            $contenido = "<html><body>";
            $contenido .= "<p>Contacto: " . $this->nombre . " " . $this->apellidos . "</p>";
            $contenido .= "<p>Desde " . $this->localidad . ", " . $this->provincia . "</p>";
            $contenido .= "<p>Teléfono contacto: " . $this->telefono . "</p>";
            $contenido .= "<p>" . $this->mensaje . "</p>";
            $contenido .= "</body></html>";


            $mail->Body = $contenido;
            $mail->AltBody = $contenido;

            if ($mail->send()) {

                header("Location: /mensaje?msj=Mensaje enviado con éxito");
            } else {
                header("Location: /");
            }
        } catch (Exception $e) {
            echo "Error al enviar el correo: {$mail->ErrorInfo} <br>";
        }
    }
    }
