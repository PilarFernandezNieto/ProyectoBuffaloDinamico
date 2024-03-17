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


    /**
     * Comprueba que el usuario no está previamente registrado a la hora de registrarse
     *
     * @return object
     */
    public function existeUsuario() {
        $query = "SELECT * FROM " . self::$tabla . " WHERE email='" . $this->email . "' LIMIT 1";
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

    public function hashPassword(){

        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    public function crearToken(){
        $this->token = uniqid();
    }


    /**
     * Comprueba si la contraseña del usuario existe y es correcta
     *
     * @param [object] $resultado
     * @return bool
     */
    public function comprobarPassword($resultado) {
       
        $usuario = $resultado->fetch_object();

        $autenticado = password_verify($this->password, $usuario->password);
        if (!$autenticado) {
            self::$alertas["error"][] = "El password es incorrecto";
        }
        return $autenticado;
    }

    public function autenticar() {
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION["usuario"] = $this->email;
        $_SESSION["login"] = true;
        $_SESSION["rol"] = $this->idrol;
        if ($_SESSION["rol"] === 1) {
            header("Location: /admin");
        } else {
            header("Location: /");
        }
    }


}
