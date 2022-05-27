<?php
//Activem la sessió creada en en la pàgina anterior
session_start();

//Mostrem contingut de la sessió creada
//echo "<p>Gràcies $nom $cognoms. Les teves dades han estat registrades amb èxit.</p>";
echo "<p>Gràcies ".$_SESSION["nom"]." ".$_SESSION["cognoms"]."</p>";

//Destruïm sessió. Això només destrueix les dades de sessió del disc, no 
//destrueix la variable $_SESSION.
session_destroy();

//Mostrem contingut de les variables
echo "<p>Fins un altre ".$_SESSION["nom"]." ".$_SESSION["cognoms"];

//Destruïm les variables fetes servir, ja que encara que destruïm la sessió
//les dades fetes servir encara es troben en la variable $_SESSION fins que
//finalitzi el script. Si hem de tornar a utilitzar-la abans que finalitzi
//el script, les dades es conservaran.
unset($_SESSION["nom"]);
unset($_SESSION["cognoms"]);
//Un altre manere de desfer-se de les variables: $_SESSION=array();

//Mostrem contingut de les variables destruïdes
echo "<p>Fins aviat ".$_SESSION["nom"]." ".$_SESSION["cognoms"].".</p>";
