<main class="seccion contenedor">
    <h1 class="text-center">Noticias</h1>

    <div class="contenedor-noticias">
        <?php foreach ($noticias as $noticia) : ?>
            <div class="noticia">

                <img class="custom-img" loading=" lazy" src="/imagenes/<?php echo $noticia->imagen; ?>" alt="ELECTRIC_BUFFALO">
                <div class="contenido-noticias">
                    <h3><?php echo $noticia->titulo; ?></h3>
                    <div class="texto-noticia">
                        <h4><?php echo $noticia->intro; ?></h4>
                        <div class="texto"><?php echo truncate($noticia->texto, 125); ?></div>
                        <p class="fecha alinear-derecha"><?php echo fechas($noticia->fecha); ?></p>
                    </div>
                    <a href="/noticia?id=<?php echo $noticia->id; ?>" class="boton-fireBrick boton-mas">Más...</a>

                </div>
            </div>
        <?php endforeach; ?>
    </div> <!-- fin contenedor-noticias -->

</main>