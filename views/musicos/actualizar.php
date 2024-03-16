<main class="app-content contenedor seccion formulario-admin">
    <?php
    include_once __DIR__ . "/../templates/alertas.php";
    ?>
    <div class="app-title">
        <div>
            <h1><i class="bi bi-ui-checks"></i>Actualizar Músico</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door"></i></li>
            <li class="breadcrumb-item"><a href="/musicos/listado">Músicos</a></li>
            <li class="breadcrumb-item"><a href="/musicos/actualizar">Actualizar Músico</a></li>
        </ul>
    </div>

    <div class="tile seccion">
        <div class="tile-body">
            <form action="" class="formulario" method="POST" enctype="multipart/form-data">

                <?php include __DIR__ . "/formulario.php"; ?>
                <input type="submit" class="boton-fireBrick" value="Actualizar">

            </form>
        </div>
    </div>
</main>