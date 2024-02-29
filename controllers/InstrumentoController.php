<?php
namespace Controllers;
use MVC\Router;
use Model\Instrumento;

class InstrumentoController{
    public static function listado(Router $router) {
        $instrumentos = Instrumento::findAll();

        $router->render("layoutAdmin", "instrumentos/listado", [
            "instrumentos" => $instrumentos
        ]);
    }
    public static function crear(Router $router) {
        $instrumento = new Instrumento();
        $errores = Instrumento::getErrores();
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            //debuguear($_POST);

            $instrumento = new Instrumento($_POST["instrumento"]);

           
            $errores = $instrumento->validar();

            if (empty($errores)) {
                $instrumento->guardar();
            }
        }

        $router->render("layoutAdmin", "instrumentos/crear", [
            "instrumento" => $instrumento,
            "errores" => $errores
        ]);
    }
    public static function actualizar(Router $router) {

        $id = validarORedireccionar("/admin");
        $instrumento = Instrumento::findById($id);
        $errores = Instrumento::getErrores();

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $args = $_POST["instrumento"];
            $instrumento->sincronizar($args);
            $errores = $instrumento->validar();

            if (empty($errores)) {
                $instrumento->guardar();
            }
        }

        $router->render("layoutAdmin", "instrumentos/actualizar", [
            "instrumento" => $instrumento,
            "errores" => $errores
        ]);
    }

    public static function eliminar(Router $router) {
        $id = filter_var($_POST["id"], FILTER_VALIDATE_INT);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $instrumento = Instrumento::findById($id);
            $instrumento->eliminar();
        }
    }
    
}