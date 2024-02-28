<?php

namespace Model;

class Musico extends ActiveRecord {
    protected static $tabla = "instrumentos";
    protected static $columnasDB = [
        "id", "nombre"
    ];
    public function __construct($args = []) {
        $this->id = $args["id"] ?? null;
        $this->nombre = $args["nombre"] ?? "";
    }
}
