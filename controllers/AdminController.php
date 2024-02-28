<?php

namespace Controllers;
use MVC\Router;
use Model\Noticia;
use Model\Disco;
use Model\Usuario;

class AdminController{
    public static function index(Router $router){

        $router->render("layoutAdmin", "admin/index", []);
    }

   
}
