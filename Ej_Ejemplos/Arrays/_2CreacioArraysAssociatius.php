<?php

/* Creació d'un array ($vector1) numèric indicant l'índex*/
$vectorAssociatiu0["nom"]=null;
$vectorAssociatiu0["ocupacio"]="Superheroïna";
$vectorAssociatiu0["edat"]=24;
$vectorAssociatiu0["poder"]="Força sobrenatural";

echo "El contingut de \$vectorAssociatiu0 és:<br/>";
    ;
//Mostrem el contingut de l'array mitjançant print_r
print_r($vectorAssociatiu0);
echo "<br/>";

/* Creació d'un array associatiu utilitzant la funció array. Aquesta funció assignarà a la variable
$vectorAssociatiu1 un array creat amb les dades passades per paràmetre en l'ordre que apareixen*/
$vectorAssociatiu1= array("nom"=>"Sally","ocupacio"=>"Superheroïna","edat"=>33,"Poder"=>"Força sobrenatural");

echo "El contingut de \$vectorAssociatiu1 és:<br/>";
//Mostrem el contingut de l'array mitjançant print_r
print_r($vectorAssociatiu1);
echo "<br/>";

/*Afegim un nou element al final d'un array associatiu. Hem de crear un nou índex i el sistema automàticament
 l'afegirà com a nou element al final (cua) de l'array.*/
$vectorAssociatiu1["residencia"]="Nova York";

echo "Ara el contingut de \$vectorAssociatiu1 és:<br/>";
//Mostrem el contingut de l'array mitjançant print_r
print_r($vectorAssociatiu1);
echo "<br/>";

/* Modificació d'un array associatiu*/
$vectorAssociatiu1["nom"]=null; //Modificació del valor de l'índex "nom"
$vectorAssociatiu1["edat"]=24; //Modificació del valor de l'índex "edat"

echo "Ara el contingut de \$vectorAssociatiu1 és:<br/>";
//Mostrem el contingut l'array mitjançant print_r
print_r($vectorAssociatiu1);
echo "<br/>";
