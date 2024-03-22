<main class="contenedor seccion alto-min seccion-login">
    <h1>Inicia sesión</h1>


    <form action="/admin" class="formulario ancho-login" method="POST">
        <h3><i class="fa-solid fa-arrow-right-to-bracket me-3"></i>Introduce tus datos</h3>
        <?php
        include_once __DIR__ . "/../templates/alertas.php";
        ?>
        <div class="my-5">
            <label for="email">Email</label>
            <input type="email" placeholder="Email" id="email" name="email">
        </div>
        <div class="mb-5">
            <label for="password">Contraseña</label>
            <input type="password" placeholder="Contraseña" id="password" name="password">
        </div>
        <div class="mb-3">
            <input type="submit" class="boton-fireBrick-block w-100" value="Inicia sesión"></input>
        </div>


    </form>
    //TODO eliminar las acciones de registro y de recuperación
    <div class="mb-3 acciones-login">
        <p>¿Aún no tienes una cuenta? <a href="/registrar">Regístrate aquí</a></p>
        <p>¿Olvidaste tu contraseña? <a href="/olvide">Recuperar</a></p>
    </div>

</main>