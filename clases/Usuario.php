<?php
namespace App;

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

    public function hashPassword($password){
        return password_hash($this->$password, PASSWORD_BCRYPT);
    }


}