<?php

namespace Controllers;
use MVC\Router;
use Model\Noticia;

class AdminController{
    public static function index(Router $router){

        $router->render("admin/index", []);
    }
    public static function listado(Router $router) {
        $noticias = Noticia::findAll();

        $router->render("admin/noticias/listado", [
            "noticias" => $noticias
        ]);
    }

}
