<main class="contenedor seccion">
    <h1><?php echo $disco->titulo; ?></h1>
    <div class="contenido-ficha-disco seccion5">
        <div class="texto-disco">
            <p>Año de edición: <span>2009</span></p>
            <p>Sello: <span>Ouroboros Records</span></p>
            <p>Formato: <span>CD</span></p>
           <p><?php echo $disco->textos; ?></p>

        </div>
        <div class="imagen-disco">
            <picture>
                <source srcset="build/img/hiddn.webp" type="image/webp" />
                <source srcset="build/img/hiddn.jpg" type="image/jpeg" />
                <img loading="lazy" width="200" height="300" src="build/img/hiddn.jpg" alt="cover_hidin" title="Portada Hiddin" />
            </picture>

        </div>
    </div>
</main>