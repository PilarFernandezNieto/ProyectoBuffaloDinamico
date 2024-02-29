<?php

namespace Model;

class Instrumento extends ActiveRecord {
    protected static $tabla = "instrumentos";
    protected static $columnasDB = [
        "id", "nombre"
    ];
    public $id;
    public $nombre;
    public function __construct($args = []) {
        $this->id = $args["id"] ?? null;
        $this->nombre = $args["nombre"] ?? "";
    }

    public function validar() {
        if (!$this->nombre) {
            self::$errores[] = "Debes introducir el nombre";
        }
        return self::$errores;
    }
}
