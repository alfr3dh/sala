<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $estado = $_POST["estado"];

    // Aquí puedes realizar cualquier acción que desees con el valor recibido, como guardarlo en un archivo o realizar una acción específica.
    
    // Por ejemplo, guardar el estado en un archivo de registro:
    file_put_contents("registro.txt", $estado . "\n", FILE_APPEND);

    // Redireccionar de vuelta a la página de "sala102.html" o a donde desees.
    header("Location: sala102.html");
    exit;
}
?>