<fieldset>
    <legend>Datos comunes</legend>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="producto[nombre]" placeholder="Nombre del producto" value="<?php echo s($producto->nombre); ?>">
    </div>
    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen</label>
        <input type="file" id="imagen" name="producto[imagen]" accept="image/jpeg, image/png">
        <?php if ($producto->imagen) : ?>
            <img src="/imagenes/<?php echo $producto->imagen; ?>" class="imagen-small">
        <?php endif; ?>
    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" id="precio" name="producto[precio]" placeholder="Precio" value="<?php echo s($producto->precio); ?>">
        </div>
        <div class="mb-3 col">
            <label for="categoria" class="form-label">Categoría</label>
            <select name="producto[idcategoria]" id="categoria" class="">
                <option value="" selected>--Seleccione categoría--</option>
                <?php foreach ($categorias as $categoria) : ?>

                    <option class="mb-3" <?php echo ($producto->idcategoria === $categoria->id) ? "selected" : ""; ?> value="<?php echo s($categoria->id); ?>"><?php echo s(strtoupper($categoria->nombre)); ?></option>
                <?php endforeach; ?>

            </select>
        </div>
    </div>
</fieldset>
<fieldset>
    <legend>Discos</legend>
    <div class="row">
        <div class="mb-3 col">
            <label for="anio" class="form-label">Año de edición</label>
            <input type="text" id="anio" name="producto[anio_edicion]" placeholder="Año de edición" value="<?php echo s($producto->anio_edicion); ?>">
        </div>
        <div class="mb-3 col">
            <label for="sello" class="form-label">Sello</label>
            <input type="text" id="anio" name="producto[sello]" placeholder="Sello" value="<?php echo s($producto->sello); ?>">
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="formato" class="form-label">Formato</label>
            <select name="formato" id="formato" class="">
                <option value="" selected class="mb-1"></option>--Seleccione formato--</option>
                <?php foreach ($formatos as $formato) : ?>

                    <option class="mb-3" <?php echo (strtoupper($producto->formato) === $formato) ? "selected" : ""; ?> value="<?php echo s($formato); ?>"><?php echo s($formato); ?></option>
                <?php endforeach; ?>

            </select>
        </div>
    </div>
</fieldset>
<fieldset>
    <legend>Camisetas</legend>
    <div class="row">
        <div class="mb-3 col">
            <label for="color" class="form-label">Color</label>
            <input type="text" id="color" name="producto[color]" placeholder="Color" value="<?php echo s($producto->color); ?>">
        </div>

        <div class="mb-3 col">
            <label for="talla" class="form-label">Talla</label>
            <select name="talla" id="talla" class="">
                <option value="" selected class="mb-1"></option>--Seleccione talla--</option>
                <?php foreach ($tallas as $talla) : ?>
                    <option class="mb-3" <?php echo (strtoupper($producto->talla) === $talla) ? "selected" : ""; ?> value="<?php echo s($talla); ?>"><?php echo s($talla); ?></option>
                <?php endforeach; ?>

            </select>
        </div>
    </div>
</fieldset>
<div class="mb-3">
    <label class="form-label" for="informacion">Información</label>
    <textarea id="informacion" name="producto[informacion]"><?php echo limpiarHTML($producto->informacion); ?>
                    </textarea>
</div>
<div class="mb-3">
    <label class="form-label" for="textos">Textos</label>
    <textarea id="textos" name="producto[textos]"><?php echo limpiarHTML($producto->textos); ?>
                    </textarea>
</div>

<input type="hidden" id="fecha_creacion" name="producto[fecha_creacion]" value="<?php echo s($producto->fecha_creacion); ?>">