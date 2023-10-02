<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hora = $_POST["hora"];
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];

    // Abre o crea el archivo de registro y escribe los datos
    $registro = "Hora: " . $hora . "\n";
    $registro .= "Latitud: " . $latitude . "\n";
    $registro .= "Longitud: " . $longitude . "\n";

    // Guarda los datos en un archivo de registro
    file_put_contents("registro.txt", $registro, FILE_APPEND);

    // Redirecciona de vuelta a la página de "sala101.html" o a donde desees.
    header("Location: sala101.html");
    exit;
}
?>
