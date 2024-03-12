<?php

namespace Controllers;

use MVC\Router;
use Model\Producto;

class DiscoController{
    public static function listado(Router $router) {
        protegeRuta();
        $discos = Producto::getProducto("discos");

        $router->render("layoutAdmin", "discos/listado", [
            "discos" => $discos
        ]);
    }

   
}