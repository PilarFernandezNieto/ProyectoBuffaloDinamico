<?php
require "../../includes/app.php";

$auth = estaAutenticado();
if(!$auth){
    header("Location: /");
}
$resultado = $_GET["resultado"] ?? "";

$db = conectarDB();
$query = "SELECT * FROM noticias";
$consulta = mysqli_query($db, $query);
incluirTemplate("sidebar_menu");
?>


<main class="app-content contenedor seccion listado_noticias">
    <div class="app-title">
        <div>
            <h1>Listado de Noticias</h1>
            <?php if (intval($resultado) === 1) : ?>
                <div class="alerta exito">Registro insertado correctamente</div>
            <?php elseif (intval($resultado) === 2) : ?>
                <div class="alerta exito">Registro actualizado correctamente</div>
            <?php elseif (intval($resultado) === 3) : ?>
                <div class="alerta exito">Registro eliminado correctamente</div>
            <?php endif; ?>

        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="bi bi-house-door"></i></li>
            <li class="breadcrumb-item">Noticias</li>
            <li class="breadcrumb-item active"><a href="listado_noticias.php">Listado de noticias</a></li>
        </ul>
    </div>
    <div class="row seccion">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="listado_noticias">
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
                                <?php while ($noticia = mysqli_fetch_assoc($consulta)) : ?>
                                    <tr>
                                        <td><?php echo $noticia["id"]; ?></td>
                                        <td><?php echo $noticia["titulo"]; ?></td>
                                        <td><?php echo $noticia["intro"]; ?></td>
                                        <td><img src=" ../../imagenes/<?php echo $noticia['imagen']; ?>" style="width: 150px" alt="">
                                        </td>
                                        <td><?php echo fechas($noticia["fecha_creacion"]); ?></td>
                                        <td><?php echo fechas($noticia["fecha"]); ?></td>
                                        <td>
                                            <div class="acciones">
                                                <a href="/admin/noticias/formulario_actualizar.php?id=<?php echo $noticia['id']; ?>" class="boton-verde"><i class="fa-regular fa-pen-to-square"></i></a>
                                                <form action="borrar.php" method="POST">
                                                    <input type="hidden" value="<?php echo $noticia['id']; ?>" name="id">
                                                    <button type="submit" class="boton-rojo eliminar"><i class="fa-regular fa-trash-can"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="formulario_crear.php" class="boton-fireBrick">Nueva noticia</a>
</main>


<?php
mysqli_close($db);
incluirTemplate("sidebar_footer");
