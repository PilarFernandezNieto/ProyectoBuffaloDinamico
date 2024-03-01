<?php
namespace Controllers;
use MVC\Router;
use Model\Instrumento;
use Model\Musico;

class InstrumentoController{
    public static function listado(Router $router) {
        $instrumentos = Instrumento::findAllAndMusicos();
        
        

        $router->render("layoutAdmin", "instrumentos/listado", [
            "instrumentos" => $instrumentos
        ]);
    }
    public static function crear(Router $router) {
        $instrumento = new Instrumento();
        $musicos = Musico::findAll();
        $errores = Instrumento::getErrores();

            //debuguear($musicos);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
            $instrumento = new Instrumento($_POST["instrumento"]);

           
            $errores = $instrumento->validar();

            if (empty($errores)) {
                $instrumento->guardar();
            }
        }

        $router->render("layoutAdmin", "instrumentos/crear", [
            "instrumento" => $instrumento,
            "musicos" => $musicos,
            "errores" => $errores
        ]);
    }
    public static function actualizar(Router $router) {

        $id = validarORedireccionar("/admin");
        $instrumento = Instrumento::findById($id);
        $musicos = Musico::findAll();
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
            "musicos" => $musicos,
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