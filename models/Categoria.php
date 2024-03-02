<?php
namespace Model;

class Categoria extends ActiveRecord {
    protected static $tabla = "categorias";
    protected static $columnasDB = ["id", "nombre"];

    public $id;
    public $nombre;

    public function __construct($args = []){
        $this->id = $args["id"] ?? null;
        $this->nombre = $args["nombre"] ?? "";
    }


    public function validar(){
        if(!$this->nombre){
            self::$errores[] = "Introduce un nombre para la categoría";
        }
        return self::$errores;

    }
}