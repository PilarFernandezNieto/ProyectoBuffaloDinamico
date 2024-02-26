<?php
namespace Controllers;
use MVC\Router;
use Model\Noticia;

class PaginasController{
    public static function index(Router $router){
        $noticias = Noticia::findAll("", 3);
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
       
  
    }
    public static function noticia() {
        echo "Desde noticia";
    }
    public static function discografia() {
        echo "Desde discografia";
    }
    public static function disco() {
        echo "Desde disco";
    }
}