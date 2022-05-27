<?php

$mes = 2;
$any = 2000;

switch ($mes) {

    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        
        echo "El mes $mes tiene 31 días.<br/>";

        break;
    case 2:

        if ($any % 4 == 0 && $any % 100 != 0 || $any % 400 == 0) {
            echo "El mes $mes del año $any tiene 28 dias.<br/>";   
        } else {
            echo "El mes $mes del año $any tiene 29 dias.<br/>";   
        }
             
        break;
    
    case 4:
    case 6:
    case 9:
    case 11:

        echo "El mes $mes tiene 30 días.<br/>";

        break;
}