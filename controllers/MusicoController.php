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
        $alertas = Musico::getAlertas();
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $musico = new Musico($_POST["musico"]);

            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

            if ($_FILES["musico"]["tmp_name"]["imagen"]) {
                $imagen = Image::make($_FILES["musico"]["tmp_name"]["imagen"])->fit(600, 400);
                $musico->setImagen($nombreImagen);
            }
            $alertas = $musico->validar();

            if (empty($alertas)) {

                if (!is_dir(CARPETA_IMAGENES)) {
                    mkdir(CARPETA_IMAGENES);
                }
                $imagen->save(CARPETA_IMAGENES . $nombreImagen);

                $musico->guardar();
            }
        }

        $router->render("layoutAdmin", "musicos/crear", [
            "musico" => $musico,
            "alertas" => $alertas
        ]);
    }

    public static function actualizar(Router $router) {
        protegeRuta();
        $id = validarORedireccionar("/admin");

        $alertas = Musico::getAlertas();

        $musico = Musico::findById($id);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $args = $_POST["musico"];
            $args["formato"] = $_POST["formato"];
            $musico->sincronizar($args);
            $alertas = $musico->validar();

            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

            if ($_FILES["musico"]["tmp_name"]["imagen"]) {
                $imagen = Image::make($_FILES["musico"]["tmp_name"]["imagen"])->fit(600, 400);
                $musico->setImagen($nombreImagen);
            }


            if (empty($alertas)) {
                if ($_FILES["musico"]["tmp_name"]["imagen"]) {
                    $imagen->save(CARPETA_IMAGENES . '/' . $nombreImagen);
                }
                $musico->guardar();
            }
        }

        $router->render("layoutAdmin", "musicos/actualizar", [
            "musico" => $musico,
            "alertas" => $alertas
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
    
