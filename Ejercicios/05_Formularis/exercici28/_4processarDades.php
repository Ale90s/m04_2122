<?php

$durada = 0;  //Comptador mesoso a pagar
$paquet = $_POST["valor"]; //Paquet seleccionat
$quotaMensual = $_POST["pagmes"]; //Quota mensual
$codiOperacio = $_POST["operacio"]; //Codi usuari

//Segons el radio seleccionat apliquem un interés o altre
switch ($paquet) {
    case 1000:
        $interes = 5;
        break;
    case 5000:
        $interes = 6.5;
        break;
    case 10000:
        $interes = 8;
        break;
    default: //Si no s'ha seleccionat paquet
        header("location:_4missatgeBanc.html");
}


while ($paquet > 0) { //mentres el valor no sigui negatiu....
    $durada++;
    $mensual = $quotaMensual - ($paquet * $interes / 100); //pagament mensual
    if ($mensual <= 0) { //Pagament mensual negatiu
        echo "<h2>Operacio $codiOperacio</h2> Necessites fer pagaments més grans!";
        exit; //Sortim del programa
    }
    $paquet = $paquet - $mensual; //valor que ens queda un cop restada mensualitat
}

