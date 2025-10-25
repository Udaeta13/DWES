<?php

$pilotos = [16,44];

// Construye la URL con los números de los pilotos
$parametros = [];

// Recorre los números de pilotos para crear los parámetros de la URL
foreach ($pilotos as $n) {
    $parametros[] = "driver_number=$n";
}

// Une los parámetros con '&'
$numeros = implode("&", $parametros);
$url = "https://api.openf1.org/v1/drivers?$numeros&session_key=9158";

// Inicializa cURL
$curl = curl_init();

// Configura las opciones de cURL
curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
));

// Ejecuta la solicitud cURL
$response = curl_exec($curl);
$err = curl_error($curl);


// Cierra la sesión cURL
curl_close($curl);

// Maneja errores de cURL
if ($err) {
    echo "cURL Error #:" . $err;
    exit;
}

// Decodifica la respuesta JSON
$data = json_decode($response, true);

// Muestra los datos en una tabla HTML
echo "<h2>Datos de pilotos seleccionados</h2>";
echo "<table border='1' cellpadding='6' cellspacing='0'>";
echo "<tr>
        <th>Número</th>
        <th>Nombre completo</th>
        <th>Equipo</th>
        <th>Nacionalidad</th>
        <th>Abreviatura</th>
    </tr>";

foreach ($data as $driver) {
    echo "<tr>
            <td>{$driver['driver_number']}</td>
            <td>{$driver['full_name']}</td>
            <td>{$driver['team_name']}</td>
            <td>{$driver['country_code']}</td>
            <td>{$driver['name_acronym']}</td>
        </tr>";
}

echo "</table>";
