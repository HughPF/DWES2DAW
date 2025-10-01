<?php

$arrMult=array(array());
$count=0;
for ($i=0; $i <3 ; $i++) { 
   for ($j=0; $j <3 ; $j++) {
    $count++;
    $arrMult[$i][$j]=2*($count);
   }
}

echo "<table border='1' cellspacing='0' cellpadding='5'>";

echo "<tr>";
    echo "<th>   </th>";
    echo "<th> Col 1  </th>";
    echo "<th> Col 2  </th>";
    echo "<th> Col 3  </th>";
echo "</tr>";
for ($i=0; $i <3 ; $i++) { 
    echo "<tr>";
        echo "<th> Fila".($i+1)."</th>";
   for ($j=0; $j <3 ; $j++) {
        echo "<th>".$arrMult[$i][$j]."</th>";
   }
   echo "</tr>";
}
echo "</table>";