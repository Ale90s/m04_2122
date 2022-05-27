<?php
/*Definició d'un array sense inicialitzar-lo*/
$vector0;

/* Creació d'un array numèric ($vector0), on l'índex serà numèric seqüencial de 0 fins última posició sense
 indicar els índexs. El sistema els assignarà automàticament començant pel 0 i en el mateix ordre en què 
 definim els elements. */
$vector0[]="Bob";
$vector0[]="Superheroi";
$vector0[]=30;
$vector0[]="Visió raigs x";

echo "El contingut de \$vector0 és:<br/>";
//Mostrem el contingut de l'array mitjançant la funció print_r passant-li com a paràmetre el vector $vector0.
print_r($vector0);
echo "<br/>";

/* Creació d'un array ($vector1) numèric indicant l'índex*/
$vector1[0]=null;
$vector1[1]="Superheroïna";
$vector1[2]=24;
$vector1[3]="Força sobrenatural";

echo "El contingut de \$vector1 és:<br/>";
//Mostrem el contingut de l'array mitjançant la funció print_r passant-li com a paràmetre el vector $vector1.
print_r($vector1);
echo "<br/>";

/* Creació d'un array numèric utilitzant la funció array. Aquesta funció assignarà a la variable $vector2
 un array creat amb les dades passades per paràmetre en l'ordre que apareixen.*/
$vector2= array("Jane","Superheroïna",34,"Nanotecnologia");

echo "El contingut de \$vector2 és:<br/>";
//Mostrem el contingut de l'array mitjançant la funció print_r passant-li com a paràmetre el vector $vector2.
print_r($vector2);
echo "<br/>";

/*Afegim un nou element al final de l'array $vector2*/
$vector2[]="Pensilvània";

echo "Ara el contingut de \$vector2 és:<br/>";
//Mostrem el contingut de l'array mitjançant la funció print_r passant-li com a paràmetre el vector $vector2.
print_r($vector2);
echo "<br/>";

/* Modificació dels arrays numèrics*/
$vector1[0]="Sally"; //Modificació valor posició 0
$vector1[2]=33; //Modificació valor posició 2

echo "Ara el contingut de \$vector1 és:<br/>";
//Mostrem el contingut de l'array mitjançant la funció print_r passant-li com a paràmetre el vector $vector1.
print_r($vector1);