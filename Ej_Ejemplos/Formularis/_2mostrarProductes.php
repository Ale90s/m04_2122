<!DOCTYPE html>
<?php include "_2accesProductes.php"; ?>

<html>
    <head>
        <title>Mostrar productes seleccionats</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />

    </head>
    <body>
        <p>Benvingut/da, <strong><?php echo $usuari;?></strong>!</p>
        <p>Els productes seleccionats són:

            <?php
            
            if (!empty($productes)) { //Si s'han seleccionat productes...
                
                //Dibuixem llista
                echo "<ul>";
                foreach ($productes as $producte) {
                    echo "<li>$producte</li>"; //Mostrem producte actual com li
                }
                echo "</ul>";
                
            } else {
                echo "No has seleccionat cap producte";
            }
            
            ?>

        </p>
    </body>
</html>
