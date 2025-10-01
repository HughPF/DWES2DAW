<?php
$matriz = [
    [2, 4, 6, 9, 7],
    [8, 10, 12, 10, 12],
    [14, 16, 88, 15, 13]
];

$filas = count($matriz);
$columnas = count($matriz[0]);

// Mostrar por filas
echo "<b>Por Filas:</b><br>";
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        echo "($i,$j) = " . $matriz[$i][$j] . "  ";
    }
    echo "<br>";
}

// Mostrar por columnas
echo "<br><b>Por Columnas:</b><br>";
for ($j = 0; $j < $columnas; $j++) {
    for ($i = 0; $i < $filas; $i++) {
        echo "($i,$j) = " . $matriz[$i][$j] . "  ";
    }
    echo "<br>";
}
?>
