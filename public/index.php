<?php
require_once __DIR__ . "/../includes/app.php";


use MVC\Router;
use Controllers\NoticiaController;
use Controllers\AdminController;
use Controllers\DiscoController;
use Controllers\UsuarioController;
use Controllers\PaginasController;

$router = new Router();

$router->get("/admin",[AdminController::class, "index"]);
$router->get("/login",[AdminController::class, "login"]);
$router->post("/login",[AdminController::class, "login"]);

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

/** DISCOS **/
$router->get("/discos/listado", [DiscoController::class, "listado"]);
$router->get("/discos/crear", [DiscoController::class, "crear"]);
$router->post("/discos/crear", [DiscoController::class, "crear"]);
$router->get("/discos/actualizar", [DiscoController::class, "actualizar"]);
$router->post("/discos/actualizar", [DiscoController::class, "actualizar"]);
$router->post("/discos/eliminar", [DiscoController::class, "eliminar"]);
$router->post("/discos/textocompleto", [DiscoController::class, "getTextoCompleto"]);

/** ZONA PÚBLICA */
$router->get("/", [PaginasController::class, "index"]);
$router->get("/historia", [PaginasController::class, "historia"]);
$router->get("/noticias", [PaginasController::class, "noticias"]);
$router->get("/noticia", [PaginasController::class, "noticia"]);
$router->get("/discografia", [PaginasController::class, "discografia"]);
$router->get("/disco", [PaginasController::class, "disco"]);
$router->get("/tienda", [PaginasController::class, "tienda"]);
$router->get("/contacto", [PaginasController::class, "contacto"]);
$router->post("/contacto", [PaginasController::class, "contacto"]);


$router->comprobarRutas();

