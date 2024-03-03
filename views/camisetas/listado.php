<main class="app-content contenedor-admin seccion listado">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="bi bi-house-door"></i></li>
            <li class="breadcrumb-item">Camisetas</li>
            <li class="breadcrumb-item active"><a href="/camisetas/listado">Listado de camisetas</a></li>
        </ul>
    </div>
    <a href="/productos/crear" class="boton-fireBrick">Nueva camiseta</a>
    <div class="row seccion">

        <div class="col-md-12">
            <div class="tile">

                <table class="table table-hover table-bordered listado" id="listado_camisetas">
                    <div class="tile-body">

                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Nombre</th>
                                <th>Imagen</th>
                                <th>Color</th>
                                <th>Talla</th>
                                <th>Información</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($camisetas as $camiseta) : ?>
                                <tr>
                                    <td id="camisetaId"><?php echo $camiseta->id; ?></td>
                                    <td><?php echo $camiseta->nombre; ?></td>
                                    <td class="d-flex justify-content-center"><img src="/imagenes/<?php echo $camiseta->imagen; ?>" style="width: 100px" alt="">
                                    </td>
                                    <td><?php echo $camiseta->color; ?></td>
                                    <td><?php echo $camiseta->talla; ?></td>
                                    <td class="texto-recortado"><?php echo $camiseta->informacion; ?></td>
                                    <td>
                                        <div class="acciones">
                                            <a href="/productos/actualizar?id=<?php echo $camiseta->id; ?>" class="boton-verde"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <form action="/productos/eliminar" method="POST">
                                                <input type="hidden" value="<?php echo $camiseta->id; ?>" name="id">
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