<main class="contenedor seccion alto-min seccion-login">
    <h1>Inicia sesión</h1>

    <form action="/login" class="formulario ancho-login" method="POST">
        <?php foreach ($errores as $error) : ?>
            <div class="alerta error"><?php echo $error; ?></div>
        <?php endforeach; ?>
        <h3><i class="fa-solid fa-arrow-right-to-bracket me-3"></i>Introduce tus datos</h3>
        <div class="mb-5">
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
    <div class="mb-3 acciones-login">
        <p>¿Aún no tienes una cuenta? <a href="/registrar">Regístrate aquí</a></p>
        <p>¿Olvidaste tu contraseña? <a href="/olvide">Recuperar</a></p>
    </div>

</main>