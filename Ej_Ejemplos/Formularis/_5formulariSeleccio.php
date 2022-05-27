<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8"/>	
        <title>Selecció</title>
    </head>
    <body>
        <!-- construim una selecció d'opcions-->
        <form method="post" action="_5mostrarSeleccio.php">
            <p>
                <select multiple name="noms[]"> <!--Es pot seleccionar més d'una opció-->
                    <option value="Pepito">Pepito</option>
                    <option value="Maria">Maria</option>
                    <option value="Paula">Paula</option>
                </select>
            </p>
            <button type="submit" value="enviar" name="enviar">Enviar Dades</button>
        </form>

    </body>
</html>
