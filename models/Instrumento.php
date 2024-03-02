<?php

namespace Model;

#[\AllowDynamicProperties]
class Instrumento extends ActiveRecord {
    protected static $tabla = "instrumentos";
    protected static $columnasDB = [
        "id", "nombre", "idmusico"
    ];
    public $id;
    public $nombre;
    public $idmusico;
    public function __construct($args = []) {
        $this->id = $args["id"] ?? null;
        $this->nombre = $args["nombre"] ?? "";
        $this->idmusico = $args["idmusico"] ?? null;
    }

    public function validar() {
        if (!$this->nombre) {
            self::$errores[] = "Debes introducir el nombre";
        }
        return self::$errores;
    }

    public static function findAllAndMusicos(){
        $query = "SELECT instrumentos.*, musicos.nombre as nombre_musico, musicos.apellidos 
                FROM instrumentos
                INNER JOIN musicos ON instrumentos.idmusico = musicos.id";
        $resultado = self::consultarSQL($query);
        return $resultado;

    }
    public static function consultarSQL($query) {
        $resultado = self::$db->query($query);


        $aDatos = [];
        while ($registro = $resultado->fetch_assoc()) {
            $aDatos[] = static::crearInstrumentoObjeto($registro);
        }
        $resultado->free();
        return $aDatos;
    }

    protected static function crearInstrumentoObjeto($registro) {

        $objeto = new static;
        foreach ($registro as $key => $value) {
                $objeto->$key = $value;
         
        }
        return $objeto;
    }
}
