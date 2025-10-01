<?php
$matriz = [
    [2, 4, 6, 9, 7],
    [8, 10, 12, 10, 12],
    [14, 16, 88, 15, 13]
];

$mayor = $matriz[0][0];
$fila = 0;
$col = 0;

for ($i = 0; $i < count($matriz); $i++) {
    for ($j = 0; $j < count($matriz[0]); $j++) {
        if ($matriz[$i][$j] > $mayor) {
            $mayor = $matriz[$i][$j];
            $fila = $i;
            $col = $j;
        }
    }
}

echo "Elemento Mayor = $mayor → fila " . ($fila+1) . " columna " . ($col+1);
?>
