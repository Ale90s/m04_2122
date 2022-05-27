<?php
/* Creació d'arrays de més d'una dimensió.*/

//Creem un array bidimensional = array format per arrays.
$taula = array(
				array(
				"nom" => "Bob",
				"ocupacio" => "Superheroi",
				"edat" => 30,
				"poder" => "Visió raigs x"
				),
			    array(
				"nom" => "Sally",
				"ocupacio" => "Superheroïna",
				"edat" => 24,
				"poder" => "Força sobrenatural"
				),
				array(
				"nom" => "Jane",
				"ocupacio" => "Superheroïna",
				"edat" => 33,
				"poder" => "Nanotecnologia"
				)
			);
//Mostrem contingut de l'array bidimensional $taula
echo "El contingut de \$taula és:<br/>";
//Mostrem el contingut de l'array mitjançant print_r
print_r($taula);
echo "<hr/>";
			
//Mostrem un valor concret de $taula
echo "El valor de l'edat del personatge del segon array és: ".$taula[1]["edat"]."<hr/>";

//Creem un array tridimensional= Array format per arrays bidimensionals
$personatges = array(
			"dadesPersonals" => array(
								"noms" => array("Bob","Sally","Jane"),
								"edats" => array(30,24,33)
                   ),
			"dadesLaborals" => array(
								"ocupacio" => array("Superheroi","Superheroïna"),
								"poder" => array("Visió raigs x","Força sobrenatural","Nanotecnologia"),
								"ciutat" => array("Nova York")
                   )
 );

//Mostrem un valor concret de $personatges
echo "El nom del primer personatge és: ".$personatges["dadesPersonals"]["noms"][0]."<hr/>";
