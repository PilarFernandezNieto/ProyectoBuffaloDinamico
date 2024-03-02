<?php

namespace Controllers;
use Model\Categoria;
use MVC\Router;

class CategoriaController{
    public static function listado(Router $router) {
        $categorias = Categoria::findAll();

        $router->render("layoutAdmin", "categorias/listado", [
            "categorias" => $categorias
        ]);
    }

    public static function crear(Router $router) {
        $categoria = new Categoria();
        $errores = Categoria::getErrores();
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            //debuguear($_POST);

            $categoria = new Categoria($_POST["categoria"]);

         
            $errores = $categoria->validar();

            if (empty($errores)) {
                $categoria->guardar();
            }
        }

        $router->render("layoutAdmin", "categorias/crear", [
            "categoria" => $categoria,
            "errores" => $errores
        ]);
    }
    public static function actualizar(Router $router) {

        $id = validarORedireccionar("/admin");
        $categoria = Categoria::findById($id);
        $errores = Categoria::getErrores();

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $args = $_POST["categoria"];
            $categoria->sincronizar($args);
            $errores = $categoria->validar();

            if (empty($errores)) {
                $categoria->guardar();
            }
        }

        $router->render("layoutAdmin", "categorias/actualizar", [
            "categoria" => $categoria,
            "errores" => $errores
        ]);
    }

    public static function eliminar(Router $router) {
        $id = filter_var($_POST["id"], FILTER_VALIDATE_INT);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $categoria = Categoria::findById($id);
            $categoria->eliminar();
        }
    }

}