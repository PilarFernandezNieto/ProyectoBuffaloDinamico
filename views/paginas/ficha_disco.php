<main class="contenedor seccion">
    <h1><?php echo $disco->nombre; ?></h1>
    <div class="contenido-ficha-disco seccion5">
        <div class="texto-disco">
            <p>Año de edición: <span><?php echo $disco->anio_edicion; ?></span></p>
            <p>Sello: <span><?php echo $disco->sello; ?></span></p>
            <p>Formato: <span><?php echo $disco->formato; ?></span></p>
            <p><?php echo $disco->informacion; ?></p>

        </div>
        <div class="imagen-disco">
            <img loading="lazy" class="img-fluid" src="/imagenes/<?php echo $disco->imagen; ?>" alt="imagen_<?php echo $disco->nombre; ?>" />
        </div>
    </div>
    <a href="/discografia" class="boton-fireBrick">Volver</a>
</main>