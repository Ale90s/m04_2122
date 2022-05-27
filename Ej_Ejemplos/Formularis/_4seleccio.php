<?php

print_r($_POST);

function mostrarNom() {
    echo "El nom seleccionat és:</br>";
    echo "<ul>"; //Creem llista html
    echo "<li>" . $_POST["noms"][0] . "</li>"; //Mostrem nom seleccionat
    echo "</ul>";
}
?>

