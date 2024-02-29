<div class="mb-3">
    <label for="titulo" class="form-label">Título</label>
    <input type="text" id="titulo" name="disco[titulo]" placeholder="Título del disco" value="<?php echo s($disco->titulo); ?>">
</div>
<div class="mb-3">
    <label for="imagen" class="form-label">Imagen</label>
    <input type="file" id="imagen" name="disco[imagen]" accept="image/jpeg, image/png">

    <?php if ($disco->imagen) : ?>
        <img src="/imagenes/<?php echo $disco->imagen; ?>" class="imagen-small">
    <?php endif; ?>
</div>
<div class="mb-3">
    <label for="anio" class="form-label">Año de edición</label>
    <input type="text" id="anio" name="disco[anio_edicion]" placeholder="Año de edición" value="<?php echo s($disco->anio_edicion); ?>">
</div>
<div class="mb-3">
    <label for="sello" class="form-label">Sello</label>
    <input type="text" id="anio" name="disco[sello]" placeholder="Sello" value="<?php echo s($disco->sello); ?>">
</div>
<div class="row mb-3">
    <label for="formato" class="form-label">Formato</label>
    <select name="formato" id="formato" class="">
        <option value="" selected class="mb-1"></option>--Seleccione formato--</option>
        <?php foreach ($formatos as $formato) : ?>

            <option class="mb-3" <?php echo (strtoupper($disco->formato) === $formato) ? "selected" : ""; ?> value="<?php echo s($formato); ?>"><?php echo s($formato); ?></option>
        <?php endforeach; ?>

    </select>
</div>


<div class="mb-3">
    <label class="form-label" for="texto">Información</label>
    <textarea id="informacion" name="disco[informacion]"><?php echo limpiarHTML($disco->informacion); ?>
                    </textarea>
</div>

<input type="hidden" id="fecha_creacion" name="disco[fecha_creacion]" value="<?php echo s($disco->fecha_creacion); ?>">