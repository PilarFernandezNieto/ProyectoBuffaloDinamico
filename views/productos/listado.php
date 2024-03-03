<main class="app-content contenedor-admin seccion listado">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="bi bi-house-door"></i></li>
            <li class="breadcrumb-item">Productos</li>
            <li class="breadcrumb-item active"><a href="/listado">Listado de productos</a></li>
        </ul>
    </div>
    <a href="/productos/crear" class="boton-fireBrick">Nuevo producto</a>
    <div class="row seccion">

        <div class="col-md-12">
            <div class="tile">

                <table class="table table-hover table-bordered listado" id="listado_productos">
                    <div class="tile-body">

                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Nombre</th>
                                <th>Imagen</th>
                                <th>Categoria</th>
                                <th>Año Edición</th>
                                <th>Formato</th>
                                <th>Sello</th>
                                <th>Información</th>
                                <th>Color</th>
                                <th>Talla</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($productos as $producto) : ?>
                                <tr>
                                    <td id="productoId"><?php echo $producto->id; ?></td>
                                    <td><?php echo $producto->nombre; ?></td>
                                    <td class="d-flex justify-content-center"><img src="/imagenes/<?php echo $producto->imagen; ?>" style="width: 150px" alt="">
                                    </td>
                                    <td><?php echo $producto->categoria; ?></td>
                                    <td><?php echo $producto->anio_edicion; ?></td>
                                    <td><?php echo $producto->formato; ?></td>
                                    <td><?php echo $producto->sello; ?></td>
                                    <td><?php echo $producto->color; ?></td>
                                    <td><?php echo $producto->talla; ?></td>
                                    <td class="texto-recortado"><?php echo $producto->informacion; ?>

                                    </td>
                                    <td>
                                        <div class="acciones">
                                            <a href="/productos/actualizar?id=<?php echo $producto->id; ?>" class="boton-verde"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <form action="/productos/eliminar" method="POST">
                                                <input type="hidden" value="<?php echo $producto->id; ?>" name="id">
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