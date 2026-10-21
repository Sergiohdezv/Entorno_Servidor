<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP Tema 5</title>
        <style>
        .dorado {
            background-color: gold;
        }

        .plata {
            background-color: silver;
        }
        
        .peru {
            background-color: peru;
        }
    </style>
</head>
<body>
    <h2>
    <?php
        echo "Ejercicio 3 de PHP tema 5";
    ?>
    </h2>
    
    <?php
        // 3) Hacer lo mismo que el ejercicio anterior, pero en caso lo que reciben son nombres de clases CSS definidas previamente (con los estilos que queráis). 
        // El objetivo es aplicar a cada fila de la tabla uno de los estilos que se pasan como parámetro.

        function tablaClases($clase1, $clase2, $clase3) {

            $tabla = "<table border='1' cellpadding='20' cellspacing='0'>";

            $tabla .= "<tr class='$clase1'>";
            $tabla .= "<td>Primera fila</td>";
            $tabla .= "</tr>";

            $tabla .= "<tr class='$clase2'>";
            $tabla .= "<td>Segunda fila</td>";
            $tabla .= "</tr>";

            $tabla .= "<tr class='$clase3'>";
            $tabla .= "<td>Tercera fila</td>";
            $tabla .= "</tr>";

            $tabla .= "</table>";

            return $tabla;
        }

        echo tablaClases("dorado", "plata", "peru");
    ?>
</body>
</html>