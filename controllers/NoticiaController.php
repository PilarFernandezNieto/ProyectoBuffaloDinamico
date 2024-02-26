<?php

namespace Controllers;
use MVC\Router;
use Model\Noticia;
use Intervention\Image\ImageManagerStatic as Image;

class NoticiaController{
    public static function listado(Router $router) {
        $noticias = Noticia::findAll();

        $router->render("noticias/listado", [
            "noticias" => $noticias
        ]);
    }

    public static function crear(Router $router) {
        $noticia = new Noticia();
        $errores = Noticia::getErrores();
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $noticia = new Noticia($_POST["noticia"]);

            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

            if ($_FILES["noticia"]["tmp_name"]["imagen"]) {
                $imagen = Image::make($_FILES["noticia"]["tmp_name"]["imagen"])->fit(600, 600);
                $noticia->setImagen($nombreImagen);
            }
            $errores = $noticia->validar();

            if (empty($errores)) {

                if (!is_dir(CARPETA_IMAGENES)) {
                    mkdir(CARPETA_IMAGENES);
                }
                $imagen->save(CARPETA_IMAGENES . $nombreImagen);

                $noticia->guardar();
            }
        }

        $router->render("noticias/crear", [
            "noticia" => $noticia,
            "errores" => $errores
            
        ]);
    }

    public static function actualizar() {
        echo "Actualizar";
    }
}
