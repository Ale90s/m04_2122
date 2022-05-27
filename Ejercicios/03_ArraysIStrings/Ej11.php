<?php

$cadena = "Lore ipsum";

echo "Cadena de carácteres: $cadena<br/>";

echo "Cadena de carácteres al revés: ";

for ($i = strlen($cadena) - 1; $i >= 0; $i--) {

    echo "$cadena[$i]";

}