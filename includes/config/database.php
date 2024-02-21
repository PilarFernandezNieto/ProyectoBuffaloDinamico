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
        exit;
    }
    return $db;
}
