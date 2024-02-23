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

    public function guardar(){
        if(isset($this->id)){
            $this->actualizar();

        } else {
            $this->crear();
        }
    }

    public function crear() {

        $atributos = $this->sanitizarAtributos();

        $query = "INSERT INTO noticias(";
        $query .= join(", ", array_keys($atributos));
        $query .= " ) VALUES ('";
        $query .= join("', '", array_values($atributos));
        $query .= "' )";
        $resultado = self::$db->query($query);
        return $resultado;
    }

    public function actualizar(){
        $atributos = $this->sanitizarAtributos();
        $valores = [];
        foreach($atributos as $key => $value){
            $valores[] = "{$key}='{$value}'";
        }

        $query = "UPDATE noticias SET ";
        $query .= join(", ", $valores);
        $query .= " WHERE id='" . self::$db->escape_string($this->id) . "'";
        $query .= " LIMIT 1";
      
        try {

            $resultado =  self::$db->query($query);
            if ($resultado) {
                header("Location: listado_noticias.php?exito=true&accion=actualizar");
            }
        } catch (\Exception $e) {
            self::$errores[] =  "Error al insertar registro: " . ($e->getCode() === 1062) ? "Esa noticia ya existe" : "Ha ocurrido un error";
        }
    }

    public function eliminar(){
       $query = "DELETE FROM noticias WHERE id=". self::$db->escape_string($this->id) . " LIMIT 1";
       $resultado = self::$db->query($query);
          if($resultado){
        $this->borrarImagen();
            header("Location: listado_noticias.php?exito=true&accion=eliminar");
       }
    }

    public static function findAll() {
        $query = "SELECT * FROM noticias";
        $resultado = self::consultarSQL($query);
        return $resultado;
    }

    public static function findById($id) {
        $query = "SELECT * FROM noticias WHERE id={$id}";
        $resultado = self::consultarSQL($query);
        return array_shift($resultado);
    }

    public function atributos() {
        $atributos = [];
        foreach (self::$columnasDB as $columna) {
            if ($columna === "id") continue;
            if ($columna === "texto") {
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

    public function setImagen($imagen) {
        if (isset($this->id)) {
        $this->borrarImagen();
        }
        if ($imagen) {
            $this->imagen = $imagen;
        }
    
    }
    public function borrarImagen(){
        $existeArchivo = file_exists(CARPETA_IMAGENES . $this->imagen);
        if ($existeArchivo) {
            unlink(CARPETA_IMAGENES . $this->imagen);
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

    public static function consultarSQL($query) {
        $resultado = self::$db->query($query);

        $aDatos = [];
        while ($registro = $resultado->fetch_assoc()) {
            $aDatos[] = self::crearObjeto($registro);
        }
        $resultado->free();
        return $aDatos;
    }

    protected static function crearObjeto($registro) {
        $objeto = new self;
        foreach ($registro as $key => $value) {
            if (property_exists($objeto, $key)) {
                $objeto->$key = $value;
            }
        }
        return $objeto;
    }
    // sincroniza el objeto en memoria con los cambios realizados por el usuario
    public function sincronizar($args = []) {
       foreach($args as $key => $value){
        if(property_exists($this, $key) && !is_null($value)){
            $this->$key = $value;
        }
       }
    }
}

