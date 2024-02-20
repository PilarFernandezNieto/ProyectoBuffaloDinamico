<?php

namespace App;

class Noticia {
    public $id;
    public $titulo;
    public $intro;
    public $texto;
    public $imagen;
    public $fecha_creacion;
    public $fecha;


    public function __construct($args=[]){
        $this->id = $args["id"] ?? null;
        $this->titulo = $args["titulo"] ?? "";
        $this->intro = $args["intro"] ?? "";
        $this->texto = $args["texto"] ?? "";
        $this->imagen = $args["imagen"] ?? "";
        $this->fecha_creacion = $args["fecha_creacion"] ?? "";
        $this->fecha = $args["fecha"] ?? "";
    }
}