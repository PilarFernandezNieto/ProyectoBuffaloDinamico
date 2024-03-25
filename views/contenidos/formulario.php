<div class="mb-3">
    <label for="imagen" class="form-label">Imagen</label>
    <input type="file" id="imagen" name="contenido[imagen]" accept="image/jpeg, image/png">

    <?php if ($contenido->imagen) : ?>
        <img src="/imagenes/<?php echo $contenido->imagen; ?>" class="imagen-small">
    <?php endif; ?>
</div>
<div class="mb-3">
    <label for="titulo">Título</label>
    <input type="text" id="titulo" name="contenido[titulo]" value="<?php echo limpiarHTML($contenido->titulo); ?>">
</div>
<div class="mb-5">
    <label class="form-label" for="texto">Texto</label>
    <textarea id="texto" name="contenido[texto]"><?php echo limpiarHTML($contenido->texto); ?></textarea>
</div>
<div class="form-switch mb-3 portada">
    <label class="" for="portada">Portada</label>
    <input class="form-check-input" type="checkbox" id="portada" name="contenido[portada]" value="1" <?php echo ($contenido->portada == 1) ? "checked" : ""; ?>>

</div>
<input type="hidden" id="fecha_creacion" name="contenido[fecha_creacion]" value="<?php echo s($contenido->fecha_creacion); ?>">