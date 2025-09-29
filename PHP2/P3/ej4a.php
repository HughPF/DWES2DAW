<?php

$bin= array();
$alm=0;
for ($j=0; $j < 20; $j++) { 
    array_unshift($bin, decbin($j));
}

echo "<table border='1' cellspacing='0' cellpadding='5'>";

echo "<tr>";
    echo "<th> Indice </th>";
    echo "<th> Binario </th>";
    echo "<th> Octal </th>";
echo "</tr>";
$suma=0;
for ($i=0; $i < 20; $i++) { 
    
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$bin[$i]."</td>";
    echo "<td>".decoct(bindec($bin[$i]))."</td>";
    echo "</tr>";
}
echo "</table>";

?>