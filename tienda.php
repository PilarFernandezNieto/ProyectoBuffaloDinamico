<?php
require "includes/app.php";
$db = conectarDB();
incluirTemplate("header");

?>
<main class="contenedor seccion">
    <h1>Discos</h1>
    <div class="contenedor-productos seccion">
        <div class="producto">
            <picture>
                <source srcset="build/img/cover_patrolman.webp" type="image/webp" />
                <source srcset="build/img/cover_patrolman.jpg" type="image/jpeg" />
                <img loading="lazy" width="200" height="300" src="build/img/cover_patrolman.webp.jpg" alt="" />
            </picture>
            <div class="datos-producto">
                <h3>Patrolman</h3>
                <p class="detalle-producto">
                    Vinilo
                </p>
                <a href="" class="boton-fireBrick-block disabled">Disponible</a>

            </div>
        </div>
        <div class="producto">
            <picture>
                <source srcset="build/img/hiddn.webp" type="image/webp" />
                <source srcset="build/img/hiddn.jpg" type="image/jpeg" />
                <img loading="lazy" width="200" height="300" src="build/img/hiddn.jpg" alt="hiddn" />
            </picture>
            <div class="datos-producto">
                <h3>Hidin' from the butcher</h3>
                <p class="detalle-producto">
                    CD
                </p>
                <a href="" class="boton-fireBrick-block disabled">Agotado</a>

            </div>
        </div>
        <div class="producto">
            <picture>
                <source srcset="build/img/keepin.webp" type="image/webp" />
                <source srcset="build/img/keepin.jpg" type="image/jpeg" />
                <img loading="lazy" width="200" height="300" src="build/img/keepin.jpg" alt="" />
            </picture>
            <div class="datos-producto">
                <h3>Keepin'it Warm</h3>
                <p class="detalle-producto">
                    CD
                </p>

                <a href="" class="boton-fireBrick-block disabled">Agotado</a>

            </div>
        </div>
    </div>
</main>
<!-- IMAGEN CENTRAL -->
<section class="imagen-central-tienda">
    <div class="overlay-central"></div>
    <div class="contenido-central">
        <h3>Nuestra tienda está en construcción</h3>
        <p>Si te interesa alguno de nuestros productos o quieres ponerte en contacto con nosotros, escríbenos</p>
        <a href="mailto:info@theelectricbuffalo.com " class="boton-fireBrick">info@theelectricbuffalo.com</a>
    </div>


</section>
<!-- FIN IMAGEN CENTRAL -->
<section class="contenedor seccion">
    <h1>Camisetas</h1>
    <div class="contenedor-productos">
        <div class="producto">
            <picture>
                <source srcset="build/img/beisbolera_logo buffalo_negra.webp" type="image/webp" />
                <source srcset="build/img/beisbolera_logo buffalo_negra.jpg" type="image/jpeg" />
                <img loading="lazy" width="200" height="300" src="build/img/beisbolera_logo buffalo_negra.jpg" alt="" />
            </picture>
            <div class="datos-producto">
                <h3>Modelo beisbolera</h3>
                <p class="detalle-producto">
                    Tallas disponbiles
                </p>
                <div class="row">
                    <p class="col"><span>12.00€ (+gastos de envío)</span></p>

                </div>
                <a href="" class="boton-fireBrick-block disabled">Disponible</a>

            </div>
        </div>
        <div class="producto">
            <picture>
                <source srcset="build/img/logo buffalo_negra.webp" type="image/webp" />
                <source srcset="build/img/logo buffalo_negra.jpg" type="image/jpeg" />
                <img loading="lazy" width="200" height="300" src="build/img/logo buffalo_negra.jpg" alt="" />
            </picture>
            <div class="datos-producto">
                <h3>Fondo negro</h3>
                <p class="detalle-producto">
                    Tallas disponibles
                </p>
                <div class="row">
                    <p class="col"><span>12.00€ (+gastos de envío)</span></p>

                </div>
                <a href="" class="boton-fireBrick-block disabled">Disponible</a>

            </div>
        </div>
        <div class="producto">
            <picture>
                <source srcset="build/img/logo buffalo_roja.webp" type="image/webp" />
                <source srcset="build/img/logo buffalo_roja.jpg" type="image/jpeg" />
                <img loading="lazy" width="200" height="300" src="build/img/logo buffalo_roja.jpg" alt="" />
            </picture>
            <div class="datos-producto">
                <h3>Fondo rojo</h3>
                <p class="detalle-producto">
                    Tallas disponibles
                </p>
                <div class="row">
                    <p class="col"><span>12.00€ (+gastos de envío)</span></p>
                </div>
                <a class="boton-fireBrick-block disabled">Disponible</a>

            </div>
        </div>
    </div>
</section>



<?php
incluirTemplate("footer");
?>