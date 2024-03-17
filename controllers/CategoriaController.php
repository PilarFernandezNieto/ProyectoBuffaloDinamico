<?php

namespace Controllers;
use Exception;
use Model\Categoria;
use MVC\Router;

class CategoriaController{
    public static function listado(Router $router) {
        protegeRuta();
        $categorias = Categoria::findAll();

        $router->render("layoutAdmin", "categorias/listado", [
            "categorias" => $categorias
        ]);
    }

    public static function crear(Router $router) {
        protegeRuta();
        $categoria = new Categoria();
        $alertas = Categoria::getAlertas();
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            //debuguear($_POST);

            $categoria = new Categoria($_POST["categoria"]);

         
            $alertas = $categoria->validar();

            if (empty($alertas)) {
                try {
                    $resultado = $categoria->guardar();
                    if ($resultado) {
                        header("Location: listado?exito=true&accion=crear");
                    }
                } catch (Exception $e) {
                    header("Location: listado?exito=false&accion=crear&mensaje=" . $e->getMessage());
                }
            }
        }

        $router->render("layoutAdmin", "categorias/crear", [
            "categoria" => $categoria,
            "alertas" => $alertas
        ]);
    }
    public static function actualizar(Router $router) {

        protegeRuta();
        $id = validarORedireccionar("/admin");
        $categoria = Categoria::findById($id);
        $alertas = Categoria::getAlertas();

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $args = $_POST["categoria"];
            $categoria->sincronizar($args);
            $alertas = $categoria->validar();

            if (empty($alertas)) {
                try {
                    $resultado = $categoria->guardar();
                    if ($resultado) {
                        header("Location: listado?exito=true&accion=crear");
                    }
                } catch (Exception $e) {
                    header("Location: listado?exito=false&accion=crear&mensaje=" . $e->getMessage());
                }
            }
        }

        $router->render("layoutAdmin", "categorias/actualizar", [
            "categoria" => $categoria,
            "alertas" => $alertas
        ]);
    }

    public static function eliminar(Router $router) {
        protegeRuta();
        $id = filter_var($_POST["id"], FILTER_VALIDATE_INT);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $categoria = Categoria::findById($id);
            $categoria->eliminar();
        }
    }

}