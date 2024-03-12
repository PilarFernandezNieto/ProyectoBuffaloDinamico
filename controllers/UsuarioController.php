<?php
namespace Controllers;
use Model\Usuario;
use Model\Rol;
use MVC\Router;

class UsuarioController{

    public static function listado(Router $router){
        $usuarios = Usuario::findAll();

        $router->render("layoutAdmin", "usuarios/listado", [
            "usuarios" => $usuarios
        ]);
    }

    public static function crear(Router $router) {
        protegeRuta();
        $usuario = new Usuario();
        $roles = Rol::findAll();
        $errores = Usuario::getErrores();
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            //debuguear($_POST);

            $usuario = new Usuario($_POST["usuario"]);

            //debuguear($usuario);
            $errores = $usuario->validar();

            if (empty($errores)) {
                $usuario->guardar();
            }
        }
    
        $router->render("layoutAdmin", "usuarios/crear", [
            "usuario" => $usuario,
            "errores" => $errores,
            "roles" => $roles
           
        ]);
    }
    public static function actualizar(Router $router) {
        protegeRuta();
        
        $id = validarORedireccionar("/admin");
        $usuario = Usuario::findById($id);
        $roles = Rol::findAll();
        $errores = Usuario::getErrores();
     
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $args = $_POST["usuario"];
            $usuario->sincronizar($args);
            $errores = $usuario->validar();

            if (empty($errores)) {
                $usuario->guardar();
            }
        }

        $router->render("layoutAdmin", "usuarios/actualizar", [
            "usuario" => $usuario,
            "errores" => $errores,
            "roles" => $roles

        ]);
    }

    public static function eliminar(Router $router) {
        protegeRuta();
        $id = filter_var($_POST["id"], FILTER_VALIDATE_INT);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $usuario = Usuario::findById($id);
            $usuario->eliminar();
        }
    }


}