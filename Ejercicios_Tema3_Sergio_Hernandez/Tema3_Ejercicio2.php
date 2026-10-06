<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP Tema 3</title>
</head>
<body>
    <h2>
    <?php
        echo "Ejercicio 2 de PHP tema 3";
    ?>
    </h2>

    <?php
        // 2) Crear un documento PHP que cree un array de al menos 4 posiciones.
        // Después el documento mostrará una tabla como la que se ve a continuación:

        // Número Cuadrado Cubo
        // 3       9        27
        // 8       64       512
        // 7       49       343
        // -6      36       -216
    ?>
    
    <TABLE BORDER="0" CELLPADDING="10" CELLSPACING="0">

        <TR bgcolor="black" style="color:white;" align="center">

            <TH>Número</TH>
            <TH>Cuadrado</TH>
            <TH>Cubo</TH>

        </TR>

    <?php
        $numeros = array(3, 8, 7, -6);

        foreach ($numeros as $n) {
            $cuadrado = $n * $n;
            $cubo = $n * $n * $n;

            if ($n % 2 == 0) {
                $color = "#9bbb59";
            } else {
                $color = "#789438";
            }

            echo "<tr align='center' style='background-color:$color; color:white;'>";
            echo "<td>$n</td>";
            echo "<td>$cuadrado</td>";
            echo "<td>$cubo</td>";
            echo "</tr>";
        }
    ?>

    </TABLE>

</body>
</html>