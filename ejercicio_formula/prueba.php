<?php

$pilotos = [16,44];

$numeros = implode("&", array_map(fn($n) => "driver_number=$n", $pilotos));
$url = "https://api.openf1.org/v1/drivers?$numeros&session_key=9158";

$curl = curl_init();

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

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
    exit;
}

$data = json_decode($response, true);

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
