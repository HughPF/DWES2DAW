<?php
$num_imp= array();
$alm=0;
for ($j=0; $j < 20; $j++) { 
    while ($alm % 2==0) {
    $alm+=1; 
    }
    if ($alm % 2!==0) {
        $num_imp[$j]=$alm;
        $alm+=1;
    }
}

echo "<table border='1' cellspacing='0' cellpadding='5'>";

echo "<tr>";
    echo "<th> Indice </th>";
    echo "<th> Valor </th>";
    echo "<th> Suma </th>";
echo "</tr>";
$suma=0;
$suma_par=0;
$suma_im=0;
for ($i=0; $i < 20; $i++) { 
    
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$num_imp[$i]."</td>";
    $suma=$num_imp[$i]+$suma;
    echo "<td>".$suma."</td>";
    echo "</tr>";
    if ($i % 2 == 0) {
        $suma_par=$num_imp[$i]+$suma_par;
    }else {
        $suma_im=$num_imp[$i]+$suma_im;
    }
}
echo "</table>";

$media_par=$suma_par/10;
$media_im=$suma_im/10;
echo "<table border='1' cellspacing='0' cellpadding='5'>";

echo "<tr>";
    echo "<th> Media Pares </th>";
    echo "<th> Media Impares </th>";
echo "</tr>";;
    echo "<tr>";
    echo "<td>".$media_par."</td>";
    echo "<td>".$media_im."</td>";
    echo "</tr>";
echo "</table>"

?>