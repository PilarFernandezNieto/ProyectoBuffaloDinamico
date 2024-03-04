<main class="contenedor seccion">
    <h1>Discografía</h1>
    <div class="contenedor-discos">
        <?php foreach ($discos as $disco): ?>
        <div class="disco">
                <img loading="lazy" class="img-fluid" src="/imagenes/<?php echo $disco->imagen; ?>" alt="imagen_<?php echo $disco->nombre; ?>" />
            <div class="contenido-disco">
                <h2><?php echo $disco->nombre; ?></h2>
                <p><span>Año de edición: </span><?php echo $disco->anio_edicion; ?></p>
                <p><?php echo $disco->texto; ?></p>
                <a href="/ficha_disco?id=<?php echo $disco->id; ?>" class="boton-fireBrick">Ver ficha</a>
            </div>

    </div>
    <?php endforeach; ?>
</main>
