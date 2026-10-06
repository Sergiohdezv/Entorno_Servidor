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
        echo "Ejercicio 4 de PHP tema 3";
    ?>
    </h2>

    <?php
        // 4) Utilizando bucles hacer una página web en PHP que muestre el calendario de todo un año. La página tendrá una tabla por cada mes en la que habrá,
        // una fila con el nombre del mes, una fila con cada día de la semana y las celdas necesarias para los días del mes. El año empezará en lunes (1 de
        // enero = lunes). Aplicar estilos personalizados

        $mes[0][0] = "Enero";
        $mes[0][1] = 31;

        $mes[1][0] = "Febrero";
        $mes[1][1] = 28;

        $mes[2][0] = "Marzo";
        $mes[2][1] = 31;

        $mes[3][0] = "Abril";
        $mes[3][1] = 30;

        $mes[4][0] = "Mayo";
        $mes[4][1] = 31;

        $mes[5][0] = "Junio";
        $mes[5][1] = 30;

        $mes[6][0] = "Julio";
        $mes[6][1] = 31;

        $mes[7][0] = "Agosto";
        $mes[7][1] = 31;

        $mes[8][0] = "Septiembre";
        $mes[8][1] = 30;

        $mes[9][0] = "Octubre";
        $mes[9][1] = 31;

        $mes[10][0] = "Noviembre";
        $mes[10][1] = 30;

        $mes[11][0] = "Diciembre";
        $mes[11][1] = 31;

        $dia = 1;

        for ($m = 0; $m < 12; $m++) {
            echo "<table border='1' cellpadding='8' cellspacing='0' 
                  style='border-collapse:collapse; margin:20px auto; text-align:center;'>";

            echo "<tr>";
            echo "<th colspan='7' style='background-color:#555555; color:white;'>";
            echo $mes[$m][0];
            echo "</th>";
            echo "</tr>";

            echo "<tr style='background-color:#dddddd; font-weight:bold;'>";
            echo "<td>Lunes</td>";
            echo "<td>Martes</td>";
            echo "<td>Miércoles</td>";
            echo "<td>Jueves</td>";
            echo "<td>Viernes</td>";
            echo "<td>Sábado</td>";
            echo "<td>Domingo</td>";
            echo "</tr>";

            echo "<tr>";

            for ($i = 1; $i <= $mes[$m][1]; $i++) {
                echo "<td>$i</td>";

                $dia++;

                if ($dia > 7) {
                    $dia = 1;
                    echo "</tr><tr>";
                }
            }
            echo "</tr>";
            echo "</table>";
        }

    ?>

</body>
</html>