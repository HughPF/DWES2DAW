<?php

$alumnos = [
    "Sergio"     => 20,
    "Fernando"    => 22,
    "Kris"   => 19,
    "Guillermo"   => 23,
    "Manuel"   => 21
];

// a) Mostrar el contenido del array utilizando bucles
echo "<h3>a) Listado de alumnos</h3>";
foreach ($alumnos as $nombre => $edad) {
    echo "Alumno: $nombre - Edad: $edad <br>";
}

// b) Sitúa el puntero en la segunda posición y muestra su valor
reset($alumnos);
next($alumnos);
$nombre = key($alumnos);
$edad   = current($alumnos);
echo "Alumno: $nombre - Edad: $edad <br>";

// c) Avanza una posición y muestra el valor
echo "<h3>c) Tercera posición (avanzando una)</h3>";
next($alumnos);
$nombre = key($alumnos);
$edad   = current($alumnos);
echo "Alumno: $nombre - Edad: $edad <br>";

// d) Coloca el puntero en la última posición y muestra el valor
echo "<h3>d) Última posición</h3>";
end($alumnos);
$nombre = key($alumnos);
$edad   = current($alumnos);
echo "Alumno: $nombre - Edad: $edad <br>";

// e) Ordena el array por orden de edad y muestra primera y última posición
echo "<h3>e) Ordenado por edad (menor a mayor)</h3>";
asort($alumnos);

reset($alumnos);
$primero = key($alumnos);
$edadPrimero = current($alumnos);

end($alumnos);
$ultimo = key($alumnos);
$edadUltimo = current($alumnos);

echo "Primero: $primero - Edad: $edadPrimero <br>";
echo "Último: $ultimo - Edad: $edadUltimo <br>";
?>
