<HTML>
<HEAD><TITLE> EJ2B – Conversor Decimal a base n </TITLE></HEAD>
<BODY>
<?php
$num = 48;
$base = 8;  // Cambiar aquí la base entre 2 y 9
$original = $num;
$convertido = "";

// Si el número es 0, el resultado también es "0"
if ($num == 0) {
    $convertido = "0";
} else {
    while ($num > 0) {
        $resto = $num % $base;
        $convertido = $resto . $convertido; // concatenar por delante
        $num = intdiv($num, $base);
    }
}

// Si es binario, rellenar a 8 bits para mostrar estilo "00110000"
if ($base == 2) {
    $convertido = str_pad($convertido, 8, "0", STR_PAD_LEFT);
}

echo "Numero $original en base $base = $convertido";
?>
</BODY>
</HTML>
