<main class="app-content contenedor seccion formulario-admin">
    <?php
    include_once __DIR__ . "/../templates/alertas.php";
    ?>
    <div class="app-title">
        <div>
            <h1><i class="bi bi-ui-checks"></i>Nueva Categoría</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door"></i></li>
            <li class="breadcrumb-item"><a href="/categorias/listado">Categorías</a></li>
            <li class="breadcrumb-item"><a href="/categorias/crear">Nueva Categoría</a></li>
        </ul>
    </div>

    <div class="tile seccion">
        <div class="tile-body">
            <form action="/categorias/crear" class="formulario" method="POST">
                <?php include __DIR__ . "/formulario.php"; ?>
                <input type="submit" class="boton-fireBrick" value="Crear">
            </form>
        </div>
    </div>
</main>