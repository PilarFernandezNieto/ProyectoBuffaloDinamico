<?php 
namespace Controllers;
use MVC\Router;
use Model\Producto;
use Model\Categoria;
use Intervention\Image\ImageManagerStatic as Image;

class ProductoController {
    public static function listado(Router $router) {
        protegeRuta();
        $productos = Producto::findProductosAndCategorias();
        $router->render("layoutAdmin", "productos/listado", [
            "productos" => $productos
        ]);
    }

    public static function crear(Router $router) {

        protegeRuta();
        $producto = new Producto();
        $alertas = Producto::getAlertas();
        $formatos = $producto->getFormatos();
        $categorias = Categoria::findAll();
        $tallas = $producto->getTallas();

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $producto = new Producto($_POST["producto"]);
            $producto->formato = $_POST["formato"];
            $producto->talla = $_POST["talla"];

            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

            if ($_FILES["producto"]["tmp_name"]["imagen"]) {
                $imagen = Image::make($_FILES["producto"]["tmp_name"]["imagen"])->fit(600, 600);
                $producto->setImagen($nombreImagen);
            }
            $alertas = $producto->validar();

            if (empty($alertas)) {
                if (!is_dir(CARPETA_IMAGENES)) {
                    mkdir(CARPETA_IMAGENES);
                }
                $imagen->save(CARPETA_IMAGENES . $nombreImagen);

                $producto->guardar();
            }
        }

        $router->render("layoutAdmin", "productos/crear", [
            "producto" => $producto,
            "formatos" => $formatos,
            "alertas" => $alertas,
            "categorias" => $categorias,
            "tallas" => $tallas
        ]);
    }

    public static function actualizar(Router $router) {
        protegeRuta();
        $id = validarORedireccionar("/admin");

        $alertas = Producto::getAlertas();
        $producto = Producto::findById($id);
        $formatos = $producto->getFormatos();
        $categorias = Categoria::findAll();
        $tallas = $producto->getTallas();


        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $args = $_POST["producto"];
            $args["formato"] = $_POST["formato"];
            $args["talla"] = $_POST["talla"];
            $producto->sincronizar($args);
            $alertas = $producto->validar();

            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

            if ($_FILES["producto"]["tmp_name"]["imagen"]) {
                $imagen = Image::make($_FILES["producto"]["tmp_name"]["imagen"])->fit(600, 600);
                $producto->setImagen($nombreImagen);
            }


            if (empty($alertas)) {
                if ($_FILES["producto"]["tmp_name"]["imagen"]) {
                    $imagen->save(CARPETA_IMAGENES . '/' . $nombreImagen);
                }
                $producto->guardar();
            }
        }

        $router->render("layoutAdmin", "productos/actualizar", [
            "producto" => $producto,
            "alertas" => $alertas,
            "formatos" => $formatos,
            "categorias" => $categorias,
            "tallas" => $tallas
        ]);
    }

    public static function eliminar() {
        protegeRuta();
        $id = filter_var($_POST["id"], FILTER_VALIDATE_INT);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $producto = Producto::findById($id);
            $producto->eliminar();
        }
    }
}