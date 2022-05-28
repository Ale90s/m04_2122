<?php

$arrayAsociativo = array("Dilluns" => 1, "Dimarts" => 2, "Dimecres" => 3
    , "Dijous" => 4, "Divendres" => 5, "Dissabte" => 6, "Diumenge" => 7);

$diaSetmana = "Dijous";

echo $arrayAsociativo[$diaSetmana] . "<br/>";

$diaSetmanaNum = 5;

$resultat = array_keys($arrayAsociativo, $diaSetmanaNum);

echo $resultat[0];
