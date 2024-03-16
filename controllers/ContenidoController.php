<?php

namespace Controllers;

use MVC\Router;
use Model\Contenido;
use Intervention\Image\ImageManagerStatic as Image;

class ContenidoController{
    public static function listado(Router $router) {
        protegeRuta();
        $contenidos = Contenido::findAll("fecha_creacion");

        $router->render("layoutAdmin", "contenidos/listado", [
            "contenidos" => $contenidos
        ]);
    }
    public static function crear(Router $router) {
        protegeRuta();
        $contenido = new Contenido();
        $alertas = Contenido::getAlertas();
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $contenido = new Contenido($_POST["contenido"]);

            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

            if ($_FILES["contenido"]["tmp_name"]["imagen"]) {
                $imagen = Image::make($_FILES["contenido"]["tmp_name"]["imagen"])->fit(600, 600);
                $contenido->setImagen($nombreImagen);
            }
            $alertas = $contenido->validar();

            if (empty($alertas)) {

                if (!is_dir(CARPETA_IMAGENES)) {
                    mkdir(CARPETA_IMAGENES);
                }
                $imagen->save(CARPETA_IMAGENES . $nombreImagen);

                $contenido->guardar();
            }
        }

        $router->render("layoutAdmin", "contenidos/crear", [
            "contenido" => $contenido,
            "alertas" => $alertas

        ]);
    }

    public static function actualizar(Router $router) {
        protegeRuta();
        $id = validarORedireccionar("/admin");

        $alertas = Contenido::getAlertas();

        $contenido = Contenido::findById($id);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $args = $_POST["contenido"];
            $contenido->sincronizar($args);
            $alertas = $contenido->validar();

            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

            if ($_FILES["contenido"]["tmp_name"]["imagen"]) {
                $imagen = Image::make($_FILES["contenido"]["tmp_name"]["imagen"])->fit(600, 600);
                $contenido->setImagen($nombreImagen);
            }


            if (empty($alertas)) {
                if ($_FILES["contenido"]["tmp_name"]["imagen"]) {
                    $imagen->save(CARPETA_IMAGENES . '/' . $nombreImagen);
                }
                $contenido->guardar();
            }
        }

        $router->render("layoutAdmin", "contenidos/actualizar", [
            "contenido" => $contenido,
            "alertas" => $alertas
        ]);
    }

    public static function eliminar(Router $router) {
        protegeRuta();
        $id = filter_var($_POST["id"], FILTER_VALIDATE_INT);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $contenido = Contenido::findById($id);
            $contenido->eliminar();
        }
    }
}
