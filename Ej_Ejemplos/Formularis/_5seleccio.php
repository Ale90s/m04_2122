<?php

print_r($_POST);

function llistarNoms() {
    if ($_POST["enviar"]) {

        if (!empty($_POST["noms"])) { //Si la variable noms no està buida...
            
            echo "Els noms seleccionats són:</br>";
            
            echo "<ul>"; //Creem llista html
            //Fem un reccorregut pel vector noms..
            foreach ($_POST["noms"] as $nom) {
                echo "<li>$nom</li>"; //Mostrem els noms seleccionats
            }
            echo "</ul>";
            
        } else { //Si està buida
            echo "No has seleccionat cap nom";
        }
    }
}
?>

