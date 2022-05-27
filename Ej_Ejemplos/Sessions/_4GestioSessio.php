<?php

session_start(); //Iniciem sessió

function controlSessio() {    
    global $usuari;
    
    $usuari=$_SESSION["usuari"]; //Usuari guardat en la sessió
    
    define( "TEMPSINACTIU", 10 ); //Segons màxims que pot estar l'aplicació inactiva

    print_r($_SESSION); //Mostrem contingut de la sessió

    //Temps transcorregut des de l'últim accés a la pàgina i la data actual.
    $tempsTranscorregut = time() - $_SESSION["ultimAcces"];

    if ( $tempsTranscorregut >= TEMPSINACTIU ) { //Si la sessió ha caducat, han passat 30 segons o més des de l'últim accés...
        session_destroy(); //Destruïm sessió
        header( "Location: _4Caducitat.php" ); //Mostrem la pàgina de caducitat
    } else {//Si no ha caducat...
        $_SESSION["ultimAcces"] = time();//Actualitzem la data per tornar a començar
    }
}

function caducitat(){
        //Mostrem $_SESSION. La variable $_SESSION no té contingut, ja que hem 
        //destruït la sessió en l'script què crida a aquest.
        print_r($_SESSION); 
        
        //Destruïm de nou la sessió
        session_destroy();
}

function logout(){
    session_destroy(); //Destruim sessió
	$_SESSION=array(); //Buidem array $_SESSION. És el mateix què unset($_SESSION) o session_unset()
}