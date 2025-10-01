<?php
// Definir matriz con notas aleatorias (10 alumnos × 4 asignaturas)
$alumnos = 10;
$materias = 4;
$matriz = [];

for ($i = 0; $i < $alumnos; $i++) {
    for ($j = 0; $j < $materias; $j++) {
        $matriz[$i][$j] = rand(0, 10);
    }
}

// Nombres ficticios de materias
$nombresMaterias = ["Matemáticas", "Lengua", "Historia", "Inglés"];

// a) Alumno con mayor nota en una materia determinada
$materiaElegida = 0; // Matemáticas
$maxNota = -1;
$alumnoMax = -1;
for ($i = 0; $i < $alumnos; $i++) {
    if ($matriz[$i][$materiaElegida] > $maxNota) {
        $maxNota = $matriz[$i][$materiaElegida];
        $alumnoMax = $i;
    }
}
echo "a) Alumno con mayor nota en {$nombresMaterias[$materiaElegida]}: Alumno " . ($alumnoMax+1) . " con nota $maxNota<br>";

// b) Alumno con menor nota en una materia determinada
$materiaElegida = 1; // Lengua
$minNota = 11;
$alumnoMin = -1;
for ($i = 0; $i < $alumnos; $i++) {
    if ($matriz[$i][$materiaElegida] < $minNota) {
        $minNota = $matriz[$i][$materiaElegida];
        $alumnoMin = $i;
    }
}
echo "b) Alumno con menor nota en {$nombresMaterias[$materiaElegida]}: Alumno " . ($alumnoMin+1) . " con nota $minNota<br>";

// c) Para un alumno, mostrar en qué materia tiene la nota más baja
$alumnoElegido = 2; // Alumno 3
$minNota = min($matriz[$alumnoElegido]);
$materiaMin = array_search($minNota, $matriz[$alumnoElegido]);
echo "c) Alumno " . ($alumnoElegido+1) . " su nota más baja es $minNota en {$nombresMaterias[$materiaMin]}<br>";

// d) Para un alumno, mostrar en qué materia tiene la nota más alta
$maxNota = max($matriz[$alumnoElegido]);
$materiaMax = array_search($maxNota, $matriz[$alumnoElegido]);
echo "d) Alumno " . ($alumnoElegido+1) . " su nota más alta es $maxNota en {$nombresMaterias[$materiaMax]}<br>";

// e) Mostrar la media por materia
echo "e) Medias por materia:<br>";
for ($j = 0; $j < $materias; $j++) {
    $suma = 0;
    for ($i = 0; $i < $alumnos; $i++) {
        $suma += $matriz[$i][$j];
    }
    echo $nombresMaterias[$j] . ": " . ($suma/$alumnos) . "<br>";
}

// f) Mostrar la media por alumno
echo "f) Medias por alumno:<br>";
for ($i = 0; $i < $alumnos; $i++) {
    $media = array_sum($matriz[$i]) / $materias;
    echo "Alumno " . ($i+1) . ": $media<br>";
}
?>
