<!-- TEMPLATE DEL LISTADO DE NOTICIAS -->
<?php
$db = conectarDB();

$query = "SELECT * FROM noticias";
$consulta = mysqli_query($db, $query);

?>


<div class="contenedor-noticias">
    <?php while ($noticia = mysqli_fetch_assoc($consulta)) : ?>
        <div class="noticia">

            <img class="custom-img" loading=" lazy" src="/imagenes/<?php echo $noticia['imagen']; ?>" alt="ELECTRIC_BUFFALO">
            <div class="contenido-noticias">
                <h3><?php echo $noticia["titulo"]; ?></h3>
                <div class="texto-noticia">
                    <h4><?php echo $noticia["intro"]; ?></h4>
                    <p class="texto"><?php echo truncate($noticia["texto"], 150); ?></p>
                    <p class="fecha alinear-derecha"><?php echo fechas($noticia["fecha"]); ?></p>
                </div>
                <a href="noticia.php?id=<?php echo $noticia['id']; ?>" class="boton-fireBrick">Más...</a>

            </div>
        </div>
    <?php endwhile; ?>
</div> <!-- fin contenedor-noticias -->

<?php mysqli_close($db); ?>