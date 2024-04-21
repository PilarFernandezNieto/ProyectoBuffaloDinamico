<?php

namespace Controllers;

use MVC\Router;
use Model\Noticia;
use Model\Producto;
use Model\Contenido;
use Clases\Email;

class PaginasController {
    public static function index(Router $router) {

        if (!isset($_SESSION)) {
            session_start();
        }
  
        
        $noticias = Noticia::findAll("id DESC", 3);
        $contenido = Contenido::where("portada", 1);
        $title = "Inicio";
        $router->render("layout", "paginas/index", [
            "noticias" => $noticias,
            "contenido" => $contenido,
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
        $noticias = Noticia::findAll("id DESC");
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
        $email = new Email();
        $alertas = $email->getAlertas();

     

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $nombre = s($_POST["nombre"]);
            $apellidos = s($_POST["apellidos"]);
            $emailUser = s($_POST["email"]);
            $telefono = s($_POST["telefono"]);
            $localidad = s($_POST["localidad"]);
            $provincia = s($_POST["provincia"]);
            $mensaje = strip_tags($_POST["mensaje"]);

           
        
            $email = new Email($nombre, $apellidos, $emailUser, $telefono, $localidad, $provincia, $mensaje);

            $alertas = $email->validar();
            
            if(empty($alertas)){

               $email->formularioContactoWeb();
            }
      

        }

     
        $router->render("layout", "paginas/contacto", [
            "title" => $title,
            "alertas" => $alertas,
            "email" => $email

        ]);
    }

    public static function mensaje(Router $router) {
        $mensaje = strip_tags($_GET["msj"]);
     
      

        $title = "Mensaje";
        $router->render("layout", "templates/mensaje", [
            "mensaje" => $mensaje,
            "title"=> $title
        ]);
    }
}
