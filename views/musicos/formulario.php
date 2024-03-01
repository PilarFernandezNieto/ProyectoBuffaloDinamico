  <div class="row">
      <div class="mb-3 col-5">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" id="nombre" name="musico[nombre]" placeholder="Nombre" value="<?php echo s($musico->nombre); ?>">
      </div>
      <div class="mb-3 col-7">
          <label for="apellidos" class="form-label">Apellidos</label>
          <input type="text" id="apellidos" name="musico[apellidos]" placeholder="Apellidos" value="<?php echo s($musico->apellidos); ?>">
      </div>
  </div>
  <div class="row">

      <div class="mb-3 col-6">
          <label for="origen" class="form-label">Origen</label>
          <input type="text" id="origen" name="musico[origen]" value="<?php echo s($musico->origen); ?>">
      </div>
      <div class="mb-3 col-6">
          <label class="form-label" for="fecha_nac">Fecha de nacimiento</label>
          <input type="date" id="fecha_nac" name="musico[fecha_nac]" placeholder="fecha_nac" value="<?php echo s($musico->fecha_nac); ?>">
      </div>
  </div>



  <div class="mb-3">
      <label for="imagen" class="form-label">Imagen</label>
      <input type="file" id="imagen" name="musico[imagen]" accept="image/jpeg, image/png">

      <?php if ($musico->imagen) : ?>
          <img src="/imagenes/<?php echo $musico->imagen; ?>" class="imagen-small">
      <?php endif; ?>
  </div>
  <div class="mb-3">
      <label class="form-label" for="texto">Biografía</label>
      <textarea id="biografia" name="musico[biografia]"><?php echo limpiarHTML($musico->biografia); ?>
                    </textarea>
  </div>