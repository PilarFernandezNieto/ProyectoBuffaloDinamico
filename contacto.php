<?php
require "includes/app.php";
incluirTemplate("header");
?>
<main class="contenedor-formulario">
    <h1>Contacta con nosotros</h1>
    <p>Utiliza este formulario o escríbenos a <span>info@theelectricbuffalo.com</span></p>
    <form class="formulario">
        <div class="row">
            <div class="col-12 col-md-5">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" required />
            </div>
            <div class="col-12 col-md-7 ">
                <label for="apellidos">Apellidos</label>
                <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" required />
            </div>
        </div>
        <div class="row campo">
            <div class=" col-12 col-md-7">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required />
            </div>
            <div class="col-12 col-md-5">
                <label for="telefono">Teléfono</label>
                <input type="tel" name="telefono" id="telefono" placeholder="Teléfono" required>
            </div>
        </div>

        <div class="campo">
            <label for="direccion">Dirección</label>
            <input type="text" id="direccion" name="direccion" placeholder="Dirección" />
        </div>
        <div class="row campo">
            <div class="col-12 col-md-6">
                <label for="localidad">Localidad</label>
                <input type="text" id="localidad" placeholder="Localidad">
            </div>
            <div class="col-12 col-md-6">
                <label for="provincia">Provincia</label>
                <input type="text" id="provincia" placeholder="Provincia">
            </div>
        </div>

        <div class="campo">
            <label for="mensaje">Deja tu mensaje</label>
            <textarea name="mensaje" id="mensaje" rows="3"></textarea>
        </div>
        <!-- <div class="row campo">
                <input type="checkbox" class="col-2" value="Politica_privacidad" id="privacidad">
                <label for="privacidad" class="col-10">Acepta los términos y condiciones</label>
            </div> -->
        <input type="submit" value="Enviar" class="boton-fireBrick">

    </form>


</main>


<?php
include "./includes/templates/footer.php";
?>