<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>	
        <title>Selecció simple</title>
    </head>
    <body>
        <!-- construim una selecció d'opcions-->
        <form method="post" action="_4mostrarSeleccio.php">
            <p>
                <select name="noms[]"> <!-- Només es pot seleccionar una opció -->
                    <option value="Pepito">Pepito</option>
                    <option value="Maria">Maria</option>
                    <option value="Paula">Paula</option>
                </select>
            </p>
            <button type="submit" value="enviar" name="enviar">Enviar Dades</button>
        </form>

    </body>
</html>
