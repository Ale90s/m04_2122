<?php

    /*Les funcions poden cridar a altres funcions*/
    
    //Funció que ens mostra per pantalla l'increment en una unitat d'un número
    //passat com a paràmetre.
    function sumemU($num){ 
		$num+=1; 
		echo "$num<br>"; //Mostra increment d'1
	} 

	//Funció que ens mostra per pantalla l'increment en una unitat i en dos d'un número
    //passat com a paràmetre. Mitjançant aquesta segona funció accedim a la primera.
	function sumemDos($num){ 
		$num+=1; 
		echo "$num<br>"; //Mostra increment d'1.
		sumemU($num); 	//Mostra increment de 2
	} 


$num=0; 
sumemDos($num);
