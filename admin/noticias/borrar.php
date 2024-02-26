<?php
require "../../includes/app.php";

use Model\Noticia;

estaAutenticado();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = filter_var($_POST["id"], FILTER_VALIDATE_INT);

    if ($id) {
        $noticia = Noticia::findById($id);
        $noticia->eliminar();
    }
}
