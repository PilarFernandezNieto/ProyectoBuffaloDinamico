<?php
require "includes/app.php";
incluirTemplate("header");
$db = conectarDB();
?>
<section class="imagen-header">
    <div class="overlay-header"></div>
    <div class="contenedor contenido-imagen">
        <h2>The Electric Buffalo</h2>
        <p>Patrolman</p>
    </div>


</section>
<!-- CONTENIDO DESTACADO -->
<section class="contenedor contenido-destacado">
    <div class="imagen cover">
        <picture>
            <source srcset="build/img/cover_patrolman.webp" type="image/webp" />
            <source srcset="build/img/cover_patrolman.jpg" type="image/jpeg" />
            <img loading="lazy" width="200" height="300" src="build/img/cover_patrolman.jpg" alt="cover_patrolman" />
        </picture>
    </div>
    <div class="contenido">
        <h2>Patrolman</h2>
        <p>Este trabajo, el tercero de su andadura por los sinuosos senderos del rock, se eleva como una
            plegaria y acaba constituyendo un exorcismo de todos los demonios aparecidos tras la muerte, en 2016,
            de Alejandro “Espina” Blanco, miembro fundador de la banda y también bajista de Ilegales durante 20
            años.</p>
        <p>Patrolman (Boomerang Discos) es, con toda la autoridad, un disco de rock con mayúsculas. La
            producción, a cargo del también miembro de la banda Sergio “Tutu”, no da opción a la especulación. Las
            canciones, el arma secreta del cuarteto, suenan como una apisonadora con rodillo de seda, y esa voz,
            quizá una de las mejores de España, se deja oír con ese timbre precioso, delicado pero no sensiblero
            y seguro sin ser arrogante, de los que saben perfectamente qué se traen entre manos.</p>


        <article id="btn_audio">
            <div class="text-center">
                <div class="">
                    <!-- BOTÓN QUE ACTIVA EL AUDIO -->
                    <p>
                        <button class="boton-fireBrick" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" title="new_song">
                            Escúchalo
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <!-- la propiedad controlslist me produce un error en el validador de html pero es la única manera que encontré de desactivar las descargas -->
                        <audio controls class="audiostyle" controlslist="nodownload">
                            <source src="build/multimedia/A2-Patrolman.mp3" type="audio/mp3" />
                        </audio>
                    </div>
                </div>
            </div>
        </article>
        <article class="logos-redes contenedor">
            <a href="https://www.youtube.com/@theelectricbuffalo666" target="_blank">
                <picture>
                    <source srcset="build/img/youtuberecorte.webp" type="image/webp" />
                    <source srcset="build/img/youtuberecorte.png" type="image/png" />
                    <img loading="lazy" width="200" height="300" src="build/img/youtuberecorte.png" alt="logo-youtube" class="youtube" />
                </picture>
            </a>
            <a href="https://www.instagram.com/theelectricbuffalo/" target="_blank">
                <picture>
                    <source srcset="build/img/Instagram_logo_2022.webp" type="image/webp" />
                    <source srcset="build/img/Instagram_logo_2022.png" type="image/png" />
                    <img loading="lazy" width="200" height="300" src="build/img/Instagram_logo_2022.png" alt="logo-instagram" class="instagram" />
                </picture>
            </a>
            <a href="https://open.spotify.com/intl-es/artist/4ciUFLaycqUBlM162ifmSH?si=eugYIzlWQnqkxGXJMXzYcw" target="_blank">
                <picture>
                    <source srcset="build/img/spotifty.webp" type="image/webp" />
                    <source srcset="build/img/spotifty.png" type="image/png" />
                    <img loading="lazy" width="200" height="300" src="build/img/spotifty.png" alt="logo-spotify" class="spotify" />
                </picture>
            </a>

        </article>
    </div>
</section>
<!-- FIN CONTENIDO DESTACADO -->
<!-- IMAGEN CENTRAL -->
<section class="imagen-central">
    <div class="overlay-central"></div>
    <div class="contenido-central">
        <h3>Conoce nuestra discografía</h3>
        <a href="discografia.php" class="boton-fireBrick">Contáctanos</a>
    </div>


</section>
<!-- FIN IMAGEN CENTRAL -->

<!-- NOTICIAS -->
<section class="seccion contenedor">
    <h2 class="text-center">Noticias</h2>
    
    <?php
    $limite=2;
     include "includes/templates/noticias_portada.php";?>



    <div class="alinear-derecha">
        <a href="noticias.php" class="boton-fireBrick">Ver todas</a>
    </div>
</section>
<!-- FIN NOTICIAS -->

<?php
incluirTemplate("footer");
?>