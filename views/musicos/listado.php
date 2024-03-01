<main class="app-content contenedor-admin seccion listado">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="bi bi-house-door"></i></li>
            <li class="breadcrumb-item">Músicos</li>
            <li class="breadcrumb-item active"><a href="/listado">Listado de músicos</a></li>
        </ul>
    </div>
    <a href="/musicos/crear" class="boton-fireBrick">Nuevo musico</a>
    <div class="row seccion">

        <div class="col-md-12">
            <div class="tile">

                <table class="table table-hover table-bordered listado" id="listado_musicos">
                    <div class="tile-body">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Imagen</th>
                                <th>Origen</th>
                                <th>Fecha Nac</th>
                                <th>Biografía</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($musicos as $musico) : ?>
                                <tr>
                                    <td id="musicoId"><?php echo $musico->id; ?></td>
                                    <td><?php echo $musico->nombre; ?></td>
                                    <td><?php echo $musico->apellidos; ?></td>
                                    <td class="d-flex justify-content-center"><img src="/imagenes/<?php echo $musico->imagen; ?>" style="width: 150px" alt="">
                                    </td>
                                    <td><?php echo $musico->origen; ?></td>
                                    <td><?php echo $musico->fecha_nac; ?></td>
                                    <td class="texto-recortado-musico"><?php echo $musico->biografia; ?>

                                    </td>
                                    <td>
                                        <div class="acciones">
                                            <a href="/musicos/actualizar?id=<?php echo $musico->id; ?>" class="boton-verde"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <form action="/musicos/eliminar" method="POST">
                                                <input type="hidden" value="<?php echo $musico->id; ?>" name="id">
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