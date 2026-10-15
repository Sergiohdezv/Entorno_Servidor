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
        echo "Ejercicio 3 de PHP tema 4";
    ?>
    </h2>
    
    <?php
        // 3) Crear un documento PHP que contenga una array de la siguiente forma: 
        // fila Nombre Peso Color Edad
        // 0    Pepe   4,5  Marrón 12
        // 1    Sparky 3    Blanco 2
        // 2    Tobby  7,2  Beige  8
        // 3    Bigotes 4   Negro  9
        // 4    Ricky  0,1  Verde  2
        // a. Cada una de las posiciones deberá ser los datos de un array asociativo, en la que las claves de las posiciones serán: nombre, peso, color y edad.
        // b. Cada fila de la matriz contendrá los datos de una mascota.
        // c. Se pide:
        // i. Mostrar todas las mascotas que tiene el usuario.
        // ii. Mostrar sólo el peso de la mascota con código “3”
        // iii. Mostrar sólo el color de la mascota de nombre Sparky
        // iv. Mostrar todos los datos de la mascota más mayor.
        // v. Mostrar el nombre de la mascota que pesa menos.

        $mascotas = [
            0 => [
                "nombre" => "Pepe",
                "peso" => 4.5,
                "color" => "Marrón",
                "edad" => 12
            ],
            1 => [
                "nombre" => "Sparky",
                "peso" => 3,
                "color" => "Blanco",
                "edad" => 2
            ],
            2 => [
                "nombre" => "Tobby",
                "peso" => 7.2,
                "color" => "Beige",
                "edad" => 8
            ],
            3 => [
                "nombre" => "Bigotes",
                "peso" => 4,
                "color" => "Negro",
                "edad" => 9
            ],
            4 => [
                "nombre" => "Ricky",
                "peso" => 0.1,
                "color" => "Verde",
                "edad" => 2
            ]
        ];

        echo "<h3>Todas las mascotas:</h3>";

        echo "<table border='1' cellpadding='8' cellspacing='0'
              style='border-collapse:collapse; text-align:center;'>";

        echo "<tr style='background-color:#8064A2; color:black; font-weight:bold;'>";
        echo "<th>Fila</th>";
        echo "<th>Nombre</th>";
        echo "<th>Peso</th>";
        echo "<th>Color</th>";
        echo "<th>Edad</th>";
        echo "</tr>";

        foreach ($mascotas as $fila => $mascota) {
            echo "<tr>";
            echo "<td>$fila</td>";
            echo "<td>" . $mascota["nombre"] . "</td>";
            echo "<td>" . $mascota["peso"] . "</td>";
            echo "<td>" . $mascota["color"] . "</td>";
            echo "<td>" . $mascota["edad"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";

        echo "<h3>Peso de la mascota con código 3:</h3>";
        echo $mascotas[3]["peso"] . " kg";

        echo "<h3>Color de Sparky:</h3>";

        foreach ($mascotas as $mascota) {
            if ($mascota["nombre"] == "Sparky") {
                echo $mascota["color"];
            }
        }

        $mascotaMayor = $mascotas[0];

        foreach ($mascotas as $mascota) {
            if ($mascota["edad"] > $mascotaMayor["edad"]) {
                $mascotaMayor = $mascota;
            }
        }

        echo "<h3>Mascota más mayor:</h3>";

        echo "Nombre: " . $mascotaMayor["nombre"] . "<br>";
        echo "Peso: " . $mascotaMayor["peso"] . " kg<br>";
        echo "Color: " . $mascotaMayor["color"] . "<br>";
        echo "Edad: " . $mascotaMayor["edad"] . " años";


        $mascotaMenorPeso = $mascotas[0];

        foreach ($mascotas as $mascota) {
            if ($mascota["peso"] < $mascotaMenorPeso["peso"]) {
                $mascotaMenorPeso = $mascota;
            }
        }

        echo "<h3>Mascota que pesa menos:</h3>";
        echo $mascotaMenorPeso["nombre"];
    ?>
</body>
</html>