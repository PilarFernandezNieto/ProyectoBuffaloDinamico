<?php

namespace Controllers;

use MVC\Router;
use Model\Usuario;

class LoginController {

    public static function login(Router $router) {
        $errores = [];
        $title = "Login";

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $auth = new Usuario($_POST);
            $errores = $auth->validaLogin();

            if (empty($errores)) {
                $resultado = $auth->existeUsuario();

                if (!$resultado) {
                    $errores = Usuario::getErrores();
                } else {
                    $autenticado = $auth->comprobarPassword($resultado);
                    if ($autenticado) {
                        $auth->autenticar();
                    } else {
                        $errores = Usuario::getErrores();
                    }
                }
            }
        }
      
        $router->render("layout", "auth/login", [
            "errores" => $errores,
            "title" => $title

        ]);
    }

    public static function olvide(Router $router){
        $title = "Recuperar contraseña";
        $errores = [];

        $router->render("layout", "auth/olvide", [
            "title" => $title,
            "errores" => $errores
        ]);
    }
    public static function recuperar(Router $router) {
        echo "Desde recuperar";
    }

    /** REGISTRO DE USUARIOS **/
    public static function registrar(Router $router) {
        $errores=[];
        $title= "Página de registro";
        $usuario = new Usuario;

        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $usuario->sincronizar($_POST["usuario"]);
            debuguear($usuario);


           
        }

        $router->render("layout", "auth/registrar", [
            "errores" => $errores,
            "title" => $title,
            "usuario" => $usuario
        ]);
    }


    public static function logout(Router $router) {
       session_start();
       $_SESSION = [];
       header("Location: /");
    }
}
