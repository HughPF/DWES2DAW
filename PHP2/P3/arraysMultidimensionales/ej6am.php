<?php
$filas = 3;
$columnas = 3;

// Generar matriz 3x3 aleatoria entre 1 y 100
$matriz = [];
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        $matriz[$i][$j] = rand(1,100);
    }
}

// Arrays para máximos y promedios
$maximos = [];
$promedios = [];

// Calcular
for ($i = 0; $i < $filas; $i++) {
    $maximos[$i] = max($matriz[$i]);
    $promedios[$i] = array_sum($matriz[$i]) / $columnas;
}

// Mostrar matriz
echo "<b>Matriz 3x3:</b><br>";
foreach ($matriz as $fila) {
    echo implode(" ", $fila) . "<br>";
}

// Mostrar resultados
echo "<br>Máximos por fila: " . implode(", ", $maximos) . "<br>";
echo "Promedios por fila: " . implode(", ", $promedios) . "<br>";
?>
