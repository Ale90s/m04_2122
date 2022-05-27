<?php

echo "<h3>ESTRUCTURA SWITCH 1</h3>"; //Títol secció

//Declaració variables
$departament = "RR.HH";

//Estructura switch

switch ( $departament ) {//variable a avaluar    
		
	case "Comercial": //Si el departament és el comercial....

		echo "El departament comercial es troba en la 2a planta.<br/>"; //... es realitza aquesta acció
	
		break; //sortim de l'estructura switch
        
        
    case "RR.HH": //Si el departament és el de RR.HH....

        echo "El departament de RR.HH es troba en la 1a planta.<br/>"; //... es realitza aquesta acció

        break;//sortim de l'estructura switch     
        
        
    case "Administració": //Si el departament és el d'administració'....

        echo "El departament d'administració es troba en la planta 0.<br/>"; //... es realitza aquesta acció

        break;//sortim de l'estructura switch    
        

	default: //Si el valor de $departament no és cap dels anteriors...

       echo "Aquest departament no existeix.<br/>"; //... es realitza aquesta acció

       break; //sortim de l'estructura switch
        
}

//quan sortim de l'estructura switch

    echo "Final de l'script.<br/>";  //... es realitza aquesta acció