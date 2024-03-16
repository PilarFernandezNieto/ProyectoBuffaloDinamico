<?php

namespace Model;

class Usuario extends ActiveRecord {

    protected static $tabla = "usuarios";

    protected static $columnasDB = [
        "id", 
        "nombre", 
        "apellidos",
        "dni",
        "telefono", 
        "email", 
        "password",
        "token",
        "confirmado", 
        "fecha_creacion", 
        "idrol"
    ];

    public $id;
    public $nombre;
    public $apellidos;
    public $dni;
    public $telefono;
    public $email;
    public $password;
    public $token;
    public $confirmado;
    public $idrol;
    public $fecha_creacion;

    public function __construct($args = []) {
        $this->id = $args["id"] ?? null;
        $this->nombre = $args["nombre"] ?? "";
        $this->apellidos = $args["apellidos"] ?? "";
        $this->dni = $args["dni"] ?? "";
        $this->telefono = $args["telefono"] ?? "";
        $this->email = $args["email"] ?? "";
        $this->password = $args["password"] ?? "";
        $this->token = $args["token"] ?? "";
        $this->confirmado = $args["confirmado"] ?? 0;
        $this->idrol = $args["idrol"] ?? 2;
        $this->fecha_creacion = date("Y/m/d");
    }
    public function validar() {
        if (!$this->nombre) {
            self::$errores[] = "El nombre es obligatorio";
        }
        if (!$this->email) {
            self::$errores[] = "El email es obligatorio";
        }
        if (!$this->password) {
            self::$errores[] = "La contraseña es obligatoria";
        }

        return self::$errores;
    }


    public function existeUsuario() {
        $query = "SELECT * FROM " . self::$tabla . " WHERE email='" . $this->email . "' LIMIT 1";
        $resultado = self::$db->query($query);
        if (!$resultado->num_rows) {
            self::$errores[] = "El usuario no existe";
            return;
        }
        return $resultado;
    }

    public function comprobarPassword($resultado) {
        $usuario = $resultado->fetch_object();
        $autenticado = password_verify($this->password, $usuario->password);
        if(!$autenticado){
            self::$errores[] = "El password es incorrecto";
        }
        return $autenticado;
    }

    public function autenticar(){
        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION["usuario"] = $this->email;
        $_SESSION["login"] = true;

        header("Location: /admin");
    }

    public function validaLogin() {
        if (!$this->email) {
            self::$errores[] = "El email es obligatorio";
        }
        if (!$this->password) {
            self::$errores[] = "El password es obligatorio";
        }
        return self::$errores;
    }
}
