<?php 
include "_4GestioSessio.php";
controlSessio();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Aplicació</title>
    </head>
    <body>
        <p>Benvinguda <strong><?php echo $usuari; ?></strong></p>
        <p><a href="_4Logout.php">Tanca la sessió</a></p>
        <p><a href="_4Inici.html">Torna a l'inici</a></p>
    </body>
</html>
