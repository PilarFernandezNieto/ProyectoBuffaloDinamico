<?php
require "includes/app.php";

use Model\Usuario;

$usuario = new Usuario();

$errores = Usuario::getErrores();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $usuario = new Usuario($_POST["usuario"]);
    $errores = $usuario->validar();

    if (empty($errores)) {
        $usuario->guardar();
    }
}
incluirTemplate("header");

?>
<main class="app-content contenedor seccion alto-min seccion-registro">
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error"><?php echo $error; ?></div>
    <?php endforeach; ?>

    <div class="seccion">
        <h2>Introduce tus datos</h2>

        <form action="/admin/usuarios/crear.php" class="formulario" method="POST">
            <div class="row">
                <div class="mb-3 col-5">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" id="nombre" name="usuario[nombre]" placeholder="Nombre" value="<?php echo s($usuario->nombre); ?>">
                </div>
                <div class="mb-3 col-7">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" id="apellidos" name="usuario[apellidos]" placeholder="Apellidos" value="<?php echo s($usuario->apellidos); ?>">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" name="usuario[email]" placeholder="Email" value="<?php echo s($usuario->email); ?>">
                </div>
                <div class="mb-3 col-6">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" id="password" name="ususario[password]" value="<?php echo s($usuario->password); ?>">
                </div>
            </div>


            <input type="hidden" id="fecha_creacion" name="usuario[fecha_creacion]" value="<?php echo s($usuario->fecha_creacion); ?>">

            <input type="submit" class="boton-fireBrick" value="Enviar">
        </form>

    </div>
</main>



<?php
incluirTemplate("footer");
