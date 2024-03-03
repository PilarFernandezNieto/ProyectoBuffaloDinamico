<?php
namespace Model;

#[\AllowDynamicProperties]
class Producto extends ActiveRecord {
    protected static $tabla = "productos";
    protected static $columnasDB = [
        "id", "nombre", "imagen", "precio", "fecha_creacion", "idcategoria", "anio_edicion", "formato", "sello", "informacion", "texto", "color", "talla", "stock"
    ];

    public $id;
    public $nombre;
    public $imagen;
    public $precio;
    public $fecha_creacion;
    public $idcategoria;
    public $anio_edicion;
    public $formato;
    public $sello;
    public $informacion;
    public $texto;
    public $color; 
    public $talla;
    public $stock;

    public function __construct($args = []){
        $this->id = $args["id"] ?? null;
        $this->nombre = $args["nombre"] ?? "";
        $this->imagen = $args["imagen"] ?? "";
        $this->precio = $args["precio"] ?? 0;
        $this->fecha_creacion = date("Y/m/d");
        $this->idcategoria = $args["idcategoria"] ?? null;
        $this->anio_edicion = $args["anio_edicion"] ?? "";
        $this->formato = $args["formato"] ?? "";
        $this->sello = $args["sello"] ?? "";
        $this->informacion = $args["informacion"] ?? "";
        $this->texto = $args["texto"] ?? "";
        $this->color = $args["color"] ?? "";
        $this->talla = $args["talla"] ?? "";
        $this->stock = $args["stock"] ?? 0;
    }

    public function validar(){
        if(!$this->nombre){
            self::$errores[] = "Debes introducir un nombre";
        }
        if (!$this->imagen) {
            self::$errores[] = "Debes introducir una imagen";
        }
        if (!$this->precio) {
            self::$errores[] = "Debes introducir un precio";
        }
        if (!$this->idcategoria) {
            self::$errores[] = "Debes introducir una categoria";
        }
        if (empty(trim($this->informacion))) {
            self::$errores[] = "Debes introducir la información";
        }
        // if(empty(trim($this->texto))){
        //     self::$errores[] = "Debes introducir el texto";
        // }
        return self::$errores;
    }

    public static function findProductosAndCategorias() {
        $query = "SELECT productos.*, categorias.nombre as categoria
        FROM productos
        INNER JOIN categorias ON productos.idcategoria = categorias.id";

        $resultado = self::consultarSQL($query);
        return $resultado;
    }
    public static function consultarSQL($query) {
        $resultado = self::$db->query($query);


        $aDatos = [];
        while ($registro = $resultado->fetch_assoc()) {
            $aDatos[] = static::crearObjetoProducto($registro);
        }
        $resultado->free();
        return $aDatos;
    }

    protected static function crearObjetoProducto($registro) {

        $objeto = new static;
        foreach ($registro as $key => $value) {
            $objeto->$key = $value;
        }
        return $objeto;
    }

    public function getFormatos() {
        return [
            'VINILO',
            'CD'
        ];
    }
    public function getTallas(){
        return ["XS", "S", "M", "L", "XL", "XXL"];
    }

    public static function getProducto(string $categoria, string $campoOrden){
        $orderBy = ($campoOrden != "") ? "$campoOrden" : "";
        $query = "SELECT productos.* 
                    FROM productos
                    JOIN categorias ON productos.idcategoria = categorias.id
                    WHERE categorias.nombre='".$categoria."' ORDER BY " . $orderBy;
        $resultado = self::consultarSQL($query);
        return $resultado;
    }
}