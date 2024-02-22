<?php

namespace App;

class Noticia {

    protected static $db;
    protected static $columnasDB = ["id", "titulo", "intro", "texto", "imagen", "fecha_creacion", "fecha"];
    protected static $errores = [];


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

    public static function setDB($database) {
        self::$db = $database;
    }

    public function guardar() {

        $atributos = $this->sanitizarAtributos();

        $query = "INSERT INTO noticias(";
        $query .= join(", ", array_keys($atributos));
        $query .= " ) VALUES ('";
        $query .= join("', '", array_values($atributos));
        $query .= "' )";
        $resultado = self::$db->query($query);
        return $resultado;

    }
    public static function findAll(){
        $query = "SELECT * FROM noticias";
        $resultado = self::consultarSQL($query);
        return $resultado;

    }

    public function atributos() {
        $atributos = [];
        foreach (self::$columnasDB as $columna) {
            if ($columna === "id") continue;
            if($columna === "texto"){
                $this->$columna = limpiarHTML($this->$columna);
            }
            $atributos[$columna] = $this->$columna;
        }
        return $atributos;
    }

    public function sanitizarAtributos() {
        $atributos = $this->atributos();
        $sanitizado = [];

        foreach ($atributos as $key => $value) {
            $sanitizado[$key] = self::$db->escape_string($value);
        }
        return $sanitizado;
    }

    public function setImagen($imagen){
        if($imagen){
            $this->imagen = $imagen;
        }
    }

    public static function getErrores() {
        return self::$errores;
    }
    public function validar() {
        if (!$this->titulo) {
            self::$errores[] = "Debes introducir un título";
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

    public static function consultarSQL($query){
        $resultado = self::$db->query($query);

        $aDatos = [];
        while($registro = $resultado->fetch_assoc()){            
            $aDatos[] = self::crearObjeto($registro);
        }
        $resultado->free();
        return $aDatos;
    }

    protected static function crearObjeto($registro){
        $objeto = new self;
        foreach($registro as $key => $value){
            if(property_exists($objeto, $key)){
                $objeto->$key = $value;
            }
        }
        return $objeto;
    }
}
