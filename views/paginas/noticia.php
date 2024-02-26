<main class="contenedor seccion5 alto-min contenido-centrado">
    <div class="noticia-individual">
        <h1><?php echo $noticia->titulo; ?></h1>
        <img loading="lazy" src="imagenes/<?php echo $noticia->imagen; ?>">
        <div class="contenido-noticias">
            <h2><?php echo $noticia->intro; ?></h2>
            <p class="fecha"><?php echo fechas($noticia->fecha); ?></p>
            <p class=texto><?php echo limpiarHTML($noticia->texto); ?>
            </p>
        </div>
        <div class="ms-3 mb-3">
            <a href="/" class="boton-fireBrick">Volver</a>
        </div>
    </div>

</main>