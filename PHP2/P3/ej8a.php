<?php

$notas = [
    "Sergio"   => 7.5,
    "Fernando"  => 9.0,
    "Kris" => 6.0,
    "Guillermo" => 8.0,
    "Manuel" => 5.5
];

// a) Alumno con mayor nota
$maxNota = max($notas);
$alumnoMax = array_search($maxNota, $notas);

echo "<h3>a) Alumno con mayor nota</h3>";
echo "Alumno: $alumnoMax - Nota: $maxNota <br>";

// b) Alumno con menor nota
$minNota = min($notas);
$alumnoMin = array_search($minNota, $notas);

echo "<h3>b) Alumno con menor nota</h3>";
echo "Alumno: $alumnoMin - Nota: $minNota <br>";

// c) Media de notas
$media = array_sum($notas) / count($notas);

echo "<h3>c) Media de las notas</h3>";
echo "La media es: " . round($media, 2) . "<br>";
?>
