<?php
require "../../includes/app.php";
estaAutenticado();

use Model\Usuario;
use Model\Rol;

$id = filter_var($_GET["id"], FILTER_VALIDATE_INT);
if (!$id) {
    header("Location: /admin");
}
$usuario = Usuario::findById($id);
$roles = Rol::findAll();


$errores = Usuario::getErrores();
$nombre = $usuario->nombre;
$apellidos = $usuario->apellidos;
$email = $usuario->email;
$password = $usuario->password;
$idrol = $usuario->idrol;
$fecha_creacion = $usuario->fecha_creacion;


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $args = $_POST["usuario"];
    $usuario->sincronizar($args);
    
  

    $errores = $usuario->validar();

    if (empty($errores)) {
        $usuario->guardar();
    }
}
incluirTemplate("sidebar_menu");

?>
<main class="app-content contenedor seccion formulario-admin">
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error"><?php echo $error; ?></div>
    <?php endforeach; ?>
    <div class="app-title">
        <div>
            <h1><i class="bi bi-ui-checks"></i>Nuevo Usuario</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door"></i></li>
            <li class="breadcrumb-item"><a href="">Usuarios</a></li>
            <li class="breadcrumb-item"><a href="crear.php">Nuevo Usuario</a></li>
        </ul>
    </div>

    <div class="tile seccion">
        <div class="tile-body">
            <form action="" class="formulario" method="POST">

                <?php include "../../includes/templates/formulario_usuarios.php"; ?>
                <input type="submit" class="boton-fireBrick" value="Actualizar">
            </form>
        </div>
    </div>
</main>



<?php
mysqli_close($db);
incluirTemplate("sidebar_footer");
