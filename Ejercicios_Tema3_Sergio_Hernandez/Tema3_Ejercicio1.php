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
        echo "Ejercicio 1 de PHP tema 3";
    ?>
    </h2>
    
    <?php
        // 1) Crear una página en PHP que muestre las tablas de multiplicar. Mostrará cada una en una tabla del tipo:
        // 1x1 1
        // 1x2 2
        // 1x3 3
        // 1x4 4
        // 1x5 5
        // 1x6 6
        // 1x7 7
        // 1x8 8
        // 1x9 9
        // 1x10 10
        // NOTA: es necesario respetar los colores y estilos de texto

        for ($tabla = 1; $tabla <= 10; $tabla++) {

            echo "Tabla del $tabla:";
            echo "<TABLE BORDER='1' CELLPADDING='4' CELLSPACING='0' style='border-color:#d9534f;'>";

            for ($i = 1; $i <= 10; $i++) {

                if ($i % 2 == 0) {
                    $color = "#e3a3a3";
                } else {
                    $color = "#f2c4c4";
                }

                $resultado = $tabla * $i;

                echo "<TR ALIGN='center'>";
                echo "<TD BGCOLOR='$color' style='color:black; font-weight:bold;'>{$tabla}x{$i}</TD>";
                echo "<TD BGCOLOR='$color' style='color:black;'>$resultado</TD>";
                echo "</TR>";
            }

            echo "</TABLE><br><br>";
        }

    ?>
</body>
</html>