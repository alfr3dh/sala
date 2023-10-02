<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hora = $_POST["hora"];
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];

    // Aquí puedes realizar cualquier acción que desees con la hora y la geolocalización recibidas, como guardarlas en un archivo o realizar una acción específica.
    
    // Por ejemplo, guardar la hora y la geolocalización en un archivo de registro:
    $registro = "Hora: " . $hora . "\n";
    $registro .= "Latitud: " . $latitude . "\n";
    $registro .= "Longitud: " . $longitude . "\n";
    file_put_contents("registro.txt", $registro, FILE_APPEND);

    // Redireccionar de vuelta a la página de "sala101.html" o a donde desees.
    header("Location: sala101.html");
    exit;
}
?>
