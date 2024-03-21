<?php
function conectarDB() : mysqli {
    $db = new mysqli(
        $_ENV["DB_HOST"],
        $_ENV["DB_USER"],
        $_ENV["DB_PASS"],
        $_ENV["DB_NAME"]
    );
    
    if (!$db) {
        echo "Error. No se pudo conectar";
        echo "errno de depuración: " .mysqli_connect_errno();
        echo "error de depuración: " . mysqli_connect_error();
        exit;
    }
    return $db;
}
