<?php

namespace Controllers;
use MVC\Router;
use Model\Noticia;
use Model\Disco;
use Model\Usuario;

class AdminController{
    public static function index(Router $router){
        if (!isset($_SESSION)) {
            session_start();
        }
     
        protegeRuta();

        $router->render("layoutAdmin", "admin/index", []);
    }

   
}
