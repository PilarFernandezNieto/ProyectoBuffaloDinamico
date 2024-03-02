<main class="app-content contenedor-admin seccion listado">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="bi bi-house-door"></i></li>
            <li class="breadcrumb-item">Categorías</li>
            <li class="breadcrumb-item active"><a href="/categorias/listado">Listado de categorías</a></li>
        </ul>
    </div>
    <a href="/categorias/crear" class="boton-fireBrick">Nueva categoría</a>
    <div class="row seccion">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered listado" id="listado_categorias">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categorias as $categoria) : ?>
                                <tr>

                                    <td><?php echo $categoria->id; ?></td>
                                    <td><?php echo $categoria->nombre; ?></td>
                                    <td>
                                        <div class=" acciones">
                                            <a href="/categorias/actualizar?id=<?php echo $categoria->id; ?>" class="boton-verde"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <form action="/categorias/eliminar" method="POST">
                                                <input type="hidden" value="<?php echo $categoria->id; ?>" name="id">
                                                <button type="submit" class="boton-rojo eliminar"><i class="fa-regular fa-trash-can"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</main>