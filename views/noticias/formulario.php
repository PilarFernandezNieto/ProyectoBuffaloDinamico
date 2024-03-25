<div class="mb-3">
    <label for="titulo" class="form-label">Título</label>
    <input type="text" id="titulo" name="noticia[titulo]" placeholder="Título de la noticia" value="<?php echo s($noticia->titulo); ?>">
</div>
<div class="mb-3">
    <label for="intro" class="form-label">Introducción</label>
    <input type="text" id="intro" name="noticia[intro]" placeholder="Intro de la noticia" value="<?php echo s($noticia->intro); ?>">
</div>

<div class="mb-3">
    <label class="form-label" for="texto">Texto</label>
    <textarea id="texto" name="noticia[texto]"><?php echo limpiarHTML(s($noticia->texto)); ?>
                    </textarea>
</div>

<div class="mb-3">
    <label for="imagen" class="form-label">Imagen</label>
    <input type="file" id="imagen" name="noticia[imagen]" accept="image/jpeg, image/png">
    
    <?php if ($noticia->imagen): ?>
        <img src="/imagenes/<?php echo $noticia->imagen ; ?>" class="imagen-small">
    <?php endif; ?>
</div>
<div class="mb-3">
    <label for="fecha">Fecha</label>
    <input type="date" id="fecha" name="noticia[fecha]" value="<?php echo s($noticia->fecha); ?>">
</div>
<input type="hidden" id="fecha_creacion" name="noticia[fecha_creacion]" value="<?php echo s($noticia->fecha_creacion) ; ?>">
