<?php
// Definir matriz 3x4
$M = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];

// Calcular traspuesta 4x3
$T = [];
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $T[$i][$j] = $M[$j][$i];
    }
}

// Mostrar matriz original
echo "Matriz original (3x4):<br>";
foreach ($M as $fila) {
    echo implode(" ", $fila) . "<br>";
}

// Mostrar traspuesta
echo "<br>Matriz traspuesta (4x3):<br>";
foreach ($T as $fila) {
    echo implode(" ", $fila) . "<br>";
}
?>
