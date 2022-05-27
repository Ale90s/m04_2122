<?php	
	/*Podem accedir als caràcters d'una cadena mitjançant un índex. 
	 *Primer caràcter correspondrà a l'índex 0. Els índexs augmentaran 
	 *de manera consecutiva d'esquerra a dreta fins arribar a l'últim 
	 *caràcter.*/
		
	 $frase = "Sóc una frase";
	 echo "<p>El primer caràcter és $frase[0]<br/>"; //Mostrarà el caràcter "S"
	 echo "El cinquè caràcter és $frase[5]<br/>"; //Mostrarà el caràcter "u"
	
	/*La funció strlen("cadena") ens retorna la longitud d'una cadena, 
	 *és a dir, la quantitat de caràcters que té la cadena tenint en 
	 *compte que també comptabilitza el final de línia com un caràcter
	 *i què els caràcters amb titlla (accents, ñ, etc..) els compte com a dos.*/
	 
	 $longitud = strlen($frase); //Longitud $frase
	 echo "La longitud de la frase és $longitud<br/>";
	 $ultimCaracter = $frase[$longitud-1]; //Mostrarà el caràcter "e"
	 echo "L'últim caràcter és $ultimCaracter<br/>";