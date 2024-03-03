<?php
require_once __DIR__ . "/../../includes/app.php";

use Model\Producto;

$id = filter_var($_GET["id"]);
$producto = Producto::findById($id);
echo  json_encode($producto);
