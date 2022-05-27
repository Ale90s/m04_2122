<?php

crearTaula(4, 10);

function crearTaula($filas, $columnas) {

    if ($filas < 1 || $columnas < 1) {

        echo "Valor erroneo de fila o columna";

    } else {
        
        $tabla = "<table>";

        for ($i = 0; $i < $filas; $i++) {
            $tabla .= "<tr>";
            for ($j = 0; $j < $columnas; $j++) {
                $tabla .= "<td>$j</td>";
            }
            $tabla .= "</tr>";
        }

        $tabla .= "</table>";

        echo $tabla;

    }
}