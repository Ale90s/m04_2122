<?php

echo "<h3>ESTRUCTURA SWITCH 3</h3>"; //Títol secció

/*Comprovarem si un nombre enter entre 1 i 8 és parell o imparell amb expressions.*/

$enter = 2; //Nombre enter a avaluar

switch ($enter) { 

	 //Nombres enters imparells, és a dir, els que compleixen que $enter % 2 != 0
	case $enter % 2 != 0:
        
		echo "$enter és imparell.<br/>";	
        
		break;
	
	//Nombres enters parells, és a dir, els que compleixen que $enter % 2 != 0
	case $enter % 2 == 0:
        
		echo "$enter és parell.<br/>";	
        
		break;
	
	//No és un nombre enter o bé és un nombre enter més petit que 1 o bé és un nombre enter més gran que 8
	default: 

		echo "El valor no és un nombre enter o no està entre 1 i 8.<br/>";
	
		break;
}
