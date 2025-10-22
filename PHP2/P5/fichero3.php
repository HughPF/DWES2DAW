<?php
$nombreFichero = "alumnos1.txt";

// Verificamos que el fichero exista
if (!file_exists($nombreFichero)) {
    die("<p style='color:red;'>El fichero alumnos1.txt no existe o aún no se ha creado.</p>");
}

// Leemos todas las líneas
$lineas = file($nombreFichero, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$total = count($lineas);

if ($total > 0) {
    echo "<h2>Listado de Alumnos</h2>";
    echo "<table border='1' cellspacing='0' cellpadding='5'>";
    echo "<tr style='background-color:#ddd;'>
            <th>Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Fecha Nacimiento</th>
            <th>Localidad</th>
          </tr>";

    foreach ($lineas as $linea) {
        $nombre=trim(substr($linea, 0, 40));
        $apellido1=trim(substr($linea, 40, 41));
        $apellido2=trim(substr($linea, 81, 42));
        $fecha_nac=trim(substr($linea, 123, 10));
        $localidad=trim(substr($linea, 133, 27));

        echo "<tr>";
        echo "<td>".$nombre."</td>";
        echo "<td>".$apellido1."</td>";
        echo "<td>".$apellido2."</td>";
        echo "<td>".$fecha_nac."</td>";
        echo "<td>".$localidad."</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<p>Total de alumnos leídos: $total</p>";
} else {
    echo "<p>No hay alumnos registrados en el fichero.</p>";
}
?>
