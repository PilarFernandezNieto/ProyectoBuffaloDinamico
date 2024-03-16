<?php

namespace Controllers;
use MVC\Router;
use Model\Noticia;
use Intervention\Image\ImageManagerStatic as Image;

class NoticiaController{
    public static function listado(Router $router) {
        protegeRuta();
        $noticias = Noticia::findAll("fecha DESC");

        $router->render("layoutAdmin", "noticias/listado", [
            "noticias" => $noticias
        ]);
    }

    public static function crear(Router $router) {
        protegeRuta();
        $noticia = new Noticia();
        $alertas = Noticia::getAlertas();
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $noticia = new Noticia($_POST["noticia"]);

            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

            if ($_FILES["noticia"]["tmp_name"]["imagen"]) {
                $imagen = Image::make($_FILES["noticia"]["tmp_name"]["imagen"])->fit(600, 600);
                $noticia->setImagen($nombreImagen);
            }
            $alertas = $noticia->validar();

            if (empty($alertas)) {

                if (!is_dir(CARPETA_IMAGENES)) {
                    mkdir(CARPETA_IMAGENES);
                }
                $imagen->save(CARPETA_IMAGENES . $nombreImagen);

                $noticia->guardar();
            }
        }

        $router->render("layoutAdmin", "noticias/crear", [
            "noticia" => $noticia,
            "alertas" => $alertas
            
        ]);
    }

    public static function actualizar(Router $router) {
        protegeRuta();
        $id = validarORedireccionar("/admin");

        $alertas = Noticia::getAlertas();

        $noticia = Noticia::findById($id);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $args = $_POST["noticia"];
            $noticia->sincronizar($args);
            $alertas = $noticia->validar();

            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

            if ($_FILES["noticia"]["tmp_name"]["imagen"]) {
                $imagen = Image::make($_FILES["noticia"]["tmp_name"]["imagen"])->fit(600, 600);
                $noticia->setImagen($nombreImagen);
            }


            if (empty($alertas)) {
                if ($_FILES["noticia"]["tmp_name"]["imagen"]) {
                    $imagen->save(CARPETA_IMAGENES . '/' . $nombreImagen);
                }
                $noticia->guardar();
            }
        }

        $router->render("layoutAdmin", "noticias/actualizar", [
            "noticia" => $noticia,
            "alertas" => $alertas
        ]);
    }

    public static function eliminar(Router $router) {
        protegeRuta();
        $id = filter_var($_POST["id"], FILTER_VALIDATE_INT);
    
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $noticia = Noticia::findById($id);
            $noticia->eliminar();
        }
    }
}
    

