<main class="app-content contenedor-admin seccion listado">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="bi bi-house-door"></i></li>
            <li class="breadcrumb-item">Contenidos Destacados</li>
            <li class="breadcrumb-item active"><a href="/contenidos/listado">Listado de contenidos destacados</a></li>
        </ul>
    </div>
    <a href="/contenidos/crear" class="boton-fireBrick">Nuevo contenido</a>
    <div class="row seccion">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered listado" id="listado_contenidos">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Título</th>
                                <th>Imagen</th>
                                <th>Texto</th>
                                <th>Creada</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($contenidos as $contenido) : ?>
                                <tr>
                                    <td><?php echo $contenido->id; ?></td>
                                    <td><?php echo $contenido->titulo; ?></td>
                                    <td class="d-flex justify-content-center"><img src="/imagenes/<?php echo $contenido->imagen; ?>" style="width: 100px" alt="">
                                    </td>
                                    <td class="texto-recortado-contenido"><?php echo $contenido->texto; ?></td>
                                    <td><?php echo fechas($contenido->fecha_creacion); ?></td>
                                    <td>
                                        <div class="acciones">
                                            <a href="/contenidos/actualizar?id=<?php echo $contenido->id; ?>" class="boton-verde"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <form action="/contenidos/eliminar" method="POST">
                                                <input type="hidden" value="<?php echo $contenido->id; ?>" name="id">
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