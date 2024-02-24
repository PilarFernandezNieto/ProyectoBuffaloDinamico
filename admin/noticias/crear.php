<?php
require "../../includes/app.php";
estaAutenticado();

use App\Noticia;
use Intervention\Image\ImageManagerStatic as Image;

$noticia = new Noticia();

// Mensajes de errores
$errores = Noticia::getErrores();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

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
        // debuguear(CARPETA_IMAGENES . $nombreImagen);

        $noticia->guardar();
    }
}
incluirTemplate("sidebar_menu");

?>
<main class="app-content contenedor seccion formulario-admin">
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error"><?php echo $error; ?></div>
    <?php endforeach; ?>
    <div class="app-title">
        <div>
            <h1><i class="bi bi-ui-checks"></i>Nueva Noticia</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door"></i></li>
            <li class="breadcrumb-item"><a href="listado_noticias.php">Noticias</a></li>
            <li class="breadcrumb-item"><a href="crear.php">Nueva Noticia</a></li>
        </ul>
    </div>

    <div class="tile seccion">
        <div class="tile-body">
            <form action="" class="formulario" method="POST" enctype=multipart/form-data>

                <?php include "../../includes/templates/formulario_noticias.php"; ?>

                <input type="submit" class="boton-fireBrick" value="Crear">

            </form>
        </div>
    </div>
</main>



<?php

incluirTemplate("sidebar_footer");
