<?php

$prim=array("Bases Datos", "Entornos Desarrollo", "Programación");
$sec=array("Sistemas Informáticos","FOL","Mecanizado");
$ter=array("Desarrollo Web ES","Desarrollo Web EC","Despliegue","Desarrollo Interfaces", "Inglés");



//a
$manual=array();

for ($i = 0; $i < count($prim); $i++) {
    $manual[] = $prim[$i];
}
for ($i = 0; $i < count($sec); $i++) {
    $manual[] = $sec[$i];
}
for ($i = 0; $i < count($ter); $i++) {
    $manual[] = $ter[$i];
}

echo"<p>Manual</p>";
echo "<table border='1' cellspacing='0' cellpadding='5'>";

echo "<tr>";
    echo "<th> Asignatura </th>";
echo "</tr>";

foreach ($manual as $key => $value) {
    echo "<tr>";
    echo "<td>".$value."</td>";
echo "</tr>";
}
echo "</table>";

//b
$merge=array_merge($prim,$sec,$ter);

echo"<p>Merge</p>";
echo "<table border='1' cellspacing='0' cellpadding='5'>";

echo "<tr>";
    echo "<th> Asignatura </th>";
echo "</tr>";

foreach ($merge as $key => $value) {
    echo "<tr>";
    echo "<td>".$value."</td>";
echo "</tr>";
}
echo "</table>";

//c
$push=array();
foreach ($prim as $key => $value) {
    array_push($push,$value);
}
foreach ($sec as $key => $value) {
    array_push($push,$value);
}
foreach ($ter as $key => $value) {
    array_push($push,$value);
}

echo"<p>Push</p>";
echo "<table border='1' cellspacing='0' cellpadding='5'>";

echo "<tr>";
    echo "<th> Asignatura </th>";
echo "</tr>";

foreach ($push as $key => $value) {
    echo "<tr>";
    echo "<td>".$value."</td>";
echo "</tr>";
}

