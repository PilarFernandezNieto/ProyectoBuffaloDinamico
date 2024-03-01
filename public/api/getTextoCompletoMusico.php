<?php
require_once __DIR__ . "/../../includes/app.php";

use Model\Musico;

$id = filter_var($_GET["id"]);
$musico = Musico::findById($id);
echo  json_encode($musico);
