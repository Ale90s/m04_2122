<?php

echo "<h3>ESTRUCTURA FOR</h3>"; //Títol secció

/*L'estructura for està formada per tres arguments: inicialització d'una
*variable (comptador), condició que s'ha de complir perquè s'executin les accions
*de dins l'estructura for i sumatori o decrement de la variable inicialitzada.
*Dels arguments només és obligatori el segon, però si no utilitzem un dels
*altres dos, han d'estar presents en l'script com fem amb el while. */

echo "<h4>TAULA DE MULTIPLICAR DEL 2 CREIXENT:</h4>";
$comptador=1;
//Inicialitzem la variable (argument 1: $comptador=1)
for (; $comptador<=10; ) { //Mentre es compleixi la condició (argument 2: $comptador<=10)
	
    echo $comptador." x 2 = ".($comptador * 2)."<br/>";
    $comptador++;
	//augmentem el comptador en 1 (argument 3: $comptador++)
    
} 

echo "<p>Final de l'script amb comptador = $comptador.</p>"; //... es realitza aquesta acció

echo "<h4>TAULA DE MULTIPLICAR DEL 2 DECREIXENT:</h4>";

//Inicialitzem la variable (argument 1: $comptador=10)
for ($comptador=10; $comptador>0; $comptador--) { //Mentre es compleixi la condició (argument 2: $comptador>0)
	
    echo $comptador." x 2 = ".($comptador * 2)."<br/>";
	//disminuïm el comptador en una unitat (argument 3: $comptador--)
    
}

//sortim de l'estructura for quan la condició ja no es compleix i ..

echo "<p>Final de l'script amb comptador = $comptador.</p>"; //... es realitza aquesta acció
