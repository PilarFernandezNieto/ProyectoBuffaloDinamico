<?php

define("TEMPLATES_URL", __DIR__ . "/templates");
define("FUNCIONES_URL", __DIR__ . "funciones.php");
define("CARPETA_IMAGENES", $_SERVER["DOCUMENT_ROOT"] . "/imagenes/");

function incluirTemplate($nombre) {
    include TEMPLATES_URL . "/{$nombre}.php";
}

function debuguear($array = [], bool $salir = true) {
    echo "<pre>";
    var_dump($array);
    echo "</pre>";
    if ($salir) {
        exit;
    }
}

function estaAutenticado() {

    if (!isset($_SESSION)) {
        session_start();
    }
    if (!$_SESSION["login"]) {
        header("Location: /");
    }
}
function fechas($fecha) {
    $oFecha = new DateTime($fecha);
    return $oFecha->format("d-m-Y");
}
function truncate(string $texto, int $cantidad): string {
    if (strlen($texto) >= $cantidad) {
        return substr($texto, 0, $cantidad) . "...";
    } else {
        return $texto;
    }
}
function limpiarHTML($html, $tagsPermitidas = '<b>, </b>, <a>, </a>, <br>, <ul>, </ul>, <li>, </li>, <p>, </p>') {
    // Eliminar todas las etiquetas HTML excepto las permitidas
    $htmlLimpio = strip_tags($html ?? "", $tagsPermitidas);
    return $htmlLimpio;
}

function s($html){
    $s = htmlspecialchars($html ?? "");
    return $s;
}

function validarORedireccionar(string $url){
    $id = filter_var($_GET["id"], FILTER_VALIDATE_INT);
    if(!$id){
        header("Location: {$url}");
    }
    return $id;
}

function protegeRuta(){
   if(!isset($_SESSION)){
    session_start();
   }
  

    if ($_SESSION["admin"] != "1") {
        header("Location: /");
    }


}