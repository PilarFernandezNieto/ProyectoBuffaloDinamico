<main class="contenedor seccion">
    <h1>Discos</h1>
    <div class="contenedor-productos seccion">
        <?php foreach ($discos as $disco) : ?>
            <div class="producto">
                <img loading="lazy" class="img-fluid" src="/imagenes/<?php echo $disco->imagen; ?>" alt="imagen_<?php echo $disco->nombre; ?>" />

                <div class="datos-producto">
                    <h3><?php echo $disco->nombre; ?></h3>
                    <div class="detalle-producto">
                        <p class="formato"><?php echo $disco->formato; ?></p>
                        <p class="precio"><?php echo $disco->precio; ?>€</p>
                    </div>
                    <a href="" class="boton-fireBrick-block disabled"><?php echo ($disco->stock==0)? "Agotado" : "Disponible"; ?></a>

                </div>
            </div>
        <?php endforeach; ?>

    </div>
</main>
<!-- IMAGEN CENTRAL -->
<section class="imagen-central-tienda">
    <div class="overlay-central"></div>
    <div class="contenido-central">
        <h3>Nuestra tienda está en construcción</h3>
        <p>Si te interesa alguno de nuestros productos o quieres ponerte en contacto con nosotros, escríbenos</p>
        <p>El envío de productos podría generar gastos de envío</p>
        <a href="mailto:info@theelectricbuffalo.com " class="boton-fireBrick">info@theelectricbuffalo.com</a>
    </div>


</section>
<!-- FIN IMAGEN CENTRAL -->
<section class="contenedor seccion">
    <h1>Camisetas</h1>
    <div class="contenedor-productos">
        <?php foreach ($camisetas as $camiseta) : ?>
            <div class="producto">
                <img loading="lazy" class="img-fluid img_camiseta" src="/imagenes/<?php echo $camiseta->imagen; ?>" alt="imagen_<?php echo $camiseta->nombre; ?>" />
                <div class="datos-producto">
                    <h3><?php echo $camiseta->nombre; ?></h3>
                    <div class="detalle-producto">
                        <p>Tallas disponibles</p>
                        <p>Color: <span><?php echo $camiseta->color; ?></span></p>
                    </div>
                    <div class="row">
                        <p class="col"><span><?php echo $camiseta->precio; ?></span></p>

                    </div>
                    <a href="" class="boton-fireBrick-block disabled">Disponible</a>

                </div>
            </div>
        <?php endforeach; ?>

    </div>
</section>