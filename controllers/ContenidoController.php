<?php

namespace Controllers;

use MVC\Router;
use Model\Contenido;
use Intervention\Image\ImageManagerStatic as Image;

class ContenidoController{
    public static function listado(Router $router) {
        $contenidos = Contenido::findAll("fecha_creacion");

        $router->render("layoutAdmin", "contenidos/listado", [
            "contenidos" => $contenidos
        ]);
    }
    public static function crear(Router $router) {
        $contenido = new Contenido();
        $errores = Contenido::getErrores();
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $contenido = new Contenido($_POST["contenido"]);

            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

            if ($_FILES["contenido"]["tmp_name"]["imagen"]) {
                $imagen = Image::make($_FILES["contenido"]["tmp_name"]["imagen"])->fit(600, 600);
                $contenido->setImagen($nombreImagen);
            }
            $errores = $contenido->validar();

            if (empty($errores)) {

                if (!is_dir(CARPETA_IMAGENES)) {
                    mkdir(CARPETA_IMAGENES);
                }
                $imagen->save(CARPETA_IMAGENES . $nombreImagen);

                $contenido->guardar();
            }
        }

        $router->render("layoutAdmin", "contenidos/crear", [
            "contenido" => $contenido,
            "errores" => $errores

        ]);
    }

    public static function actualizar(Router $router) {
        $id = validarORedireccionar("/admin");

        $errores = Contenido::getErrores();

        $contenido = Contenido::findById($id);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $args = $_POST["contenido"];
            $contenido->sincronizar($args);
            $errores = $contenido->validar();

            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

            if ($_FILES["contenido"]["tmp_name"]["imagen"]) {
                $imagen = Image::make($_FILES["contenido"]["tmp_name"]["imagen"])->fit(600, 600);
                $contenido->setImagen($nombreImagen);
            }


            if (empty($errores)) {
                if ($_FILES["contenido"]["tmp_name"]["imagen"]) {
                    $imagen->save(CARPETA_IMAGENES . '/' . $nombreImagen);
                }
                $contenido->guardar();
            }
        }

        $router->render("layoutAdmin", "contenidos/actualizar", [
            "contenido" => $contenido,
            "errores" => $errores
        ]);
    }

    public static function eliminar(Router $router) {
        $id = filter_var($_POST["id"], FILTER_VALIDATE_INT);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $contenido = Contenido::findById($id);
            $contenido->eliminar();
        }
    }
}
