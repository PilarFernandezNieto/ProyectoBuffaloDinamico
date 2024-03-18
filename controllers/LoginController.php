<?php

namespace Controllers;

use MVC\Router;
use Model\Usuario;
use Clases\Email;

class LoginController {

    public static function login(Router $router) {
        $alertas = [];
        $title = "Login";

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $auth = new Usuario($_POST);
            $alertas = $auth->validaLogin();

            if (empty($alertas)) {
                $usuario = Usuario::where("email", $auth->email);
                if ($usuario) {

                    if ($usuario->comprobarPasswordAndVerificado($auth->password)) {
                        $usuario->autenticar();
                    }
                } else {
                    Usuario::setAlertas("error", "Usuario no encontrado");
                }
            }
        }

        $alertas = Usuario::getAlertas();
        $router->render("layout", "auth/login", [
            "alertas" => $alertas,
            "title" => $title

        ]);
    }

    public static function olvide(Router $router) {
        $title = "Recuperar contraseña";
        $alertas = [];

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $auth = new Usuario($_POST);
            $alertas = $auth->validarEmail();

            if (empty($alertas)) {
                $usuario = Usuario::where("email", $auth->email);
                if ($usuario && $usuario->confirmado === "1") {
                    $usuario->crearToken();
                    $usuario->guardar();
                    $email = new Email($usuario->email, $usuario->nombre . " " . $usuario->apellidos, $usuario->token);
                    $email->enviarInstrucciones();

                    Usuario::setAlertas("exito", "Revisa tu email");
                } else {
                    Usuario::setAlertas("error", "El usuario no existe o no está confirmado");
                }
            }
        }

        $alertas = Usuario::getAlertas();
        $router->render("layout", "auth/olvide", [
            "title" => $title,
            "alertas" => $alertas
        ]);
    }
    public static function recuperar(Router $router) {
        $title = "Recuperar contraseña";
        $alertas = [];
        $error = false;

        $token = s($_GET["token"]);
        $usuario = Usuario::where("token", $token);

        if (empty($usuario)) {
            Usuario::setAlertas("error", "Token no válido");
            $error = true;
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $password = new Usuario($_POST);
            $alertas = $password->validarPassword();

            if(empty($alertas)){
                $usuario->password = null;
                $usuario->password = $password->password;
                $usuario->hashPassword();
                $usuario->token = null;

                $resultado = $usuario->guardar();
                if($resultado){
                    header("Location: /login");
                }
            }
        }


        $alertas = Usuario::getAlertas();
        $router->render("layout", "auth/recuperar", [
            "title" => $title,
            "alertas" => $alertas,
            "error" => $error

        ]);
    }

    /**
     * Registro de usuarios desde zona pública
     *
     * @param Router $router
     * @return void
     */
    public static function registrar(Router $router) {
        $alertas = [];
        $title = "Página de registro";
        $usuario = new Usuario;

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $usuario->sincronizar($_POST["usuario"]);
            $alertas = $usuario->validarNuevaCuenta();

            if (empty($alertas)) {
                $resultado = $usuario->existeUsuario();

                if ($resultado->num_rows) {
                    $alertas = Usuario::getAlertas();
                } else {
                    $usuario->hashPassword();
                    $usuario->crearToken();
                    $email = new Email($usuario->email, $usuario->nombre . " " . $usuario->apellidos, $usuario->token);

                    $email->enviarConfirmacion();

                    $resultado = $usuario->guardar();
                    if ($resultado) {
                        header("Location: /mensaje");
                    }
                }
            }
        }

        $router->render("layout", "auth/registrar", [
            "alertas" => $alertas,
            "title" => $title,
            "usuario" => $usuario
        ]);
    }

    public static function confirmar(Router $router) {
        $title = "Confirmar cuenta";
        $alertas = [];
        $token = s($_GET["token"]);

        $usuario = Usuario::where("token", $token);
        if (empty($usuario)) {
            Usuario::setAlertas("error", "Token no válido");
        } else {
            $usuario->confirmado = "1";
            $usuario->token = null;
            $usuario->guardar();
            Usuario::setAlertas("exito", "Cuenta confirmada correctamente");
        }

        $alertas = Usuario::getAlertas();
        $router->render("layout", "auth/confirmar-cuenta", [
            "title" => $title,
            "alertas" => $alertas
        ]);
    }


    public static function logout() {
        session_start();
        $_SESSION = [];
        header("Location: /");
    }

    public static function mensaje(Router $router) {
        $mensaje = "Hemos enviado instrucciones a tu email para confirmar tu cuenta";
        $title = "Mensaje";
        $router->render("layout", "templates/mensaje", [
            "mensaje" => $mensaje
        ]);
    }
}
