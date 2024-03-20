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
        $this->confirmado = $args["confirmado"] ?? "0";
        $this->idrol = $args["idrol"] ?? 2;
        $this->fecha_creacion = date("Y/m/d");
    }

    /**
     * Validación para la creación de usuarios desde el administrador
     *
     * @return array
     */
    public function validar() {
        if (!$this->nombre) {
            self::$alertas["error"][] = "El nombre es obligatorio";
        }
        if (!$this->email) {
            self::$alertas["error"][] = "El email es obligatorio";
        }
        if (!$this->password) {
            self::$alertas["error"][] = "La contraseña es obligatoria";
        }


        return self::$alertas;
    }


    /**
     * Validación para el formulario de registro
     *
     * @return array
     */
    public function validarNuevaCuenta() {
        if (!$this->nombre) {
            self::$alertas["error"][] = "El nombre es obligatorio";
        }
        if (!$this->email) {
            self::$alertas["error"][] = "El email es obligatorio";
        }
        if (!$this->password) {
            self::$alertas["error"][] = "La contraseña es obligatoria";
        }
        if (strlen($this->password) < 6) {
            self::$alertas["error"][] = "El password debe tener al menos 6 caracteres";
        }
        if (!$this->dni) {
            self::$alertas["error"][] = "El DNI es obligatorio";
        }
        if (!$this->telefono) {
            self::$alertas["error"][] = "El teléfono es obligatorio";
        }

        return self::$alertas;
    }

    /**
     * Validación para el formulario de login
     *
     * @return array
     */
    public function validaLogin() {
        if (!$this->email) {
            self::$alertas["error"][] = "El email es obligatorio";
        }
        if (!$this->password) {
            self::$alertas["error"][] = "El password es obligatorio";
        }
        return self::$alertas;
    }

    public function validarEmail(){
        if (!$this->email) {
            self::$alertas["error"][] = "El email es obligatorio";
        }
        return self::$alertas;
    }

    public function validarPassword(){
        if(!$this->password){
            self::$alertas["error"][] = "La contraseña es obligatoria";
        }
        if (strlen($this->password) < 6) {
            self::$alertas["error"][] = "La contraseña debe tener al menos 6 caracteres";
        }
        return self::$alertas;
    }


    /**
     * Comprueba que el usuario no está previamente registrado a la hora de registrarse
     *
     * @return object
     */
    public function existeUsuario() {
        $query = "SELECT * FROM " . self::$tabla . " WHERE email='" . $this->email ."' OR dni='".$this->dni . "' LIMIT 1";
        $resultado = self::$db->query($query);
        if ($resultado->num_rows) {
            self::$alertas["error"][] = "El usuario ya está registrado";
        }
        return $resultado;
    }


    /**
     * Comprueba que el usuario existe a la hora de iniciar sesión
     *
     * @return object
     */
    public function confirmaUsuario() {
        $query = "SELECT * FROM " . self::$tabla . " WHERE email='" . $this->email . "' LIMIT 1";

        $resultado = self::$db->query($query);
        if (!$resultado->num_rows) {
            self::$alertas["error"][] = "El usuario no existe";
        }
        return $resultado;
    }

    public function hashPassword() {

        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
       
    }

    public function crearToken() {
        $this->token = uniqid();
    }



    public function comprobarPasswordAndVerificado($password) {
        $resultado = password_verify($password, $this->password);
        //debuguear($resultado);
        if (!$resultado || !$this->confirmado) {
            self::$alertas["error"][] = "Contraseña incorrecta o cuenta no confirmada";
        } else {
            return true;
        }
    }

    public function autenticar() {
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION["id"] = $this->id;
        $_SESSION["nombre"] = $this->nombre . " " . $this->apellidos;
        $_SESSION["email"] = $this->email;
        $_SESSION["login"] = true;

        if ($this->idrol === "1") {
            $_SESSION["rol"] = $this->idrol;
            header("Location: /admin");
        } else {
            header("Location: /");
        }
    }
}
