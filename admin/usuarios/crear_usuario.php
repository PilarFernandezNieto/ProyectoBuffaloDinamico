<?php
require "../../includes/app.php";

$db = conectarDB();

$email = "correo@correo.com";
$password = "123456";
$idrol = 1; // admin

$passwordHash = password_hash($password, PASSWORD_BCRYPT);


$query = "INSERT INTO usuarios(email, password, idrol) VALUES('{$email}', '{$passwordHash}', {$idrol})";
//$db->query($query);