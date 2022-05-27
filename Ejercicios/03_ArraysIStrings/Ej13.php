<?php

$palabra1 = "Antagonista";
$palabra2 = "Protagonista";

$rimaCompleta1 = substr($palabra1, strlen($palabra1) - 3);
$rimaCompleta2 = substr($palabra2, strlen($palabra2) - 3);

$rimaParcial1 = substr($palabra1, strlen($palabra1) - 2);
$rimaParcial2 = substr($palabra2, strlen($palabra2) - 2);

if ($rimaCompleta1 == $rimaCompleta2) {

    echo "Riman mucho<br/>";

} elseif ($rimaParcial1 == $rimaParcial2) {

    echo "Riman poco<br/>";

} else {

    echo "No riman<br/>";

}