<?php

$contador = 0;

for ($i = 1; $i <= 100; $i++) {

    for($j = 1; $j <= $i; $j++) {

        if($i % $j == 0) {
            $contador++;
        }

    }
    if ($i == 1 || $contador == 2) {
        echo "$i es un número primo.<br/>";
    }
    
    $contador = 0;
}