<?php

$suma = sumaEnteros (3, 2);
$resta = resta(10, 5);

$division = division($suma, $resta);


$suma = sumaEnteros (100, 200);
$resta = resta(2000, 2);

$division = division($suma, $resta);



function sumaEnteros($n1, $n2) {

    return $n1 + $n2;

}

function resta($n1, $n2) {

    return $n1 - $n2;

}

function division($n1, $n2) {

    if ($n1 / $n2 < 1) {

        echo "No hem pogut resoldre la divisió. ($n1 / $n2)<br/>";

    } else {

        $resultado = $n1 / $n2;

        echo "Resultado de la divisió: $resultado ($n1 / $n2)<br/>";

    }

}