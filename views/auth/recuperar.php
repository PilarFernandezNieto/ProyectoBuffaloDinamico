<main class="contenedor seccion alto-min seccion-login">
    <h1>Recuperar Contraseña</h1>


    <form action="" class="formulario ancho-login" method="POST">
        <?php
        include_once __DIR__ . "/../templates/alertas.php";
        ?>
        <?php if($error)  return; ?>
        <div class="mb-5">
            <label for="password">Contraseña</label>
            <input type="password" placeholder="Nueva contraseña" id="password" name="password">
        </div>
        <div class="mb-3">
            <input type="submit" class="boton-fireBrick-block w-100" value="Guardar"></input>
        </div>
       


    </form>
    <div class="mb-3 acciones-login">
        <p>¿Ya tienes una cuenta?<a href="/login">Inicia sesión</a></p>
        <p>¿Aún no tienes una cuenta? <a href="/registrar">Regístrate aquí</a></p>

    </div>

</main>