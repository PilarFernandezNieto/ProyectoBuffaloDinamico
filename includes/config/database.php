<?php
function conectarDB() : mysqli {
    $db = mysqli_connect(
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
