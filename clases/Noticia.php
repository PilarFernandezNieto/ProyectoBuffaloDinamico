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
        $this->imagen = $args["imagen"] ?? "imagen.jpg";
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
        try {
            $resultado = self::$db->query($query);

            if ($resultado) {
                header("Location: listado_noticias.php?exito=true&accion=crear");
            }
        } catch (\Exception $e) {
            $errores[] =  "Error al insertar registro: " . ($e->getCode() === 1062) ? "Esa noticia ya existe" : "Ha ocurrido un error";
        }
    }

    public function atributos() {
        $atributos = [];
        foreach (self::$columnasDB as $columna) {
            if ($columna === "id") continue;
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
        // if (!$this->imagen["name"]) {
        //     self::$errores[] = "Debes introducir una imagen";
        // }
        // $medida = 1000 * 1000;
        // if ($this->imagen["size"] > $medida) {
        //     self::$errores[] = "La imagen es demasiado grande";
        // }
        return self::$errores;
    }
}
