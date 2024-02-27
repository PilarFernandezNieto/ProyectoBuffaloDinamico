<?php
namespace Model;
use Traits\FormatoEnum;


class Disco extends ActiveRecord {
    protected static $tabla = "discos";
    protected static $columnasDB = [
        "id",
        "titulo",
        "anio_edicion",
        "formato",
        "sello",
        "informacion",
        "imagen",
        "fecha_creacion"
    ];
    public $id;
    public $titulo;
    public $anio_edicion;
    public $formato;
    public $sello;
    public $informacion;
    public $imagen;
    public $fecha_creacion;

    public function __construct($args = []){
        $this->id = $args["id"] ?? null;
        $this->titulo = $args["titulo"] ?? "";
        $this->anio_edicion = $args["anio_edicion"] ?? "";
        $this->formato = $args["formato"] ?? "";
        $this->sello = $args["sello"] ?? "";
        $this->informacion = $args["informacion"] ?? "";
        $this->imagen = $args["imagen"] ?? "";
        $this->fecha_creacion = date("Y/m/d");
    }
    public function validar() {
        if (!$this->titulo) {
            self::$errores[] = "Debes introducir un título";
        }
        if (!$this->anio_edicion) {
         
            self::$errores[] = "Debes introducir el año de edición";
        }
        if (empty(trim($this->informacion))) {
            self::$errores[] = "Debes introducir un texto";
        } else {
            $texto_limpio = strip_tags($this->informacion); // Elimina todas las etiquetas HTML del texto
            if (empty(trim($texto_limpio))) {
                self::$errores[] = "Debes introducir un texto válido";
            }
        }
        if (!$this->formato) {
            self::$errores[] = "Debes introducir un formato";
        }
        if (!$this->sello) {
            self::$errores[] = "Debes introducir el sello";
        }
        if (!$this->imagen) {
            self::$errores[] = "Debes introducir una imagen";
        }

        return self::$errores;
    }

    public function getFormatos(){
        $formatos = FormatoEnum::getFormatos();
        return $formatos;
    }

    public function getInfo(){
        return $this->informacion;
    }
}


