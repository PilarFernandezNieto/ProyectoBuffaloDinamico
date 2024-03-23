<?php

namespace Controllers;

use MVC\Router;
use Model\Noticia;
use Model\Producto;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class PaginasController {
    public static function index(Router $router) {
        $noticias = Noticia::findAll("fecha DESC", 3);
        $title = "Inicio";
        $router->render("layout", "paginas/index", [
            "noticias" => $noticias,
            "title" => $title

        ]);
    }
    public static function historia(Router $router) {
        $title = "Historia";
        $router->render("layout", "paginas/historia", [
            "title" => $title

        ]);
    }
    public static function noticias(Router $router) {
        $noticias = Noticia::findAll("fecha_creacion DESC");
        $title = "Noticias";
        $router->render("layout", "paginas/noticias", [
            "noticias" => $noticias,
            "title" => $title

        ]);
    }
    public static function noticia(Router $router) {
        $id = validarORedireccionar("/");
        $noticia = Noticia::findById($id);
        $title = "Noticia";
        $router->render("layout", "paginas/noticia", [
            "noticia" => $noticia,
            "title" => $title

        ]);
    }
    public static function discografia(Router $router) {
        $title = "Discografía";
        $discos = Producto::getProducto("discos", "anio_edicion DESC");

        $router->render("layout", "paginas/discografia", [
            "discos" => $discos,
            "title" => $title

        ]);
    }
    public static function ficha_disco(Router $router) {
        $id = validarORedireccionar("/");
        $disco = Producto::findById($id);
        $title = $disco->nombre;


        $router->render("layout", "paginas/ficha_disco", [
            "disco" => $disco,
            "title" => $title

        ]);
    }
    public static function tienda(Router $router) {
        $title = "Tienda";
        $discos = Producto::getProducto("discos", "anio_edicion DESC");
        $camisetas = Producto::getProducto("camisetas");
        $router->render("layout", "paginas/tienda", [
            "title" => $title,
            "discos" => $discos,
            "camisetas" => $camisetas
        ]);
    }
    public static function contacto(Router $router) {
        $title = "Contacto";

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $contacto = $_POST["contacto"];
            $mail = new PHPMailer;
            $remite = $contacto["nombre"] . " " . $contacto["apellidos"];
            $email = $contacto["email"];
            $telefono = $contacto["telefono"];
            $direccion = $contacto["direccion"];
            $localidad = $contacto["localidad"];
            $provincia = $contacto["provincia"];
            $mensaje = $contacto["mensaje"];


            try {
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->isSMTP();


                $mail->Host = "smtp.ionos.es";
                $mail->SMTPAuth = true;
                $mail->Username = $_ENV["EMAIL_USER"];
                $mail->Password = $_ENV["EMAIL_PASS"];
                $mail->SMTPSecure = "TLS";
                $mail->Port = 587;

                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );



                $mail->setFrom("info@theelectricbuffalo.com", $email);
                $mail->addAddress("info@theelectricbuffalo.com", "The Electric Buffalo");
                $mail->addReplyTo($email,$remite);
                $mail->Subject = "Tienes un nuevo mensaje";
                $mail->isHTML(true);
                $mail->CharSet = "UTF-8";
                $contenido = "<html><p>" . $mensaje . "</p></html>";

                $mail->Body = $contenido;
                $mail->AltBody = "Esto es texto alternativo sin HTML";
                $mail->send();
                //TODO añadir mensajes generalizados con GET
                header("Location: /mensaje");
            } catch (Exception $e) {
                echo "Error al enviar el correo: {$mail->ErrorInfo} <br>";
            }
        }


        $router->render("layout", "paginas/contacto", [
            "title" => $title

        ]);
     }

    public static function mensaje(Router $router) {
        $mensaje = "Mensaje enviado";
        $title = "Mensaje";
        $router->render("layout", "templates/mensaje", [
            "mensaje" => $mensaje
        ]);
    }
}
