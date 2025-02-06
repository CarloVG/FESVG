<?php
header('Content-Type: application/json');

// API pública gratuita (Ejemplo: Random User API)
$url = "https://randomuser.me/api/";


// Obtener datos con file_get_contents->Funcion de PHP que se usa para leer contenido de una URL
$response = file_get_contents($url);

// Verificar si se obtuvo respuesta
if ($response) {
    echo $response;
} else {
    echo json_encode(["error" => "No se pudo obtener la información"]);
}
?>
