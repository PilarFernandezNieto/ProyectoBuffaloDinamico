<?php
require_once __DIR__ . "/../../includes/app.php";


if ($_SERVER["REQUEST_METHOD"] === "POST" ) {


    
    $textoRecortado = $_POST["textoRecortado"];
    debuguear($_POST);
    // Aquí podrías realizar cualquier procesamiento adicional necesario con el texto recortado

    // Por ejemplo, simplemente devolver el texto recortado como respuesta AJAX
    echo $textoRecortado;
} else {
    // Devuelve un mensaje de error si no se recibió correctamente el texto recortado
    http_response_code(400);
    echo "Error: No se recibió el texto recortado correctamente.";
}
