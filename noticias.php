<?php
require "includes/app.php";
incluirTemplate("header");
?>

<main class="seccion contenedor">
    <h3 class="text-center">Noticias</h3>

    <?php require "includes/templates/noticias.php"; ?>

</main>



<?php
include "./includes/templates/footer.php";
?>