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
        echo "Ejercicio 2 de introducción a PHP";
    ?>
    </h2>
    
    <?php
        // Escribir una página en PHP que permita pasar de grados Fahrenheit a
        // grados Celsius. La página tendrá una variable con los grados Fahrenheit que
        // se quieren traducir y mostrará por pantalla un mensaje parecido a este:
        // 75 grados ºF corresponden a 23.8888889 ºC
        // Nota: La fórmula para pasar de Fahrenheit a Celsius es: C=5*(F - 32)/9

        $Fahrenheit = 67;
        $Celsius = 5*($Fahrenheit - 32)/9;

        echo "Grados Fahrenheit: $Fahrenheit<br>";
        echo "67 grados ºF corresponden a $Celsius ºC<br><br>";
    ?>
</body>
</html>