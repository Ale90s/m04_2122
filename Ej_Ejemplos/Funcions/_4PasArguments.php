<?php

    /*Pas de més d'un paràmetre.*/
    
    //Funció que ens permet canviar el format del títol HTML d'un text passat
    //com a paràmetre.
    function formatTitolHTML($text, $titol){ //Dos paràmetres: text i format del títol HTML
    	echo "<h$titol>$text</h$titol>";
	}
	formatTitolHTML("Títol H1","1");
	formatTitolHTML("Títol H2","2");
	formatTitolHTML("Títol H3","3");
	formatTitolHTML("Títol H4","4");
	
	echo "<hr/>";
	
	/*Pas de paràmetres opcionals.*/
    
    //Funció que ens permet canviar el format del títol HTML d'un text passat
    //com a paràmetre o bé deixar el format del títol HTML per defecte (en el nostre cas H1)
    //segons el valor corresponent al format del títol.
    function formatTitolHTMLH1($text, $titol="1"){ //Dos paràmetres: text i format del tìtol HTML H1
    	echo "<h$titol>$text</h$titol>";
	}
	formatTitolHTMLH1("Títol H1"); //Format per defecte del títol 
	formatTitolHTMLH1("Títol H2","2");
	formatTitolHTMLH1("Títol H3","3");
	formatTitolHTMLH1("Títol H4","4");
	
	echo "<hr/>";
	
	/*Pas de paràmetres per referència.*/
    
    //Funció que suma 5 a un número passat com a paràmetre sense retornar res
    function afegirCinc($num){
		$num += 5;
	}

	$elMeuNumero = 10;
    $resultat = afegirCinc($elMeuNumero); //Suma 5 a $elMeuNumero, però a la variable no se li assigna cap valor perquè la funció no retorna res
	echo "El valor de \$resultat és: $resultat"; //No mostra res
	
	echo "<hr/>";
	
	//Solució 1
	function afegirCinc1($num){
		$num += 5;
		return $num;
	}
	$resultat=afegirCinc1($elMeuNumero); //Suma 5 a elMeuNumero i retorna el resultat
	echo $resultat; //Mostra 15
    
    echo "<hr/>";
    
    //Solució 2: pas de paràmetre per referència a una funció
    function afegirCinc2(&$num){
		$num += 5;
	}
	$elMeuNumero = 10;
	afegirCinc2($elMeuNumero); //Suma 5 a elMeuNumero. El paràmetre fa referència a la funció
	echo $elMeuNumero; //Mostra 15
	
	echo "<hr/>";
