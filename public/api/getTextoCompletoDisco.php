<?php
require_once __DIR__ . "/../../includes/app.php";

use Model\Disco;

$id = filter_var($_GET["id"]);
$disco = Disco::findById($id);
echo  json_encode($disco);
 