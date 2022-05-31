<?php

if ($_POST["user"] == "aalgarra" and $_POST["password"] == 123 or $_POST["user"] == "oalonso" and $_POST["password"] == 123) {

    session_start();

    $_SESSION["ultimAcces"] = time();

    $_SESSION["user"] = $_POST["user"];
    $_SESSION["password"] = $_POST["password"];
    
    
    header("Location: ../HTML/1_Portada.html");
} else {
    header("Location: ../LoginIncorrecto.html");
}