<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP Tema 5</title>
</head>
<body>
    <h2>
    <?php
        echo "Ejercicio 2 de PHP tema 5";
    ?>
    </h2>
    
    <?php
        // 2) Crear una función PHP que reciba 3 códigos de colores. 
        // La función generará el código de una tabla con 3 filas, cada una con su color de fondo.

        function tablaColores($color1, $color2, $color3) {

            echo "<table border='1' cellpadding='20' cellspacing='0'>";

            echo "<tr style='background-color:$color1;'>";
            echo "<td>$color1</td>";
            echo "</tr>";

            echo "<tr style='background-color:$color2;'>";
            echo "<td>$color2</td>";
            echo "</tr>";

            echo "<tr style='background-color:$color3;'>";
            echo "<td>$color3</td>";
            echo "</tr>";

            echo "</table>";
        }

        tablaColores("gold", "silver", "peru");
    ?>
</body>
</html>
