<?php

    //Creació d'una funció sense paràmetres
    function socFuncio(){
		echo "<h3>Sóc una funció.</h3>";
    }
    
    //Crida a la funció
    socFuncio(); //Imprimirà per pantalla "Sóc una funció"
    
    echo"<hr/>";
    
    //Creació d'una funció amb paràmetres
    function mostrarMissatge($missatge){
		echo "$missatge <br/>";
	}
	
	//Crida a la funció. En aquest cas la cridem més d'un cop
	mostrarMissatge("Això és un missatge.");
	mostrarMissatge("Això és un nou missatge.");
	mostrarMissatge("Aquest és l'últim missatge");
	
	echo"<hr/>";
	
	//Creació d'una funció amb retorn
	function sumar($primerOperand, $segonOperand){
		$suma = $primerOperand + $segonOperand;
		return $suma; //No cal crear una variable per retornar el valor, o podem fer directament com  return $primerOperand + $segonOperand
	}
	
	//Crida a la funció. En aquest cas la funció no mostra res per pantalla, només guardem en la variable $resultat, el valor que ens retorna.
     $resultat=sumar(3,4);
	
	//Mostrem resultat
	echo $resultat;	//També ho podem mostrar com a echo sumar(3,4);
	
	echo"<hr/>";
