<?php

use Model\Noticia;
require "includes/app.php";

$id = filter_var($_GET["id"], FILTER_VALIDATE_INT);
if(!$id){
    header("Location: /");
}

$noticia = Noticia::findById($id);



incluirTemplate("header");
?>
<!-- TEMPLATE PARA EL DETALLE DE UNA NOTICIA -->

<main class="contenedor seccion5 alto-min contenido-centrado">
    <div class="noticia-individual">
        <h1><?php echo $noticia->titulo; ?></h1>
        <img loading="lazy" src="imagenes/<?php echo $noticia->imagen; ?>">
        <div class="contenido-noticias">
            <h2><?php echo $noticia->intro; ?></h2>
            <p class="fecha"><?php echo fechas($noticia->fecha); ?></p>
            <p class=texto><?php echo $noticia->texto; ?>
            </p>
        </div>
        <div class="ms-3 mb-3">
            <a href="index.php" class="boton-fireBrick">Volver</a>
        </div>
    </div>

</main>


<?php
mysqli_close($db);
incluirTemplate("footer");
?>