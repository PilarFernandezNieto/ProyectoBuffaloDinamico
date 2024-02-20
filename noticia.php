<?php
require "includes/app.php";
$db = conectarDB();
incluirTemplate("header");

$id = filter_var($_GET["id"], FILTER_VALIDATE_INT);
$query = "SELECT * FROM noticias WHERE id= {$id}";

$resultado = mysqli_query($db, $query);
if($resultado->num_rows == 0){
    header("Location: /");
}
$noticia = mysqli_fetch_assoc($resultado);



?>
<!-- TEMPLATE PARA EL DETALLE DE UNA NOTICIA -->

<main class="contenedor seccion5 alto-min contenido-centrado">
    <h1><?php echo $noticia["titulo"]; ?></h1>
    <img loading="lazy" src="imagenes/<?php echo $noticia['imagen']; ?>">

    <div class="contenido-noticias">
        <h2><?php echo $noticia["intro"]; ?></h2>
        <p class="fecha"><?php echo fechas($noticia["fecha"]); ?></p>
        <p class=texto><?php echo $noticia["texto"]; ?>
        </p>
    </div>

</main>


<?php
mysqli_close($db);
incluirTemplate("footer");
?>