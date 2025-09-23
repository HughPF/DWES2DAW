<HTML>
<HEAD><TITLE> EJ6B – Factorial</TITLE></HEAD>
<BODY>
<?php
$num = 5;
$original = $num;
$resultado = 1;
$proceso = "";

// Bucle para calcular factorial
for ($i = $num; $i >= 1; $i--) {
    $resultado *= $i;
    $proceso .= $i;
    if ($i > 1) {
        $proceso .= "x";
    }
}

// Mostrar resultado
echo $original . "! = " . $proceso . " = " . $resultado;
?>
</BODY>
</HTML>
