<?php 
if(!isset($_SESSION)){
    session_start();
}

?>

<section class="imagen-header">
    <div class="overlay-header"></div>
    <div class="contenedor contenido-imagen">
        <h2>The Electric Buffalo</h2>
        <p>Patrolman</p>
    </div>


</section>
<?php include "contenido-destacado.php"; ?>
<!-- IMAGEN CENTRAL -->
<section class="imagen-central">
    <div class="overlay-central"></div>
    <div class="contenido-central">
        <h3>Discografía del Búfalo Eléctrico</h3>
        <a href="/discografia" class="boton-fireBrick">Pincha aquí</a>
    </div>


</section>
<!-- FIN IMAGEN CENTRAL -->

<!-- NOTICIAS -->
<section class="seccion contenedor">
    <h2 class="text-center">Noticias</h2>

    <?php
    $limite = 3;
    include "noticias-portada.php"; ?>



    <div class="alinear-derecha">
        <a href="/noticias" class="boton-fireBrick">Ver todas</a>
    </div>
</section>
<!-- FIN NOTICIAS -->