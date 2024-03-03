<?php

namespace Model;

class ActiveRecord {


    protected static $db;
    protected static $columnasDB = [];

    protected static $tabla = "";
    protected static $errores = [];



    public static function setDB($database) {
        self::$db = $database;
    }

    public function guardar() {
        if (isset($this->id)) {
            $this->actualizar();
        } else {
            $this->crear();
        }
    }

    public function crear() {
        $atributos = $this->sanitizarAtributos();

        $query = "INSERT INTO " . static::$tabla . "(";
        $query .= join(", ", array_keys($atributos));
        $query .= " ) VALUES ('";
        $query .= join("', '", array_values($atributos));
        $query .= "' )";


        try {
            $resultado = self::$db->query($query);
            if ($resultado) {
                header("Location: listado?exito=true&accion=crear");
            }
        } catch (\Exception $e) {
      
                header("Location: listado?exito=false&accion=crear&mensaje=" . $e->getMessage());

        }
    }

    public function actualizar() {
        $atributos = $this->sanitizarAtributos();

        $valores = [];
        foreach ($atributos as $key => $value) {
            $valores[] = "{$key}='{$value}'";
        }

        $query = "UPDATE " . static::$tabla . " SET ";
        $query .= join(", ", $valores);
        $query .= " WHERE id='" . self::$db->escape_string($this->id) . "'";
        $query .= " LIMIT 1";
        
     

        try {

            $resultado =  self::$db->query($query);
            if ($resultado) {
                header("Location: listado?exito=true&accion=actualizar");
            }
        } catch (\Exception $e) {
            header("Location: listado?exito=false&accion=actualizar");
        }
    }

    public function eliminar() {
        $query = "DELETE FROM " . static::$tabla . " WHERE id=" . self::$db->escape_string($this->id) . " LIMIT 1";

        try {
            $resultado = self::$db->query($query);
            if ($resultado) {
                $this->borrarImagen();
                header("Location: listado?exito=true&accion=eliminar");
            } else {
                header("Location: listado?exito=false&accion=eliminar?mensaje=Ese regisro ya existe");
            }
        } catch (\Exception $e) {
            header("Location: listado?exito=false&accion=eliminar&mensaje=" . $e->getMessage());
        }
    }

    public static function findAll(string $order = "", int $limit = 0) {
        $orderBy = (!empty($order) ? " ORDER BY " . $order  : "");
        $limit = $limit > 0 ? " LIMIT " . $limit : "";
        $query = "SELECT * FROM " . static::$tabla . $orderBy . $limit;
        $resultado = self::consultarSQL($query);
        return $resultado;
    }

    public static function findById($id) {
        $query = "SELECT * FROM " . static::$tabla . " WHERE id={$id}";
        $resultado = self::consultarSQL($query);
        return array_shift($resultado);
    }

    public function atributos() {
        $atributos = [];
        foreach (static::$columnasDB as $columna) {
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
    public function borrarImagen() {
        $existeArchivo = file_exists(CARPETA_IMAGENES .  $this->imagen);
      
        if ($existeArchivo) {
         
            unlink(CARPETA_IMAGENES . $this->imagen);
        }
    }

    public static function getErrores() {
        return static::$errores;
    }
    public function validar() {
        static::$errores = [];
        return static::$errores;
    }

    public static function consultarSQL($query) {
        $resultado = self::$db->query($query);

       
        $aDatos = [];
        while ($registro = $resultado->fetch_assoc()) {
            $aDatos[] = static::crearObjeto($registro);
        }
        $resultado->free();
        return $aDatos;
    }

    protected static function crearObjeto($registro) {
     
        $objeto = new static;
        foreach ($registro as $key => $value) {
            if (property_exists($objeto, $key)) {
                $objeto->$key = $value;
            }
        }
        return $objeto;
    }
    // sincroniza el objeto en memoria con los cambios realizados por el usuario
    public function sincronizar($args = []) {
        foreach ($args as $key => $value) {
            if (property_exists($this, $key) && !is_null($value)) {
                $this->$key = $value;
            }
        }
    }
}
