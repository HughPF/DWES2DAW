<HTML>
<HEAD><TITLE> EJ1B – Conversor decimal a binario </TITLE></HEAD>
<BODY>
<?php
$num = 168;
$original = $num;
$binario = "";

// Si el número es 0, el binario también es "0"
if ($num == 0) {
    $binario = "0";
} else {
    while ($num > 0) {
        $resto = $num % 2;            // resto de la división
        $binario = $resto . $binario; // concatenar por delante
        $num = intdiv($num, 2);       // división entera
    }
}

echo "Numero $original en binario = $binario";
?>
</BODY>
</HTML>
