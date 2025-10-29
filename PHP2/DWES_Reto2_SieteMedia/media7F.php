<?php

function genArray($j1,$j2,$j3,$j4){

    $jugadores = array(
        array(
            'nombre' => $j1,
            'cartas' => array(),
            'puntos' => 0,
            'ganador' => false,
            'dinero' => 0
        ),
        array(
            'nombre' => $j2,
            'cartas' => array(),
            'puntos' => 0,
            'ganador' => false,
            'dinero' => 0
        ),
        array(
            'nombre' => $j3,
            'cartas' => array(),
            'puntos' => 0,
            'ganador' => false,
            'dinero' => 0
        ),
        array(
            'nombre' => $j4,
            'cartas' => array(),
            'puntos' => 0,
            'ganador' => false,
            'dinero' => 0
        )
    );
    return $jugadores;
}

function barajar(&$jug, $cartas){

    $palos = array('D', 'T', 'C', 'P');

    $num_cartas = intval($cartas); // número enviado desde el formulario

    foreach ($jug as &$jugador) { // ← el & es importante para modificar el array original
        for ($i = 0; $i < $num_cartas; $i++) {
            $numero = rand(1, 10);
            $palo = $palos[array_rand($palos)];

            $jugador['cartas'][] = array(
                'palo' => $palo,
                'numero' => $numero
            );
        }
    }
    unset($jugador);


}

function calcularPuntos(&$jug){
    foreach ($jug as &$jugador) {
        foreach ($jugador['cartas'] as $carta) {
            if ($carta['numero'] < 8) {
                $jugador['puntos']+=$carta['numero'];
            }else{
                $jugador['puntos']+=0.5;
            }
        }
    }
    unset($jugador);
}

function ganador(&$jug, $dinero){
    $puntMax=0;
    $numGanadores=0;
    $premio=0;
    foreach ($jug as &$jugador) {
        if (($jugador['puntos'] > $puntMax) && ($jugador['puntos'] <= 7.5)) {
            $puntMax=$jugador['puntos'];
        }
    }
    unset($jugador);

    foreach ($jug as &$jugador) {
        if ($jugador['puntos'] == $puntMax) {
            $jugador['ganador'] = True;
            $numGanadores++;
        }
    }
    unset($jugador);

    if ($puntMax < 7.5) {
        $premio= (intval($dinero)*0.50)/$numGanadores;
    }else{
        $premio= (intval($dinero)*0.80)/$numGanadores;
    }

    foreach ($jug as &$jugador) {
        if ($jugador['ganador']) {
            $jugador['dinero'] = $premio;
        }
    }
    unset($jugador);

    $resultados= array(
        'premio' => $premio,
        'puntMax' =>$puntMax
    );

    return $resultados;

}

function getNumeroLetra($numero) {
    switch ($numero) {
        case 8: return 'J';
        case 9: return 'Q';
        case 10: return 'K';
        default: return $numero;
    }
}

function imprimir($jug, $resultados){

    $nomGanadores="";
    if ($resultados['puntMax']>0) {
        foreach ($jug as &$jugador) {
            if ($jugador['ganador']) {
                $nomGanadores.= $jugador['nombre'].", ";
            }
        }
        unset($jugador);

        echo "<p>".$nomGanadores."ha ganado la partida con ". $resultados['puntMax']."</p>";
        echo "<p>Los ganadores han obtenido ".$resultados['premio']."€ de premio";
    }else {
        echo "<p>No hubo ganadores</p>";
    }

    foreach ($jug as $jugador) {
    echo "<h3>{$jugador['nombre']}</h3>";

    foreach ($jugador['cartas'] as $carta) {
        $numero = getNumeroLetra($carta['numero']);
        $paloLetra = $carta['palo'];
        $ruta = "images/{$numero}{$paloLetra}.PNG";

        echo "<img src='$ruta' width='70' style='margin:5px'>";
    }

    echo "<hr>";
    }
}

function guardarResultado($jugadores, $resultados) {
    // Generar nombre del archivo con fecha y hora actual
    $fecha = date("dmYHis");
    $nombreArchivo = "apuestas_" . $fecha . ".txt";

    // Construir contenido del fichero
    $lineas = "";

    $numGanadores = 0;
    $totalPremios = 0;

    foreach ($jugadores as $jugador) {
        $nombreCompleto = trim($jugador['nombre']);
        $partes = explode(' ', $nombreCompleto);

        // obtener iniciales: primera letra del nombre + primera letra del apellido
        $iniciales = '';
        if (count($partes) >= 2) {
            $iniciales = strtoupper(substr($partes[0], 0, 1) . substr($partes[1], 0, 1));
        } else {
            // por si solo se pone un nombre
            $iniciales = strtoupper(substr($partes[0], 0, 2));
        }

        $puntos = $jugador['puntos'];
        $importe = $jugador['dinero'];

        if ($importe > 0) {
            $numGanadores++;
            $totalPremios += $importe;
        }

        // Añadimos la línea
        $lineas .= "{$iniciales}#{$puntos}#{$importe}\n";
    }

    // Línea final
    $lineas .= "TOTAL PREMIOS#{$numGanadores}#{$totalPremios}\n";

    // Guardar el fichero
    file_put_contents($nombreArchivo, $lineas);

    echo "<p>Archivo generado: <strong>{$nombreArchivo}</strong></p>";
}
