<!-- CONTENIDO DESTACADO -->
<section class="contenedor contenido-destacado">
    <div class="imagen cover">
        <img loading="lazy" src="/imagenes/<?php echo $contenido->imagen; ?>" alt="Imagen contenido" class="img-fluid">

    </div>
    <div class="contenido">
        <h2><?php echo $contenido->titulo; ?></h2>
        <div>
            <?php echo $contenido->texto; ?>
        </div>


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
                            <source src="/build/multimedia/A2-Patrolman.mp3" type="audio/mp3" />
                        </audio>
                    </div>
                </div>
            </div>
        </article>
        <article class="logos-redes contenedor">
            <a href="https://www.youtube.com/@theelectricbuffalo666" target="_blank">
                <picture>
                    <source srcset="/build/img/youtuberecorte.webp" type="image/webp" />
                    <source srcset="/build/img/youtuberecorte.png" type="image/png" />
                    <img loading="lazy" width="200" height="300" src="/build/img/youtuberecorte.png" alt="logo-youtube" class="youtube" />
                </picture>
            </a>
            <a href="https://www.instagram.com/theelectricbuffalo/" target="_blank">
                <picture>
                    <source srcset="/build/img/instagram_logo_2022..webp" type="image/webp" />
                    <source srcset="/build/img/instagram_logo_2022..png" type="image/png" />
                    <img loading="lazy" width="200" height="300" src="/build/img/Instagram_logo_2022.png" alt="logo-instagram" class="instagram" />
                </picture>
            </a>
            <a href="https://open.spotify.com/intl-es/artist/4ciUFLaycqUBlM162ifmSH?si=eugYIzlWQnqkxGXJMXzYcw" target="_blank">
                <picture>
                    <source srcset="/build/img/spotifty.webp" type="image/webp" />
                    <source srcset="/build/img/spotifty.png" type="image/png" />
                    <img loading="lazy" width="200" height="300" src="/build/img/spotifty.png" alt="logo-spotify" class="spotify" />
                </picture>
            </a>

        </article>
    </div>
</section>
<!-- FIN CONTENIDO DESTACADO -->