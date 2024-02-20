<?php

define("TEMPLATES_URL", __DIR__ . "/templates");
define("FUNCIONES_URL", __DIR__ . "funciones.php");

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
    $auth = $_SESSION["login"];
    if ($auth) {
        return true;
    }
    return false;
}
function fechas($fecha) {
    return date("d-m-Y", strtotime($fecha));
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
