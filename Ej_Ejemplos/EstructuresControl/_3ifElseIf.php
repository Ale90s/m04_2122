<?php

echo "<h3>ESTRUCTURA IF ELSE IF</h3>";
//Títol secció

//Declaració variables
$departament = "RR.HH";

//Estructura if else if
if ( $departament == "Comercial" ) {  //Si es compleix la condició aleshores...

    echo "El departament comercial es troba en la 2a planta.<br/>";  //... es realitza aquesta acció

} elseif ( $departament == "RR.HH" ) {  //Si es compleix la condició aleshores...

    echo "El departament de RR.HH es troba en la 1a planta.<br/>"; //... es realitza aquesta acció

} elseif ( $departament == "Administració" ) {  //Si es compleix la condició aleshores...

    echo "El departament d'administració es troba en la planta 0.<br/>";   //... es realitza aquesta acció

} else {  //Si no es compleix cap de les condicions anteriors aleshores...

    echo "Aquest departament no existeix.<br/>"; //... es realitza aquesta acció
}

//quan sortim de l'estructura if else if
echo "Final de l'script.<br/>"; //... es realitza aquesta acció
