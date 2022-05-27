<!DOCTYPE html>
<html>

<head>
        <meta charset="UTF-8"/>	
	<title>Banc</title>
</head>

<body>
<?php
		print_r($_POST);
		$durada=0;  //Comptador mesoso a pagar
		$paquet=$_POST["valor"]; //Paquet seleccionat
		$quotaMensual=$_POST["pagmes"]; //Quota mensual
		$codiOperacio=$_POST["operacio"]; //Codi operació ocult per l'usuari
		
		//Segons el paquet seleccionat mitjançant el radio apliquem un interés o altre
		switch ($paquet) {
			case 1000:
				$interes = 5;
				break;
			case 5000:
				$interes = 6.5;
				break;
			case 10000:
				$interes = 8;
				break;
			default:
				header("location: _3banc.html"); //Tornem a la pàgina del formulari
				exit; //Sortim del programa
		}
		
		
		while ($paquet > 0){ //mentres el valor no sigui negatiu....
			$durada++;
                        
			$mensual = $quotaMensual - ($paquet * $interes/100); // calculem la quota mensual
                        
			if ($mensual<=0){ //Si cota mensual mensual és negativa...
				echo "<h2>Operacio $codiOperacio</h2> Necessites fer pagaments més grans!";
				exit; //Sortim del programa
			}
                        
			$paquet = $paquet - $mensual; //valor que ens queda un cop restada mensualitat
		}
		
		//Mostrem resultat
		echo "<h2>Operacio $codiOperacio</h2> La durada és de $durada mesos amb un percentatge d'interés del $interes%.";
?>
</body>

</html>
