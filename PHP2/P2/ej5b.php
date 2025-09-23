<HTML>
<HEAD><TITLE> EJ5B – Tabla multiplicar con TD </TITLE></HEAD>
<BODY>
<?php
$num = 8;   // número a multiplicar

echo "<h2>Tabla de multiplicar del $num</h2>";
echo "<table border='1' cellspacing='0' cellpadding='5'>";

// Generamos la tabla de multiplicar
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    echo "<td>$num x $i</td>";
    echo "<td>" . ($num * $i) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
</BODY>
</HTML>
