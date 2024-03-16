<?php
function conectarDB() : mysqli {
    $db = new mysqli(
        "localhost",
        "root",
        "temporal",
        "proyecto_buffalo"
    );

    if (!$db) {
        echo "Error. No se pudo conectar";
        echo "errno de depuración: " .mysqli_connect_errno();
        echo "error de depuración: " . mysqli_connect_error();
        exit;
    }
    return $db;
}
