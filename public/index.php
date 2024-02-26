<?php
require_once __DIR__ . "/../includes/app.php";


use MVC\Router;
use Controllers\NoticiaController;
use Controllers\AdminController;
use Controllers\UsuarioController;

$router = new Router();

$router->get("/admin",[AdminController::class, "index"]);

/** NOTICIAS **/
$router->get("/noticias/listado", [NoticiaController::class, "listado"]);
$router->get("/noticias/crear",[NoticiaController::class, "crear"]);
$router->post("/noticias/crear",[NoticiaController::class, "crear"]);
$router->get("/noticias/actualizar", [NoticiaController::class, "actualizar"]);
$router->post("/noticias/actualizar", [NoticiaController::class, "actualizar"]);
$router->post("/noticias/eliminar", [NoticiaController::class, "eliminar"]);

/** USUARIOS **/
$router->get("/usuarios/listado", [UsuarioController::class, "listado"]);
$router->get("/usuarios/crear", [UsuarioController::class, "crear"]);
$router->post("/usuarios/crear", [UsuarioController::class, "crear"]);
$router->get("/usuarios/actualizar", [UsuarioController::class, "actualizar"]);
$router->post("/usuarios/actualizar", [UsuarioController::class, "actualizar"]);
$router->post("/usuarios/eliminar", [UsuarioController::class, "eliminar"]);


$router->comprobarRutas();

