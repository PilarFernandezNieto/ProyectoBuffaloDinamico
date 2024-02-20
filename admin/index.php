<?php
 
require "../includes/app.php";

$auth = estaAutenticado();
if (!$auth) {
  header("Location: /");
}

incluirTemplate("sidebar_menu");
?>
<main class="app-content contenedor seccion admin">
  <div class="app-title">
    <div>
      <h1><i class="bi bi-speedometer"></i> Panel Administrador - The Electric Buffalo</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="bi bi-house-door"></i></li>
      <li class="breadcrumb-item"><a href="#">Administador</a></li>
    </ul>
  </div>
  <div class="row seccion">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">Configuración general de la Web</div>
      </div>
    </div>
  </div>
</main>
<?php
incluirTemplate("sidebar_footer");
