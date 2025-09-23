<HTML>
<HEAD><TITLE> EJ3 - Direccion Red – Broadcast y Rango </TITLE></HEAD>
<BODY>
<?php
$ip_cidr = "192.168.16.100/16";

// Separar IP y máscara
list($ip, $maskLength) = explode("/", $ip_cidr);

// Convertir a entero
$ip_long = ip2long($ip);

// Crear la máscara en entero (ej: /16 → 11111111.11111111.00000000.00000000)
$mask = -1 << (32 - $maskLength);

// Dirección de red
$red = $ip_long & $mask;

// Dirección de broadcast
$broadcast = $red | ~$mask;

// Rango válido (excluyendo red y broadcast)
$primera_ip = $red + 1;
$ultima_ip = $broadcast - 1;

// Mostrar resultados
echo "IP $ip_cidr<br>";
echo "Mascara $maskLength<br>";
echo "Direccion Red: " . long2ip($red) . "<br>";
echo "Direccion Broadcast: " . long2ip($broadcast) . "<br>";
echo "Rango: " . long2ip($primera_ip) . " a " . long2ip($ultima_ip) . "<br>";
?>
</BODY>
</HTML>
