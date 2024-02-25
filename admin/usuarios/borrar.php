<?php
require "../../includes/app.php";

use App\Usuario;

estaAutenticado();
$errores = Usuario::getErrores();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = filter_var($_POST["id"], FILTER_VALIDATE_INT);


    if ($id) {
        $usuario = Usuario::findById($id);
        if ($usuario->idrol != "1") {
            $usuario->eliminar();
        } else {
            header("Location: listado_usuarios.php?exito=false&accion=eliminar&mensaje=Un usuario administrador no se puede eliminar");
        }
    }
}
