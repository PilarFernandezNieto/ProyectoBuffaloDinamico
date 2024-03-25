<?php

namespace Model;

class Contenido extends ActiveRecord{
    protected static $tabla = "contenidos";
    protected static $columnasDB = [
        "id","titulo", "imagen", "texto", "fecha_creacion", "portada"
    ];

    public $id;
    public $titulo;
    public $imagen;
    public $texto;
    public $fecha_creacion;
    public $portada;

    public function __construct($args=[]){
        $this->id = $args["id"] ?? null;
        $this->titulo = $args["titulo"] ?? "";
        $this->imagen = $args["imagen"] ?? "";
        $this->texto = $args["texto"] ?? "";
        $this->fecha_creacion = date("Y-m-d");
        $this->portada = $args["portada"] ?? 1;
    }

    public function validar(){
        if(!$this->imagen){
            self::
            $alertas["error"][] = "Debes introducir una imagen";
        }
        if (!$this->texto) {
            self::
            $alertas["error"][] = "Debes introducir texto";
        }
        return self::$alertas;
    }
}