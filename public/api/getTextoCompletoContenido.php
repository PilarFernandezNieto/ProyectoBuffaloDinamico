<?php
require_once __DIR__ . "/../../includes/app.php";

use Model\Contenido;

$id = filter_var($_GET["id"]);
$contenido = Contenido::findById($id);
echo  json_encode($contenido);
