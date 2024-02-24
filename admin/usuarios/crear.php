<?php
require "../../includes/app.php";
estaAutenticado();

use App\Usuario;
use App\Rol;

$usuario = new Usuario();
$roles = Rol::findAll();


$errores = Usuario::getErrores();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //debuguear($_POST);

    $usuario = new Usuario($_POST["usuario"]);

    //debuguear($usuario);
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
                <input type="submit" class="boton-fireBrick" value="Crear">
            </form>
        </div>
    </div>
</main>



<?php
incluirTemplate("sidebar_footer");
