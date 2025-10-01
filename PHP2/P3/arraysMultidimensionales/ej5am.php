<?php
$filas = 5;
$columnas = 3;

$matriz = [];

// Rellenar matriz con fila+col
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        $matriz[$i][$j] = $i + $j;
    }
}

// Mostrar matriz por columnas
for ($j = 0; $j < $columnas; $j++) {
    for ($i = 0; $i < $filas; $i++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}
?>
