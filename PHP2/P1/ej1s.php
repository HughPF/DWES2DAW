<HTML>
<HEAD><TITLE> EJ1 - Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>
<?php
$ip = "192.18.16.204";  

// Dividir en octetos
$octetos = explode(".", $ip);

// Convertir cada octeto a binario de 8 bits
$binarios = [];
foreach ($octetos as $octeto) {
    $binarios[] = sprintf("%08b", $octeto);
}

// Unir con puntos
$ipBinaria = implode(".", $binarios);

// Mostrar resultado
printf("IP %s en binario es %s", $ip, $ipBinaria);
?>
</BODY>
</HTML>
