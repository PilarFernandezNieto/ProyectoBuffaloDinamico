 <div class="mb-3">
     <label for="titulo" class="form-label">Título</label>
     <input type="text" id="titulo" name="titulo" placeholder="Título de la noticia" value="<?php echo $titulo; ?>">
 </div>
 <div class="mb-3">
     <label for="intro" class="form-label">Introducción</label>
     <input type="text" id="intro" name="intro" placeholder="Intro de la noticia" value="<?php echo $intro; ?>">
 </div>


 <div class="mb-3">
     <label class="form-label" for="texto">Texto</label>
     <textarea name="texto" id="texto" name="texto" placeholder="Texto de la noticia"><?php echo $texto; ?></textarea>
 </div>

 <div class="mb-3">
     <label for="imagen" class="form-label">Imagen</label>
     <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">
 </div>
 <div class="mb-3">
     <label for="fecha">Fecha</label>
     <input type="date" id="fecha" name="fecha" value="<?php echo $fecha; ?>">
 </div>


 </div>
 <div class="tile-footer">
     <input type="submit" class="boton-fireBrick" value="Enviar">
 </div>