<?php
namespace Model;

class Musico extends ActiveRecord{
    protected static $tabla = "musicos";
    protected static $columnasDB = [
        "id", "nombre", "apellidos", "alias", "biografia", "origen", "idinstrumento", "fecha_nac"
    ];
    public function __construct($args = []){
        $this->id = $args["id"] ?? null;
        $this->nombre = $args["nombre"] ?? "";
        $this->apellidos = $args["apellidos"] ?? "";
        $this->alias = $args["alias"] ?? "";
        $this->biografia = $args["biografia"] ?? "";
        $this->origen = $args["origen"] ?? "";
        $this->idinstrumento = $args["idinstrumento"] ?? null;
        $this->fecha_nac = $args["fecha_nac"] ?? null;
    }
}