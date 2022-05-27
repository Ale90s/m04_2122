<?php

$cadena = "Texto de prueba";

echo "$cadena<br/>";

for ($i = 0; $i < strlen($cadena); $i++) {

    $cadena[$i] = 'X';

}

echo "$cadena<br/>";