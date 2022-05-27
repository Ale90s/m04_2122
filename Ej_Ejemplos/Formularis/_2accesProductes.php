<?php
$enviar=$_POST["enviar"]; //Recollim name del button


if ($enviar){ //Si s'han enviat les dades...

  //Accedim al nom d'usuari
  $usuari=$_POST["usuari"];
  $productes=$_POST["productes"];

  //Mostrem el contingut del vector productes
  print_r($productes);
  echo "<br/>";

  //Mostrem el contingut de la variable $_POST
  print_r($_POST);
  
}else{ //Si no s'han enviat les dades
	echo "Les dades no s'han enviat correctament";
}

?>
