<?php

echo "<h3>ESTRUCTURA WHILE</h3>"; //Títol secció

//Declaració variables
$comptador = 1;

//Estructura while

while ($comptador <= 10) { //mentre es compleixi la condició...

	echo "$comptador x 2 = ".($comptador * 2)."<br/>"; //... es realitza aquesta acció...
	
	$comptador++;//i finalment augmentem en 1 el comptador
}

//Si no es compleix la condició, no entrem dins de l'estructura i sortim

echo "<p>Final de l'script amb comptador = $comptador.</p>"; //Acció final de l'script un cop sortim de l'estructura
