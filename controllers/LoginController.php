<?php

namespace Controllers;

use MVC\Router;
use Model\Usuario;

class LoginController {

    public static function login(Router $router) {
        $errores = [];

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
            "errores" => $errores

        ]);
    }

    public static function logout(Router $router) {
       session_start();
       $_SESSION = [];
       header("Location: /");
    }
}
