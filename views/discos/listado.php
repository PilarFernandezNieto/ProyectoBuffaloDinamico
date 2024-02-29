<main class="app-content contenedor-admin seccion listado">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="bi bi-house-door"></i></li>
            <li class="breadcrumb-item">Discos</li>
            <li class="breadcrumb-item active"><a href="/listado">Listado de discos</a></li>
        </ul>
    </div>
    <a href="/discos/crear" class="boton-fireBrick">Nuevo disco</a>
    <div class="row seccion">

        <div class="col-md-12">
            <div class="tile">

                <table class="table table-hover table-bordered listado" id="listado_discos">
                    <!-- modal -->
                    <!-- <div class="modal-dialog modal-dialog-centered modal" id="textoDescripcion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 id="modalTitle" class="mb-0"></h4>

                            </div>
                            <div class="modal-body" id="modalBody" >
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="" id="cierraModal" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>

                    </div> -->

                    <div class="tile-body">

                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Título</th>
                                <th>Imagen</th>
                                <th>Año Edición</th>
                                <th>Formato</th>
                                <th>Sello</th>
                                <th>Información</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($discos as $disco) : ?>
                                <tr>
                                    <td id="discoId"><?php echo $disco->id; ?></td>
                                    <td><?php echo $disco->titulo; ?></td>
                                    <td class="d-flex justify-content-center"><img src="/imagenes/<?php echo $disco->imagen; ?>" style="width: 150px" alt="">
                                    </td>
                                    <td><?php echo $disco->anio_edicion; ?></td>
                                    <td><?php echo $disco->formato; ?></td>
                                    <td><?php echo $disco->sello; ?></td>
                                    <td class="texto-recortado"><?php echo $disco->informacion; ?>

                                    </td>
                                    <td>
                                        <div class="acciones">
                                            <a href="/discos/actualizar?id=<?php echo $disco->id; ?>" class="boton-verde"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <form action="/discos/eliminar" method="POST">
                                                <input type="hidden" value="<?php echo $disco->id; ?>" name="id">
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