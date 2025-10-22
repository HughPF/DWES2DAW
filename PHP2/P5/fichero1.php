<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" maxlength="40" required><br><br>

        <label>Primer Apellido:</label><br>
        <input type="text" name="apellido1" maxlength="41" required><br><br>

        <label>Segundo Apellido:</label><br>
        <input type="text" name="apellido2" maxlength="42" required><br><br>

        <label>Fecha de Nacimiento (YYYY-MM-DD):</label><br>
        <input type="date" name="fecha_nac" required><br><br>

        <label>Localidad:</label><br>
        <input type="text" name="localidad" maxlength="27" required><br><br>

        <input type="submit" value="Guardar Alumno">
    </form>
    
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

     // Recogemos los datos del formulario
    $nombre = $_POST['nombre'] ?? '';
    $apellido1 = $_POST['apellido1'] ?? '';
    $apellido2 = $_POST['apellido2'] ?? '';
    $fecha_nac = $_POST['fecha_nac'] ?? '';
    $localidad = $_POST['localidad'] ?? '';

    // Función para rellenar con espacios hasta una longitud fija
    function ajustarCampo($texto, $longitud) {
        $texto = substr($texto, 0, $longitud); // Recorta si excede
        return str_pad($texto, $longitud, " "); // Rellena con espacios
    }

    // Generamos la línea con las posiciones exactas
    $linea = ajustarCampo($nombre, 40) .
             ajustarCampo($apellido1, 41) .
             ajustarCampo($apellido2, 42) .
             ajustarCampo($fecha_nac, 10) .
             ajustarCampo($localidad, 27) . "\n";

    // Guardamos en el fichero alumnos1.txt
    $fichero = fopen("alumnos1.txt", "a"); // 'a' para añadir sin borrar
    fwrite($fichero, $linea);
    fclose($fichero);

    echo "<p>Alumno guardado correctamente en alumnos1.txt</p>";
}
?>