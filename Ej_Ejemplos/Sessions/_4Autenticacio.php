<?php
define("USUARI", "Xesca"); //Definim nom d'usuari vàlid
define("PASSWORD", "123"); //Definim contrasenya vàlida

if ($_POST["usuari"] == USUARI && $_POST["contrasenya"] == PASSWORD) {//Si l'autenticació és correcte...
    
    session_start(); //Iniciem sessió.

    $_SESSION["ultimAcces"] = time(); //Inicialitzem la data d'inici de sessió
    
    //Guardem les dades de l'usuari autenticat en la sessió
    $_SESSION["usuari"] = $_POST["usuari"];
    $_SESSION["contrasenya"] = $_POST["contrasenya"];

    //Mostrem la pàgina de l'aplicació
    header("Location: _4Aplicacio.php");

} else { //Si l'autenticació no és correcte...
    header("location:_4Inici.html"); //Retornem a la pàgina inicial.
}
