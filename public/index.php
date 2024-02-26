<?php
require_once __DIR__ . "/../includes/app.php";


use MVC\Router;
use Controllers\NoticiaController;
use Controllers\AdminController;

$router = new Router();

$router->get("/admin",[AdminController::class, "index"]);

$router->get("/noticias/listado", [NoticiaController::class, "listado"]);
$router->get("/noticias/crear",[NoticiaController::class, "crear"]);
$router->post("/noticias/crear",[NoticiaController::class, "crear"]);
$router->get("/noticias/actualizar", [NoticiaController::class, "actualizar"]);
$router->post("/noticias/actualizar", [NoticiaController::class, "actualizar"]);
$router->post("/noticias/eliminar", [NoticiaController::class, "eliminar"]);


$router->comprobarRutas();

