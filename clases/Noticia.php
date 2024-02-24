<?php

namespace App;

class Noticia extends ActiveRecord {
    protected static $tabla = "noticias";
    protected static $columnasDB = ["id", "titulo", "intro", "texto", "imagen", "fecha_creacion", "fecha"];
    
    public $id;
    public $titulo;
    public $intro;
    public $texto;
    public $imagen;
    public $fecha_creacion;
    public $fecha;
    public function __construct($args = []) {
        $this->id = $args["id"] ?? null;
        $this->titulo = $args["titulo"] ?? "";
        $this->intro = $args["intro"] ?? "";
        $this->texto = $args["texto"] ?? "";
        $this->imagen = $args["imagen"] ?? "";
        $this->fecha = $args["fecha"] ?? "";
        $this->fecha_creacion = date("Y/m/d");
    }
    public function validar() {
        if (!$this->titulo) {
            self::$errores[] = "Debes introducir un título";
        }
        if (!$this->titulo) {
            self::$errores[] = "Debes introducir una intro";
        }
        if (empty(trim($this->texto))) {
            self::$errores[] = "Debes introducir un texto";
        } else {
            $texto_limpio = strip_tags($this->texto); // Elimina todas las etiquetas HTML del texto
            if (empty(trim($texto_limpio))) {
                self::$errores[] = "Debes introducir un texto válido";
            }
        }
        if (!$this->fecha) {
            self::$errores[] = "Debes introducir una fecha";
        }
        if (!$this->imagen) {
            self::$errores[] = "Debes introducir una imagen";
        }

        return self::$errores;
    }
}
