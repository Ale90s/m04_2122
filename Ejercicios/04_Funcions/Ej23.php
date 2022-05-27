<?php

$compra = 30;
$compra = descuento($compra);
echo "Nuevo valor de compra: $compra<br/><br/>";

$compra = 223;
$compra = descuento($compra);
echo "Nuevo valor de compra: $compra<br/><br/>";

$compra = 934;
$compra = descuento($compra);
echo "Nuevo valor de compra: $compra<br/><br/>";

function descuento($dinero) {

    if ($dinero < 100) {

        echo "Ningún descuento a nuestra compra de $dinero<br/>";
        return $dinero;

    } elseif ($dinero >= 100 && $dinero < 500) {

        echo "Descuento del 10% a nuestra compra de $dinero<br/>";
        return $dinero - ($dinero * 0.1);

    } else {

        echo "Descuento del 15% a nuestra compra $dinero<br/>";
        return $dinero - ($dinero * 0.15);

    }

}