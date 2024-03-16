<main class="contenedor seccion alto-min seccion-login">
    <h1>Recuperar Contraseña</h1>
    <?php
    include_once __DIR__ . "/../templates/alertas.php";
    ?>
    <form action="/login" class="formulario ancho-login" method="POST">


        <div class="mb-5">
            <label for="email">Email</label>
            <input type="email" placeholder="Email" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <input type="submit" class="boton-fireBrick-block w-100" value="Recuperar contraseña" required></input>
        </div>


    </form>
    <div class="mb-3 acciones-login">
        <p>¿Aún no tienes una cuenta? <a href="/registrar">Regístrate aquí</a></p>
        <p>¿Ya tienes una cuenta? <a href="/login">Inicia sesión</a></p>
</main>