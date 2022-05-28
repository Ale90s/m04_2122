<?php

$array = array(7, 8, 4, 3, 10, 1, 3, 9); //Definim un array numèric
$suma = 0;

for ($index = 0; $index < count($array); $index++) {

    echo ($index + 1) . "-->" . $array[$index] . "<br/>";

    $suma = $suma + $array[$index];
}

echo "Nota media trimestral: " . $suma / $index;
