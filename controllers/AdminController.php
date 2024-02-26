<?php

namespace Controllers;
use MVC\Router;
use Model\Noticia;

class AdminController{
    public static function index(Router $router){

        $router->render("layoutAdmin", "admin/index", []);
    }


}
