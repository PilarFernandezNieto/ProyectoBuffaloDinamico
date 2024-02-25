<!-- TEMPLATE NOTICIAS PORTADA -->
<?php
use App\Noticia;
$noticias = Noticia::findAll("fecha_creacion DESC", 3);

?>
<div class="noticias-portada">
    <?php foreach($noticias as $noticia) : ?>
        <div class="noticia">

            <img loading="lazy" src="/imagenes/<?php echo $noticia->imagen; ?>" alt="Imagen Noticias" class="img-fluid">
            <div class="contenido-noticias">
                <h3><?php echo $noticia->titulo; ?></h3>
                <div class="texto-noticia">
                    <h4><?php echo $noticia->intro; ?></h4>
                    <p class="texto"><?php echo truncate($noticia->texto, 150); ?></p>
                    <p class="fecha alinear-derecha"><?php echo fechas($noticia->fecha); ?></p>
                </div>
                <a href="noticia.php?id=<?php echo $noticia->id; ?>" class="boton-fireBrick">Más...</a>

            </div>
        </div>
    <?php endforeach; ?>

</div>
<!-- FIN TEMPLATE NOTICIAS PORTADA -->