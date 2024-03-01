<main class="app-content contenedor-admin seccion listado">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="bi bi-house-door"></i></li>
            <li class="breadcrumb-item">Instrumentos</li>
            <li class="breadcrumb-item active"><a href="/instrumentos/listado">Listado de instrumentos</a></li>
        </ul>
    </div>
    <a href="/instrumentos/crear" class="boton-fireBrick">Nuevo instrumento</a>
    <div class="row seccion">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered listado" id="listado_instrumentos">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Nombre</th>
                                <th>Músico</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($instrumentos as $instrumento) : ?>
                                <tr>
                                  
                                    <td><?php echo $instrumento->id; ?></td>
                                    <td><?php echo $instrumento->nombre; ?></td>
                                    <td><?php echo $instrumento->alias; ?></td>
                                    <td>
                                        <div class=" acciones">
                                            <a href="/instrumentos/actualizar?id=<?php echo $instrumento->id; ?>" class="boton-verde"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <form action="/instrumentos/eliminar" method="POST">
                                                <input type="hidden" value="<?php echo $instrumento->id; ?>" name="id">
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