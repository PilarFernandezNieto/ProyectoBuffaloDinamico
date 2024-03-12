<main class="contenedor-formulario">
    <h1>Contacta con nosotros</h1>
    <p>Utiliza este formulario o escríbenos a <a href="mailto:info@theelectricbuffalo.com">info@theelectricbuffalo.com</a></p>
    <form class="formulario" action="/contacto" method="POST">
        <div class="row">
            <div class="col-12 col-md-5">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="contacto[nombre]" placeholder="Nombre" />
            </div>
            <div class="col-12 col-md-7 ">
                <label for="apellidos">Apellidos</label>
                <input type="text" id="apellidos" name="contacto[apellidos]" placeholder="Apellidos" />
            </div>
        </div>
        <div class="row campo">
            <div class=" col-12 col-md-7">
                <label for="email">Email</label>
                <input type="email" id="email" name="contacto[email]" placeholder="Email" />
            </div>
            <div class="col-12 col-md-5">
                <label for="telefono">Teléfono</label>
                <input type="tel" name="contacto[telefono]" id="telefono" placeholder="Teléfono">
            </div>
        </div>

        <div class="campo">
            <label for="direccion">Dirección</label>
            <input type="text" id="direccion" name="contacto[direccion]" placeholder="Dirección" />
        </div>
        <div class="row campo">
            <div class="col-12 col-md-6">
                <label for="localidad">Localidad</label>
                <input type="text" id="localidad" name="contacto[localidad]" placeholder="Localidad">
            </div>
            <div class="col-12 col-md-6">
                <label for="provincia">Provincia</label>
                <input type="text" id="provincia" name="contacto[provincia]" placeholder="Provincia">
            </div>
        </div>

        <div class="campo">
            <label for="mensaje">Deja tu mensaje</label>
            <textarea name="contacto[mensaje]" id="mensaje" rows="3"></textarea>
        </div>
        <!-- <div class="row campo">
                <input type="checkbox" class="col-2" value="Politica_privacidad" id="privacidad">
                <label for="privacidad" class="col-10">Acepta los términos y condiciones</label>
            </div> -->
        <input type="submit" value="Enviar" class="boton-fireBrick">

    </form>


</main>