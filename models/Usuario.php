<?php
namespace Model;

class Usuario extends ActiveRecord{
    protected static $tabla = "usuarios";
    protected static $columnasDB = ["id", "nombre", "apellidos", "email", "password", "fecha_creacion", "idrol"];

    public $id;
    public $nombre;
    public $apellidos;
    public $email;
    public $password;
    public $fecha_creacion;
    public $idrol;

    public function __construct($args=[]){
        $this->id = $args["id"] ?? null;
        $this->nombre = $args["nombre"] ?? "";
        $this->apellidos = $args["apellidos"] ?? "";
        $this->email = $args["email"] ?? "";
        $this->password = $args["password"] ?? "";
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
        if (!$this->idrol) {
            self::$errores[] = "Debes seleccionar un rol";
        }
        return self::$errores;
    }

    public function hashPassword($password){
        return password_hash($this->$password, PASSWORD_BCRYPT);
    }

    public static function findByEmail(string $email){
        $query = "SELECT * FROM ". self::$tabla . " WHERE email='{$email}'";
        $resultado = self::consultarSQL($query);
        return array_shift($resultado);
    }

    public function validarPassword($password){
      
        return (password_verify($password, $this->password));
    }
      


}