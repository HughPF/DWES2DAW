<?php 

include_once('media7F.php');

if($_SERVER['REQUEST_METHOD']=='POST'){

    $j1 = $_POST['nombre1'];
    $j2 = $_POST['nombre2'];
    $j3 = $_POST['nombre3'];
    $j4 = $_POST['nombre4'];
    $cartas = $_POST['numcartas'];
    $dinero = $_POST['apuesta'];

    $jugadores = genArray($j1,$j2,$j3,$j4);

    barajar($jugadores, $cartas);

    calcularPuntos($jugadores);

    $resultados = ganador($jugadores, $dinero);

    imprimir($jugadores, $resultados);

    guardarResultado($jugadores, $resultados);

    echo "<pre>";
print_r($jugadores);
echo "</pre>";
    
}