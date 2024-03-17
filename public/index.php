<?php
require_once __DIR__ . "/../includes/app.php";


use MVC\Router;
use Controllers\AdminController;
use Controllers\DiscoController;
use Controllers\MusicoController;
use Controllers\NoticiaController;
use Controllers\PaginasController;
use Controllers\UsuarioController;
use Controllers\CamisetaController;
use Controllers\ProductoController;
use Controllers\CategoriaController;
use Controllers\ContenidoController;
use Controllers\LoginController;

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

/** NOTICIAS **/
$router->get("/contenidos/listado", [ContenidoController::class, "listado"]);
$router->get("/contenidos/crear", [ContenidoController::class, "crear"]);
$router->post("/contenidos/crear", [ContenidoController::class, "crear"]);
$router->get("/contenidos/actualizar", [ContenidoController::class, "actualizar"]);
$router->post("/contenidos/actualizar", [ContenidoController::class, "actualizar"]);
$router->post("/contenidos/eliminar", [ContenidoController::class, "eliminar"]);

/** USUARIOS **/
$router->get("/usuarios/listado", [UsuarioController::class, "listado"]);
$router->get("/usuarios/crear", [UsuarioController::class, "crear"]);
$router->post("/usuarios/crear", [UsuarioController::class, "crear"]);
$router->get("/usuarios/actualizar", [UsuarioController::class, "actualizar"]);
$router->post("/usuarios/actualizar", [UsuarioController::class, "actualizar"]);
$router->post("/usuarios/eliminar", [UsuarioController::class, "eliminar"]);

/** DISCOS Y CAMISETAS **/
$router->get("/discos/listado", [DiscoController::class, "listado"]);
$router->get("/camisetas/listado", [CamisetaController::class, "listado"]);

/** PRODUCTOS **/
$router->get("/productos/listado", [ProductoController::class, "listado"]);
$router->get("/productos/crear", [ProductoController::class, "crear"]);
$router->post("/productos/crear", [ProductoController::class, "crear"]);
$router->get("/productos/actualizar", [ProductoController::class, "actualizar"]);
$router->post("/productos/actualizar", [ProductoController::class, "actualizar"]);
$router->post("/productos/eliminar", [ProductoController::class, "eliminar"]);

/** CATEGORIAS **/
$router->get("/categorias/listado", [CategoriaController::class, "listado"]);
$router->get("/categorias/crear", [CategoriaController::class, "crear"]);
$router->post("/categorias/crear", [CategoriaController::class, "crear"]);
$router->get("/categorias/actualizar", [CategoriaController::class, "actualizar"]);
$router->post("/categorias/actualizar", [CategoriaController::class, "actualizar"]);
$router->post("/categorias/eliminar", [CategoriaController::class, "eliminar"]);

/** MUSICOS **/
$router->get("/musicos/listado", [MusicoController::class, "listado"]);
$router->get("/musicos/crear", [MusicoController::class, "crear"]);
$router->post("/musicos/crear", [MusicoController::class, "crear"]);
$router->get("/musicos/actualizar", [MusicoController::class, "actualizar"]);
$router->post("/musicos/actualizar", [MusicoController::class, "actualizar"]);
$router->post("/musicos/eliminar", [MusicoController::class, "eliminar"]);

/** ZONA PÚBLICA */
$router->get("/", [PaginasController::class, "index"]);
$router->get("/historia", [PaginasController::class, "historia"]);
$router->get("/noticias", [PaginasController::class, "noticias"]);
$router->get("/noticia", [PaginasController::class, "noticia"]);
$router->get("/discografia", [PaginasController::class, "discografia"]);
$router->get("/ficha_disco", [PaginasController::class, "ficha_disco"]);
$router->get("/disco", [PaginasController::class, "disco"]);
$router->get("/tienda", [PaginasController::class, "tienda"]);
$router->get("/contacto", [PaginasController::class, "contacto"]);
$router->post("/contacto", [PaginasController::class, "contacto"]);
$router->get("/contenido", [PaginasController::class, "contenido"]);

/** LOGIN Y AUTENTICACION **/
$router->get("/login", [LoginController::class, "login"]);
$router->post("/login", [LoginController::class, "login"]);
$router->get("/logout", [LoginController::class, "logout"]);

/** RECUPERAR PASSWORD */
$router->get("/olvide", [LoginController::class, "olvide"]);
$router->post("/olvide", [LoginController::class, "olvide"]);
$router->get("/recuperar", [LoginController::class, "recuperar"]);
$router->post("/recuperar", [LoginController::class, "recuperar"]);

/** CREAR CUENTA */
$router->get("/registrar", [LoginController::class, "registrar"]);
$router->post("/registrar", [LoginController::class, "registrar"]);

$router->get("/confirmar-cuenta", [LoginController::class, "confirmar"]);
$router->get("/mensaje", [LoginController::class, "mensaje"]);





$router->comprobarRutas();

