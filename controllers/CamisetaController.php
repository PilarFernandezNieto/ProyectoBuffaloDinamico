<?php

namespace Controllers;

use MVC\Router;
use Model\Producto;

class CamisetaController {
    public static function listado(Router $router) {
        protegeRuta();
        $camisetas = Producto::getProducto("camisetas");

        $router->render("layoutAdmin", "camisetas/listado", [
            "camisetas" => $camisetas
        ]);
    }
}
