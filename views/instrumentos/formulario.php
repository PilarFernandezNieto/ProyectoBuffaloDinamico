  <div class="row">
      <div class="mb-3 col">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" id="nombre" name="instrumento[nombre]" placeholder="Nombre" value="<?php echo s($instrumento->nombre); ?>">
      </div>
      <div class="row">
          <label for="musico" class="form-label">Músico</label>
          <select name="instrumento[idmusico]" id="musico" class="">
              <option value="" selected>--Seleccione músico--</option>
              <?php foreach ($musicos as $musico) : ?>

                  <option class="mb-3" <?php echo ($instrumento->idmusico === $musico->id) ? "selected" : ""; ?> value="<?php echo s($musico->id); ?>"><?php echo s($musico->nombre). " " . s($musico->apellidos); ?></option>
              <?php endforeach; ?>

          </select>
      </div>
  </div>