<main class="contenedor seccion alto-min seccion-login">
    <h1>Inicia sesión</h1>

    <form action="/login" class="formulario ancho-login" method="POST">
        <?php foreach ($errores as $error) : ?>
            <div class="alerta error"><?php echo $error; ?></div>
        <?php endforeach; ?>
        <h3><i class="fa-solid fa-arrow-right-to-bracket me-3"></i>Introduce tus datos</h3>
        <div class="mb-5">
            <label for="email">Email</label>
            <input type="email" placeholder="Email" id="email" name="email" required>
        </div>
        <div class="mb-5">
            <label for="password">Contraseña</label>
            <input type="password" placeholder="Contraseña" id="password" name="password">
        </div>
        <div class="mb-3 d-grid">
            <input type="submit" class="boton-fireBrick-block" value="Inicia sesión" required></input>
        </div>
        <div class="mb-3">
            <p class="registro">¿Aún no tienes una cuenta? <a href="registro.php">Regístrate aquí</a></p>
        </div>

    </form>

</main>