<?php

namespace Controllers;

use Exception;
use Model\Usuario;
use Model\Rol;
use MVC\Router;

class UsuarioController {

    public static function listado(Router $router) {
        $usuarios = Usuario::findAll();

        $router->render("layoutAdmin", "usuarios/listado", [
            "usuarios" => $usuarios
        ]);
    }

    public static function crear(Router $router) {
        protegeRuta();
        $usuario = new Usuario();
        $roles = Rol::findAll();
        $alertas = Usuario::getAlertas();
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // debuguear($_POST);

            $usuario = new Usuario($_POST["usuario"]);
            $confirmado = isset($_POST['usuario']['confirmado']) ? 1 : 0;
            $usuario->hashPassword();
            $usuario->confirmado = $confirmado;

            $alertas = $usuario->validar();

            if (empty($alertas)) {
                try {
                    $resultado = $usuario->guardar();
                    
                    if ($resultado["resultado"]) {
                        header("Location: listado?exito=true&accion=crear");
                    }
                } catch (Exception $e) {
                    header("Location: listado?exito=false&accion=crear&mensaje=" . $e->getMessage());
                }
            }
        }

        $router->render("layoutAdmin", "usuarios/crear", [
            "usuario" => $usuario,
            "alertas" => $alertas,
            "roles" => $roles

        ]);
    }
    public static function actualizar(Router $router) {
        protegeRuta();

        $id = validarORedireccionar("/admin");
        $usuario = Usuario::findById($id);
        $roles = Rol::findAll();
        $alertas = Usuario::getAlertas();
        //debuguear($usuario);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $args = $_POST["usuario"];
            $confirmado = isset($_POST['usuario']['confirmado']) ? 1 : 0;
            if($args["password"] != $usuario->password){
                $usuario->password = $args["password"];
              
                
            }
            $usuario->confirmado = $confirmado;
 
            $usuario->sincronizar($args);
            $usuario->hashPassword();
            $alertas = $usuario->validar();

            if (empty($alertas)) {
                try {
                    $resultado = $usuario->guardar();
                    if ($resultado) {
                        header("Location: listado?exito=true&accion=actualizar");
                    }
                } catch (Exception $e) {
                    header("Location: listado?exito=false&accion=actualizar&mensaje=" . $e->getMessage());
                }
            }
        }

        $router->render("layoutAdmin", "usuarios/actualizar", [
            "usuario" => $usuario,
            "alertas" => $alertas,
            "roles" => $roles

        ]);
    }

    public static function eliminar() {
        protegeRuta();
        $id = filter_var($_POST["id"], FILTER_VALIDATE_INT);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $usuario = Usuario::findById($id);
            $usuario->eliminar();
        }
    }
}
