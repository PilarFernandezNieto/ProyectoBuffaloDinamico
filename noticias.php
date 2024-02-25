<?php
require "includes/app.php";
incluirTemplate("header");
?>

<main class="seccion contenedor">
    <h1 class="text-center">Noticias</h1>

    <?php require "includes/templates/noticias.php"; ?>

</main>



<?php
include "./includes/templates/footer.php";
?>