<?php

namespace Controllers;
use Model\Musico;
use Model\Instrumento;
use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;

class MusicoController{
    public static function listado(Router $router) {
        protegeRuta();
        $musicos = Musico::findAll();

        $router->render("layoutAdmin", "musicos/listado", [
            "musicos" => $musicos
        ]);
    }

    public static function crear(Router $router) {
        protegeRuta();
        $musico = new Musico();
        $errores = Musico::getErrores();
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $musico = new Musico($_POST["musico"]);

            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

            if ($_FILES["musico"]["tmp_name"]["imagen"]) {
                $imagen = Image::make($_FILES["musico"]["tmp_name"]["imagen"])->fit(600, 400);
                $musico->setImagen($nombreImagen);
            }
            $errores = $musico->validar();

            if (empty($errores)) {

                if (!is_dir(CARPETA_IMAGENES)) {
                    mkdir(CARPETA_IMAGENES);
                }
                $imagen->save(CARPETA_IMAGENES . $nombreImagen);

                $musico->guardar();
            }
        }

        $router->render("layoutAdmin", "musicos/crear", [
            "musico" => $musico,
            "errores" => $errores
        ]);
    }

    public static function actualizar(Router $router) {
        protegeRuta();
        $id = validarORedireccionar("/admin");

        $errores = Musico::getErrores();

        $musico = Musico::findById($id);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $args = $_POST["musico"];
            $args["formato"] = $_POST["formato"];
            $musico->sincronizar($args);
            $errores = $musico->validar();

            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

            if ($_FILES["musico"]["tmp_name"]["imagen"]) {
                $imagen = Image::make($_FILES["musico"]["tmp_name"]["imagen"])->fit(600, 400);
                $musico->setImagen($nombreImagen);
            }


            if (empty($errores)) {
                if ($_FILES["musico"]["tmp_name"]["imagen"]) {
                    $imagen->save(CARPETA_IMAGENES . '/' . $nombreImagen);
                }
                $musico->guardar();
            }
        }

        $router->render("layoutAdmin", "musicos/actualizar", [
            "musico" => $musico,
            "errores" => $errores
        ]);
    }

    public static function eliminar() {
        protegeRuta();
        $id = filter_var($_POST["id"], FILTER_VALIDATE_INT);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $musico = Musico::findById($id);
            $musico->eliminar();
        }
    }
}
    
