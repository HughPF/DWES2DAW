<HTML>
<HEAD><TITLE> EJ2 - Conversion IP Decimal a Binario (sin printf/sprintf) </TITLE></HEAD>
<BODY>
<?php
$ip = "192.18.16.204";

// Dividir en octetos
$octetos = explode(".", $ip);

// Convertir cada octeto a binario y rellenar con ceros hasta 8 bits
$binarios = [];
foreach ($octetos as $octeto) {
    $bin = decbin($octeto);            // convierte a binario
    $bin = str_pad($bin, 8, "0", STR_PAD_LEFT); // rellena con ceros
    $binarios[] = $bin;
}

// Unir con puntos
$ipBinaria = implode(".", $binarios);

// Mostrar resultado
echo "IP " . $ip . " en binario es " . $ipBinaria;
?>
</BODY>
</HTML>
