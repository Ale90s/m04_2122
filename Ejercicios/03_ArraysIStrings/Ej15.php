<?php

$palindromo = "A cavar a Caravaca";

$chequeo = checkPalindromo($palindromo);
muestraPalindromo($chequeo);

$palindromo = "La bicicleta azul";

$chequeo = checkPalindromo($palindromo);
muestraPalindromo($chequeo);

function checkPalindromo($checkPalindr) {

    $checkPalindr = strtolower($checkPalindr);

    $palabraDerecha = "";
    $palabraReves = "";

    $counter = 0;

    for ($i = 0; $i < strlen($checkPalindr); $i++) {

        if ($checkPalindr[$i] != ' ') {
            $palabraDerecha .= $checkPalindr[$i];
            $counter++;
        }
        
    }

    $counter = 0;

    for ($i = strlen($checkPalindr) - 1; $i >= 0; $i--) {

        if ($checkPalindr[$i] != ' ') {
            $palabraReves .= $checkPalindr[$i];
            $counter++;
        }

    }
    
    if ($palabraDerecha == $palabraReves) {
        return true;
    } else {
        return false;
    }
    
}

function muestraPalindromo($chequeo) {

    if ($chequeo) {
        echo "La frase es palíndroma.</br>";
    } else {
        echo "La frase NO es palíndroma.</br>";
    }

}