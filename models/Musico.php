<?php
namespace Model;

class Musico extends ActiveRecord{
    protected static $tabla = "musicos";
    protected static $columnasDB = [
        "id", "nombre", "apellidos", "biografia", "origen", "imagen", "fecha_nac"
    ];

    public $id;
    public $nombre;
    public $apellidos;
    public $biografia;
    public $textos;
    public $origen;
    public $imagen;
    public $fecha_nac;

    public function __construct($args = []){
        $this->id = $args["id"] ?? null;
        $this->nombre = $args["nombre"] ?? "";
        $this->apellidos = $args["apellidos"] ?? "";
        $this->biografia = $args["biografia"] ?? "";
        $this->origen = $args["origen"] ?? "";
        $this->imagen = $args["imagen"] ?? "";
        $this->fecha_nac = $args["fecha_nac"] ?? null;
    }

    public function validar() {
        if (!$this->nombre) {
            self::$errores[] = "El nombre es obligatorio";
        }
        if (!$this->apellidos) {
            self::$errores[] = "Los apellidos son obligatorios";
        }
        if (!$this->origen) {
            self::$errores[] = "El origen es obligatorio";
        }
        if (!$this->imagen) {
            self::$errores[] = "La imagen es obligatoria";
        }
        if (!$this->biografia) {
            self::$errores[] = "Debes escribir algo en la biografia";
        }

        return self::$errores;
    }
}