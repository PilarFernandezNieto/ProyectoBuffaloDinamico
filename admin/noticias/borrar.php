<?php
require "../../includes/app.php";
$auth = estaAutenticado();
if (!$auth) {
    header("Location: /");
}
$db = conectarDB();


$id = filter_var($_POST["id"], FILTER_VALIDATE_INT);

if ($id) {

    // Eliminar la imagen
    $query = "SELECT imagen FROM noticias WHERE id={$id}";
    $resultado = $db->query($query);

    $consulta = mysqli_fetch_assoc($resultado);
    unlink("../../imagenes/" . $consulta["imagen"]);

    $query = "DELETE FROM noticias WHERE id={$id}";
    $resultado = $db->query($query);

    if ($resultado) {
        header("Location: listado_noticias.php?exito=true&accion=eliminar");
    }
}

?>
<?php
mysqli_close($db);

?>