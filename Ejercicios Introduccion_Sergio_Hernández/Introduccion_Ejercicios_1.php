<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de introducción a PHP</title>
</head>
<body>
    <h2>
    <?php
        echo "Ejercicio 1 de introducción a PHP";
    ?>
    </h2>
    
    <?php
        // Ejercicio 1: Escribir una página en PHP que almacene dos valores que representen los
        // kilómetros que ha recorrido un vehículo y el combustible que consumió el
        // vehículo en ese recorrido. La página deberá mostrar ambos datos, así como
        // el consumo medio por kilómetro.

        $kilometros = 256;
        $combustible = 13.5;
        $consumo_medio = $combustible / $kilometros;

        echo "Kilómetros recorridos: $kilometros<br>";
        echo "Combustible consumido: $combustible<br>";
        echo "Consumo medio por kilómetro: $consumo_medio<br><br>";
    ?>
</body>
</html>