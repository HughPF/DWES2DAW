<?php
// Definir la matriz
$matriz = [
    [2, 4, 6],
    [8, 10, 12],
    [14, 16, 18]
];

$filas = count($matriz);
$columnas = count($matriz[0]);

$sumaFilas = [];
$sumaColumnas = array_fill(0, $columnas, 0);

// Calcular sumas
for ($i = 0; $i < $filas; $i++) {
    $sumaFila = 0;
    for ($j = 0; $j < $columnas; $j++) {
        $sumaFila += $matriz[$i][$j];
        $sumaColumnas[$j] += $matriz[$i][$j];
    }
    $sumaFilas[] = $sumaFila;
}

// Mostrar resultados
echo "SUMA POR FILAS:<br>";
foreach ($sumaFilas as $s) echo $s . "<br>";

echo "<br>SUMA POR COLUMNAS:<br>";
foreach ($sumaColumnas as $s) echo $s . " ";
?>
