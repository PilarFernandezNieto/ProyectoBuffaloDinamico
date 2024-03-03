<?php
namespace Controllers;
use MVC\Router;
use Model\Noticia;
use Model\Producto;

class PaginasController{
    public static function index(Router $router){
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
        $router->render("layout", "paginas/tienda", [
            "title" => $title

        ]);
    }
    public static function contacto(Router $router) {
        $title = "Contacto";
        $router->render("layout", "paginas/contacto", [
            "title" => $title

        ]);
    }
}