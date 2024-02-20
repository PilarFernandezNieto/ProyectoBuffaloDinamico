<?php
require "includes/app.php";
$db = conectarDB();
incluirTemplate("header");
?>
<main class="contenedor seccion">
    <h1>Discografía</h1>
    <div class="contenedor-discos">
        <div class="disco">
            <picture>
                <source srcset="build/img/hiddn.webp" type="image/webp" />
                <source srcset="build/img/hiddn.jpg" type="image/jpeg" />
                <img loading="lazy" class="img-fluid" src="hiddn.jpg" alt="build/img/cover patrolman" />
            </picture>
            <div class="contenido-disco">
                <h2>Hidin' from the butcher</h2>
                <p><span>Año de edición: </span>2009</p>
                <p>Este primer trabajo de la banda, editado en 2009 en formato CD, está, desgraciadamente,
                    descatalogado. Álvaro Bárcena, Jandro Espina y Wilón DeCalle desgranan 10 temas cercanos a la
                    órbita del rock sureño, pero con tintes muy particulares, donde sonidos más folkies, psicodélicos e
                    incluso pop se entremezclan dando como resultado unas canciones con mucha personalidad y con unas
                    marcadas influencias de bandas como Gov’t Mule.
                </p>

                <p>El más puro eclecticismo es la marca de la casa del trío, que presume de hacer temas sin atender a
                    etiquetas ni estilos, aunque la seña de identidad de “lo americano” se puede distinguir con nitidez en
                    todos los cortes del disco. Hidin’ from the butcher es, sin duda, un debut a la altura de las expectativas
                    que muchos habíamos depositado en esta banda, cuando las noticias sobre su nacimiento corrieron
                    como la espuma por los mentideros del rock asturiano.</p>
                <blockquote class="alinear-derecha">-JL Moreno-</blockquote>
                <a href="hidin.php" class="boton-fireBrick">Ver ficha</a>
            </div>
        </div>
        <div class="disco">
            <picture>
                <source srcset="build/img/keepin.webp" type="image/webp" />
                <source srcset="build/img/keepin.jpg" type="image/jpeg" />
                <img loading="lazy" width="200" height="300" src="keepin.jpg" alt="build/img/cover patrolman" />
            </picture>
            <div class="contenido-disco">
                <h2>Keepin'it Warm</h2>
                <p><span>Año de edición: </span>2016</p>
                <p>Keepin’ it warm, editado por Boomerang Discos, supone el esperado regreso discográfico de la
                    banda asturiana formada por Álvaro Bárcena (guitarra y voz), Alejandro Espina (bajo) y Wilón deCalle
                    (batería). Ocho canciones con olor a clásicos, en las que, siempre desde la alargada (¡y ancha!) sombra
                    de Warren Haynes y sus Gov’t Mule, pasando por las enseñanzas del viejo Neil Young, Little Feat o los
                    caballeros sureños de apellido Allman, hasta los caminos de algunos contemporáneos como Derek
                    Trucks (y Susan Tedeschi) o Blackberry Smoke, el trío continúa recorriendo las enredadas carreteras del
                    rock, recogiendo pequeños matices, arreglos e intenciones de décadas de música popular para sacar de
                    la coctelera un sonido personal, magnético e inevitablemente absorvente, la mezcla perfecta de sutileza,
                    emoción, tradición, energía y modernidad.
                </p>

                <p>Canciones como Your reasons, Wide Screen o el incontestable himno Hotel Bar, hacen de Keepin’
                    it warm un disco repleto de grandes historias en las que predominan las afueras de los corazones
                    solitarios, la rabiosa melancolía del perdedor orgulloso y la mirada certera, crítica y reflexiva sobre un
                    mundo que se derrumba y encuentra, de manera autoreferencial y reivindicativa, su única salvación en
                    el rock and roll. Todo ello decorado con la búsqueda de un sonido imperecedero, mezcla infalible de
                    potencia, autenticidad y nostálgica dulzura. De ahí esa declaración de intenciones del título, esa labor de
                    mantener caliente no sólo el corazón y la pasión de la banda sino la sangre de todos aquellos que les
                    escuchen.</p>
                <blockquote class="alinear-derecha">-Pablo Moro-</blockquote>
                <a href="keepin.php" class="boton-fireBrick">Ver ficha</a>
            </div>


        </div>
        <div class="disco">
            <picture>
                <source srcset="build/img/cover_patrolman.webp" type="image/webp" />
                <img loading="lazy" width="200" height="300" src="cover_patrolman.jpg" alt="build/img/cover patrolman" />
            </picture>
            <div class="contenido-disco">
                <h2>Patrolman</h2>
                <p><span>Año de edición: </span>2023</p>
                <p>
                    Patrolman (Boomerang Discos) es, con toda la autoridad, un disco de rock con mayúsculas. La
                    producción, a cargo del también miembro de la banda Sergio “Tutu”, no da opción a la especulación. Las
                    canciones, el arma secreta del cuarteto, suenan como una apisonadora con rodillo de seda, y esa voz,
                    quizá una de las mejores de España, se deja oír con ese timbre precioso, delicado pero no sensiblero
                    y seguro sin ser arrogante, de los que saben perfectamente qué se traen entre manos. Esa voz que
                    canaliza los esfuerzos de la banda hacia el corazón del oyente y lo hace palpitar gracias a un voltaje
                    emocional de primer orden que va in crescendo porque todo el álbum está grabado en memoria de
                    Alejandro. El título, Patrolman (“Patrullero”), era lo primero que salía de la boca de Alejandro cuando te
                    lo encontrabas por ahí: “¡Qué pasa, patrullero!”, soltaba, siempre con una enorme sonrisa en la cara.
                </p>

                <p>
                    Hay artistas y hay artesanos, pero The Electric Buffalo son ambas cosas a la vez. Es un disco
                    donde se destilan años de oficio, pero con ese pellizco que les diferencia y les eleva a los cielos, igual
                    que al añorado Alejandro.
                </p>
                <blockquote class="alinear-derecha">-Igor Paskual-</blockquote>
                <a href="patrolman.php" class="boton-fireBrick">Ver ficha</a>
            </div>
        </div>


    </div>
</main>


<?php
incluirTemplate("footer");
?>