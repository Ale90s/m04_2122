<?php

$array1;
$array2;
$sumaArrays;

$counter = 1;
$counter2 = 11;

for ($i = 0; $i < 10; $i++) {

    $array1[$i] = $counter;
    $array2[$i] = $counter2;

    $counter++;
    $counter2++;
}

for ($i = 0; $i < 10; $i++) {
    $sumarrays[$i] = $array1[$i] + $array2[$i];
}

for ($i = 0; $i < 10; $i++) {
    echo $sumarrays[$i],"<br/>";
}