<?php

echo "<h3>ESTRUCTURA IF ELSE</h3>"; //Títol secció

//Declaració variables
$departament = "RR.HH";

//Estructura if else
if ($departament == "RR.HH") { //Si es compleix la condició aleshores...

	echo "El departament de RR.HH es troba en la 1a planta.<br/>"; //... es realitza aquesta acció

} else { //Si no es compleix la condició aleshores...
	
	echo "El departament no és el de RR.HH.<br/>"; //... es realitza aquesta acció
}

//quan sortim de l'estructura if else
echo "Final de l'script.<br/>"; //... es realitza aquesta acció