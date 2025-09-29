<?php
$prim = ["Bases Datos", "Entornos Desarrollo", "Programación"];
$sec  = ["Sistemas Informáticos","FOL","Mecanizado"];
$ter  = ["Desarrollo Web ES","Desarrollo Web EC","Despliegue","Desarrollo Interfaces","Inglés"];

$total = array_merge($prim, $sec, $ter);

//Borrar "Mecanizado"
$clave = array_search("Mecanizado", $total);
if ($clave !== false) {
    unset($total[$clave]); 
}

//Invertir el array
$totalInvertido = array_reverse($total);


echo "<p>Array resultante sin 'Mecanizado' en orden inverso</p>";
echo "<table border='1' cellspacing='0' cellpadding='5'>";
echo "<tr><th>Asignatura</th></tr>";

foreach ($totalInvertido as $value) {
    echo "<tr><td>$value</td></tr>";
}
echo "</table>";
?>
