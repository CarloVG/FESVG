<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo de API con PHP & HTML </title>
    
    <script>
        function obtenerDatos() {
            fetch('api.php') // Llama al script PHP con nombre api.php
                .then(response => response.json()) // Convierte la respuesta a un formato JSON
                .then(data => {
                    document.getElementById('resultado').innerHTML = JSON.stringify(data, null, 2);
                })
                .catch(error => console.error('Error:', error)); //Si la conversion no se completa arrojara un error
        }
    </script>
</head>
<body>

    <h1>Consumo de API con PHP & HTML</h1>
    <b><p>Carlo Vargas Gonzalez</p></b>
    <b1><p>Profesor: Padilla Aleman David Bryan</p></b1>
    <b2><p>Temas Selectos de Computacion 2</p></b2>
    <button onclick="obtenerDatos()">Obtener Datos de la API</button>
    <pre id="resultado"></pre>
</body>
</html>
