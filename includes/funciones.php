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
    session_start();
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
function limpiarHTML($html, $tagsPermitidas = '<b>, </b>, <a>, </a>, <br>') {
    // Eliminar todas las etiquetas HTML excepto las permitidas
    $htmlLimpio = strip_tags($html, $tagsPermitidas);
    return $htmlLimpio;
}

function s($html){
    $s = htmlspecialchars($html ?? "");
    return $s;
}
