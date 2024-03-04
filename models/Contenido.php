<?php

namespace Model;

class Contenido extends ActiveRecord{
    protected static $tabla = "contenidos";
    protected static $columnasDB = [
        "id", "imagen", "texto", "fecha_creacion"
    ];

    public $id;
    public $imagen;
    public $texto;
    public $fecha_creacion;

    public function __construct($args=[]){
        $this->id = $args["id"] ?? null;
        $this->imagen = $args["imagen"] ?? "";
        $this->texto = $args["texto"] ?? "";
        $this->fecha_creacion = date("Y-m-d");
    }

    public function validar(){
        if(!$this->imagen){
            self::$errores[] = "Debes introducir una imagen";
        }
        if (!$this->texto) {
            self::$errores[] = "Debes introducir texto";
        }
        return self::$errores;
    }
}