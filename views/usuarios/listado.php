<main class="app-content contenedor-admin seccion listado">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="bi bi-house-door"></i></li>
            <li class="breadcrumb-item">Usuarios</li>
            <li class="breadcrumb-item active"><a href="/usuarios/listado">Listado de usuarios</a></li>
        </ul>
    </div>
    <a href="/usuarios/crear" class="boton-fireBrick">Nuevo usuario</a>
    <div class="row seccion">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered listado" id="listado_usuarios">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Email</th>
                                <th>Creada</th>
                                <th>Rol</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($usuarios as $usuario) : ?>
                                <tr>
                                    <td><?php echo $usuario->id; ?></td>
                                    <td><?php echo $usuario->nombre; ?></td>
                                    <td><?php echo $usuario->apellidos; ?></td>
                                    <td><?php echo $usuario->email; ?></td>
                                    <td><?php echo fechas($usuario->fecha_creacion); ?></td>
                                    <td><?php echo ($usuario->idrol == "1") ? "ADMIN" : "USER"; ?></td>
                                    <td>
                                        <div class=" acciones">
                                            <a href="/usuarios/actualizar?id=<?php echo $usuario->id; ?>" class="boton-verde"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <form action="/usuarios/eliminar" method="POST">
                                                <input type="hidden" value="<?php echo $usuario->id; ?>" name="id">
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