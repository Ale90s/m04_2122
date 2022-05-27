<?php

/*Per recórrer un array, accedir a tots els seus elements, ho podem fer mitjançant estructures iteratives. En el cas d'un array numèric ho podem fer mitjançant qualsevol estructura de les vistes fins ara, i en el cas dels arrays associatius, ho podem fer mitjançant una nova estructura, l'estructura foreach'*/

//RECORREGUT D'UN ARRAY NUMÈRIC

echo "<h3>RECORREGUT D'UN ARRAY NÙMERIC</h3>"; //Títol secció

$arrayNumeric = array("Pep","RR.HH",48,"00000000T"); //Definim un array numèric

for ($i=0; $i<count($arrayNumeric); $i++) { //Mentre quedin elements...
	echo " L'element $i és $arrayNumeric[$i]<br/>"; //mostrem l'índex de l'element actual i el seu contingut
} 

//RECORREGUT D'UN ARRAY ASSOCIATIU

echo "<h3>RECORREGUT D'UN ARRAY ASSOCIATIU</h3>"; //Títol secció

$arrayAssociatiu = array("Nom"=>"Pep","Departament"=>"RR.HH","Edat"=>48,"Nif"=>"00000000T"); //Definim un array associatiu

foreach ($arrayAssociatiu as $index => $contingut) { //Mentre quedin elements...
	echo " $index : $contingut<br/>"; //mostrem l'índex de l'element actual i el seu contingut
} 