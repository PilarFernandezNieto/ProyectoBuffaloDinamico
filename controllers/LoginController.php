<?php

namespace Controllers;

use MVC\Router;
use Model\Usuario;

class LoginController {

    public static function login(Router $router) {
        $alertas = [];
        $title = "Login";

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $auth = new Usuario($_POST);
            $alertas = $auth->validaLogin();

            if (empty($alertas)) {
                $resultado = $auth->existeUsuario();

                if (!$resultado) {
                    $alertas = Usuario::getAlertas();

                } else {
                    $autenticado = $auth->comprobarPassword($resultado);
                    if ($autenticado) {
                        $auth->autenticar();
                    } else {
                        $alertas = Usuario::getAlertas();
                    }
                }
            }
        }
      
        $router->render("layout", "auth/login", [
            "alertas" => $alertas,
            "title" => $title

        ]);
    }

    public static function olvide(Router $router){
        $title = "Recuperar contraseña";
        $alertas = [];

        $router->render("layout", "auth/olvide", [
            "title" => $title,
            "alertas" => $alertas
        ]);
    }
    public static function recuperar(Router $router) {
        echo "Desde recuperar";
    }

    /** REGISTRO DE USUARIOS **/
    public static function registrar(Router $router) {
        $alertas=[];
        $title= "Página de registro";
        $usuario = new Usuario;

        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $usuario->sincronizar($_POST["usuario"]);
            $alertas = $usuario->validarNuevaCuenta();
           
            if(empty($alertas)){
                $resultado = $usuario->existeUsuario();
                if($resultado->num_rows){
                    $alertas = Usuario::getAlertas();
                }
            }


           
        }

        $router->render("layout", "auth/registrar", [
            "alertas" => $alertas,
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
