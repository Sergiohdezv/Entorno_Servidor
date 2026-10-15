<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP Tema 4</title>
</head>
<body>
    <h2>
    <?php
        echo "Ejercicio 1 de PHP tema 4";
    ?>
    </h2>
    
    <?php
        // 1) Crear un script PHP que muestre la siguiente tabla. (Utilizar arrays asociativos)
        // Ciudad(nombre_posición) Población(contenido)
        // Granada                 150000
        // Madrid                  3000000
        // Barcelona               2879200
        // Málaga                  240000
        // Sevilla                 500000
        // Valencia                1584600
        // Tarragona               485210
        // a. Mostrar después el array asociativo:
        // i. Ordenado por orden alfabético de ciudad.
        // ii. Ordenado por cantidad de población
        // b. Mostrar sólo la ciudad con más población y la ciudad con menos población

        $ciudades = [
            "Granada" => 150000,
            "Madrid" => 3000000,
            "Barcelona" => 2879200,
            "Málaga" => 240000,
            "Sevilla" => 500000,
            "Valencia" => 1584600,
            "Tarragona" => 485210
        ];

        echo "<h3>Ciudades y población:</h3>";

        echo "<table border='1' cellpadding='8' cellspacing='0'
              style='border-collapse:collapse; text-align:center;'>";

        echo "<tr style='background-color:#555555; color:white;'>";
        echo "<th>Ciudad</th>";
        echo "<th>Población</th>";
        echo "</tr>";

        foreach ($ciudades as $ciudad => $poblacion) {
            echo "<tr>";
            echo "<td>$ciudad</td>";
            echo "<td>$poblacion</td>";
            echo "</tr>";
        }

        echo "</table>";

        ksort($ciudades);

        echo "<h3>Ordenado por ciudad:</h3>";

        echo "<table border='1' cellpadding='8' cellspacing='0'
              style='border-collapse:collapse; text-align:center;'>";

        echo "<tr style='background-color:#555555; color:white;'>";
        echo "<th>Ciudad</th>";
        echo "<th>Población</th>";
        echo "</tr>";

        foreach ($ciudades as $ciudad => $poblacion) {
            echo "<tr>";
            echo "<td>$ciudad</td>";
            echo "<td>$poblacion</td>";
            echo "</tr>";
        }

        echo "</table>";

        asort($ciudades);

        echo "<h3>Ordenado por población:</h3>";

        echo "<table border='1' cellpadding='8' cellspacing='0'
              style='border-collapse:collapse; text-align:center;'>";

        echo "<tr style='background-color:#555555; color:white;'>";
        echo "<th>Ciudad</th>";
        echo "<th>Población</th>";
        echo "</tr>";

        foreach ($ciudades as $ciudad => $poblacion) {
            echo "<tr>";
            echo "<td>$ciudad</td>";
            echo "<td>$poblacion</td>";
            echo "</tr>";
        }

        echo "</table>";

        $ciudadMenos = array_key_first($ciudades);
        $ciudadMas = array_key_last($ciudades);

        echo "<p><b>Ciudad con menos población:</b> $ciudadMenos - $ciudades[$ciudadMenos] habitantes</p>";
        echo "<p><b>Ciudad con más población:</b> $ciudadMas - $ciudades[$ciudadMas] habitantes</p>";
    ?>
</body>
</html>