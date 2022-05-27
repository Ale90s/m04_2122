<?php

echo "<h3>ESTRUCTURA SWITCH 2</h3>"; //Títol secció

/*Comprovarem si un nombre entre 1 i 8 és parell o imparell.*/

$enter = 1; //Nombre enter a avaluar

switch ($enter) { 

	 //Nombres enters imparells
	case 1:
	case 3:
	case 5:
	case 7:

		echo "$enter és imparell.<br/>";
	
		break;
	
	//Nombres enters parells
	case 2:
	case 4:
	case 6:
	case 8: 

		echo "$enter és parell.<br/>";
	
		break;
	
	//No és un nombre enter o bé és un nombre enter més petit que 1 o bé és un nombre enter més gran que 8
	default: 

		echo "El valor no és un nombre enter o no està entre 1 i 8.<br/>";
	
		break;
}
