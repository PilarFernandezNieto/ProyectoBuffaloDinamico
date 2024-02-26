<main class="app-content contenedor-admin seccion listado">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="bi bi-house-door"></i></li>
            <li class="breadcrumb-item">Noticias</li>
            <li class="breadcrumb-item active"><a href="listado_noticias.php">Listado de noticias</a></li>
        </ul>
    </div>
    <a href="crear.php" class="boton-fireBrick">Nueva noticia</a>
    <div class="row seccion">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                        <table class="table table-hover table-bordered listado" id="listado_noticias">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Título</th>
                                    <th>Introducción</th>
                                    <th>Imagen</th>
                                    <th>Creada</th>
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($noticias as $noticia) : ?>
                                    <tr>
                                        <td><?php echo $noticia->id; ?></td>
                                        <td><?php echo $noticia->titulo; ?></td>
                                        <td><?php echo $noticia->intro; ?></td>
                                        <td class="d-flex justify-content-center"><img src="/imagenes/<?php echo $noticia->imagen; ?>" style="width: 150px" alt="">
                                        </td>
                                        <td><?php echo fechas($noticia->fecha_creacion); ?></td>
                                        <td><?php echo fechas($noticia->fecha); ?></td>
                                        <td>
                                            <div class="acciones">
                                                <a href="/admin/noticias/actualizar.php?id=<?php echo $noticia->id; ?>" class="boton-verde"><i class="fa-regular fa-pen-to-square"></i></a>
                                                <form action="/admin/noticias/borrar.php" method="POST">
                                                    <input type="hidden" value="<?php echo $noticia->id; ?>" name="id">
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

