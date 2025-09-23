<HTML>
<HEAD><TITLE> EJ3B – Conversor Decimal a base 16 </TITLE></HEAD>
<BODY>
<?php
$num = 27;
$original = $num;
$base = 16;
$convertido = "";

// Tabla de equivalencias para los restos en base 16
$hexChars = array("0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F");

if ($num == 0) {
    $convertido = "0";
} else {
    while ($num > 0) {
        $resto = $num % $base;
        $convertido = $hexChars[$resto] . $convertido; // añadimos por delante
        $num = intdiv($num, $base);
    }
}

echo "Numero $original en base $base = $convertido";
?>
</BODY>
</HTML>
