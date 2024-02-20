<?php
require "../../includes/app.php";

$db = conectarDB();

// Mensajes de errores
$errores = [];




if ($_SERVER["REQUEST_METHOD"] === "POST") {


    // TODO VALIDAR UNA EXTENSIÓN MÍNIMA DE TEXTO DE LA NOTICIA
    // if(strlen($texto) < 50){
    //     $errrores[] = "Debes introducir un texto más largo";
    // }
    if (!$titulo) {
        $errores[] = "Debes introducir un título";
    }

    if (!$texto) {
        $errores[] = "Debes introducir un texto";
    }
    if (!$fecha) {
        $errores[] = "Debes introducir una fecha";
    }
    if (!$imagen["name"]) {
        $errores[] = "Debes introducir una imagen";
    }


    if (empty($errores)) {
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
            <li class="breadcrumb-item"><a href="formulario_crear.php">Nuevo Usuario</a></li>
        </ul>
    </div>

    <div class="tile seccion">
        <div class="tile-body">
            <form action="" class="formulario" method="POST">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $nombre; ?>">
                </div>
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" value="<?php echo $apellidos; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
                </div>
                <div class="mb-3">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" value="<?php echo $password; ?>">
                </div>
                <input type="submit" class="boton-fireBrick" value="Crear">
            </form>
        </div>
    </div>
</main>



<?php
mysqli_close($db);
incluirTemplate("sidebar_footer");
