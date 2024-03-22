<?php
function conectarDB() : mysqli {
    $db = new mysqli(
        "mysql-electricbuffalo.alwaysdata.net",
        "351885",
        "xEu!3d2c2_d9G8M",
        "electricbuffalo_db"
    );
    $db->set_charset("utf8");

    if (!$db) {
        echo "Error. No se pudo conectar";
        echo "errno de depuración: " .mysqli_connect_errno();
        echo "error de depuración: " . mysqli_connect_error();
        exit;
    }
    return $db;
}
