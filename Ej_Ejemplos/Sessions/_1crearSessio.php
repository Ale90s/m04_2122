<?php
//La caducitat d'una sessió per defecte és la que té assignada la variable
//session.cache_expire de php.ini. Normalment és de 180 minuts. Es pot modificar
//mitjançant 
$caducitat=session_cache_expire();
echo"<p>La caducitat de la sessió és: $caducitat</p>";

//Modifiquem caducitat de la sessió a 30 minuts. Aquest valor s'ha d'indicar cada
//cop que fem una petició, ja que si no es reinicia al valor per defecte 180'.
session_cache_expire(30);
$caducitat=session_cache_expire();
echo"<p>La nova caducitat de la sessió és: $caducitat</p>";

//Creem sessió
session_start();

//Mostrem SID de la sessió creada
echo "<p>El SID de la teva sessió és ".session_id().".</p>";

//Mostrem nom de la sessió creada. No pot contenir només dígits, ha de contenir alguna lletra perquè
//no es generi un nou id cada cop que la iniciem.
echo "<p>El nom de la teva sessió és ".session_name().".</p>";

//Destruïm sessió. Sobretot quan la sessió ha d'acabar abans de tancar 
//el navegador. No destrueix la cookie de la sessió.
//session_destroy(); //destruïm la informació associada amb la sessió actual