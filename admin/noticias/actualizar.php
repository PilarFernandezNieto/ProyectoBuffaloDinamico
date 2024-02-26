<?php
require "../../includes/app.php";
estaAutenticado();

use Model\Noticia;
use Intervention\Image\ImageManagerStatic as Image;

$id = filter_var($_GET["id"], FILTER_VALIDATE_INT);

if (!$id) {
    header("Location: /admin");
}
$noticia = Noticia::findById($id);

$errores = Noticia::getErrores();


$titulo = $noticia->titulo;
$intro = $noticia->intro;
$texto = limpiarHTML($noticia->texto);
$fecha = $noticia->fecha;
$fecha_creacion = $noticia->fecha_creacion;
$nombreIimagen = $noticia->imagen;


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $args = $_POST["noticia"];
    $noticia->sincronizar($args);
    $errores = $noticia->validar();

    $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
  
    if ($_FILES["noticia"]["tmp_name"]["imagen"]) {
        $imagen = Image::make($_FILES["noticia"]["tmp_name"]["imagen"])->fit(600, 600);
        $noticia->setImagen($nombreImagen);
    }


    if (empty($errores)) {
        if ($_FILES["noticia"]["tmp_name"]["imagen"]) {
            $imagen->save(CARPETA_IMAGENES . '/' . $nombreImagen);
        }
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
            <h1><i class="bi bi-ui-checks"></i>Actualizar Noticia</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door"></i></li>
            <li class="breadcrumb-item"><a href="listado_noticias.php">Noticias</a></li>
            <li class="breadcrumb-item"><a href="formulario_actualizar.php">Actualizar Noticia</a></li>
        </ul>
    </div>

    <div class="tile seccion">
        <div class="tile-body">
            <form action="" class="formulario" method="POST" enctype="multipart/form-data">

                <?php include "../../includes/templates/formulario_noticias.php"; ?>
                <input type="submit" class="boton-fireBrick" value="Actualizar">

            </form>
        </div>
    </div>
</main>


<?php



incluirTemplate("sidebar_footer");
