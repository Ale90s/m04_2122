<?php

    /*Les variables declarades dins d'una funció són només per a l'àmbit 
     *de la funció. Fora de la funció no es poden utilitzar com si fossin 
     *les mateixes variables.*/
    function mostrarNom(){
		$nom = "Pere Bernat";
	}
	
	//Intentem mostrar el resultat de la variable $nom. No es mostra res perquè
	//no està declarada fora de l'àmbit de la funció.
	echo "El contingut de la variable \$nom és $nom <br/>";
    
    echo"<hr/>";
    
    /*De la mateixa manera una variable declarada fora d'una funció és només 
     *per a l'àmbit extern a la funció. Dins de la funció no es pot utilitzar
     *com si fos la mateixa variable.*/
    $cognom = "Sastre";
        
    //Intentem utilitzar la variable $cognom dins de la funció. No mostra res perquè
	//està declarada fora de l'àmbit de la funció.
	function mostrarCognom(){
		echo "El contingut de la variable \$cognom és $cognom";
	}
	mostrarCognom(); //No mostra res
	
	echo"<hr/>";
	
	/*Per utilitzar una variable dins d'una funció declarada fora del seu
	 *àmbit, el que fem és declarar-la com a global dins de la funció. D'aquesta
	 *manera la funció recordarà el valor que té la variable fora d'ella.*/
       
    //Intentem utilitzar la variable $cognom dins de la funció. Mostra el seu valor
    //perquè l'hem declarat com a global dins la mateixa funció.
	function mostrarCognom(){
		global $cognom; //Declarem com a global
		echo "El contingut de la variable \$cognom és $cognom";
	}
	mostraCognom(); //Mostrem Sastre.
	
	echo"<hr/>";
	
	/*Les variables declarades com estàtiques només existeixen dins l'àmbit
	 *de la funció on les declarem, però no perden el seu valor quan l'execució
	 *del programa abandona l'àmbit de la funció.*/
	
	//Funció que ens ha de permetre crear un llistat numerat
	//$numeracio=0;
	function crearLlistatNumerat($missatge){
		//global $numeracio;
		//static $numeracio=0;
		$numeracio=0; //Inicialitzem
		$numeracio++; //Augmentem numeració
		echo "<h3>$numeracio $missatge</h3>"; //Mostrem punt de la llista + missatge
	}
	
	//Cridem funció per crear llista de dos punts
	crearLlistatNumerat("Primer punt.");
	crearLlistatNumerat("Segon punt.");
