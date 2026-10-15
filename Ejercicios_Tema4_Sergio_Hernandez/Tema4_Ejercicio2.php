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
        echo "Ejercicio 2 de PHP tema 4";
    ?>
    </h2>
    
    <?php
        // 2) Crear un script PHP que utilizando arrays guarde las notas de todo un grupo de alumnos. En el curso hay 5 alumnos de los que se guardará su nombre 
        // (no es necesario guardar apellidos) y cada alumno está matriculado de: matemáticas, lengua, ciencias naturales y geografía. 
        // El documento PHP deberá mostrar una tabla parecida a la siguiente:
        // Alumno Matemáticas Lengua Ciencias Naturales Geografía Media
        // Antonio 5          8.3    9                  7         7,325
        // Ana    8           7      4,5                9         7,125
        // Benito 9           6,75   9                  3,1       6,692
        // a. Se pide hacer esto utilizando una tabla en la que cada fila tenga como nombre el nombre del alumno y como columnas las notas de cada alumno.
        // b. En los arrays NO PUEDEN aparecer las notas medias, se calcularán en el momento de mostrarlas.
        // c. Además, suponer que el profesor ha pedido ver las notas de sólo uno de los alumnos, meterá el nombre y se mostrarán las notas de dicho alumno.
        // (Meter uno de los nombres del array en una variable simple y suponer que dicho nombre es el que ha tecleado el profesor).

        $alumnos = [
            "Antonio" => [
                "Matemáticas" => 5,
                "Lengua" => 8.3,
                "Ciencias Naturales" => 9,
                "Geografía" => 7
            ],
            "Ana" => [
                "Matemáticas" => 8,
                "Lengua" => 7,
                "Ciencias Naturales" => 4.5,
                "Geografía" => 9
            ],
            "Benito" => [
                "Matemáticas" => 9,
                "Lengua" => 6.75,
                "Ciencias Naturales" => 9,
                "Geografía" => 3.1
            ],
            "Cristinini" => [
                "Matemáticas" => 7,
                "Lengua" => 6,
                "Ciencias Naturales" => 8,
                "Geografía" => 5
            ],
            "Paquirrín" => [
                "Matemáticas" => 10,
                "Lengua" => 8,
                "Ciencias Naturales" => 7,
                "Geografía" => 9
            ]
        ];
        $alumnoBuscado = "Cristinini";
    ?>

    <h3>Notas de todos los alumnos:</h3>

    <table border="0" cellpadding="8" cellspacing="0"
           style="border-collapse:collapse; text-align:center;">

        <tr style="background-color:#8064A2; color:black; font-weight:bold;">
            <th>Alumno</th>
            <th>Matemáticas</th>
            <th>Lengua</th>
            <th>Ciencias<br>Naturales</th>
            <th>Geografía</th>
            <th>Media</th>
        </tr>

        <?php
            $contador = 0;

            foreach ($alumnos as $nombre => $notas) {
                $media = (
                    $notas["Matemáticas"] +
                    $notas["Lengua"] +
                    $notas["Ciencias Naturales"] +
                    $notas["Geografía"]
                ) / 4;

                if ($contador % 2 == 0) {
                    $color = "#D9D9D9";
                } else {
                    $color = "white";
                }

                echo "<tr style='background-color:$color;'>";
                echo "<td style='background-color:#8064A2; color:white; font-weight:bold; text-align:left;'>$nombre</td>";
                echo "<td>" . $notas["Matemáticas"] . "</td>";
                echo "<td>" . $notas["Lengua"] . "</td>";
                echo "<td>" . $notas["Ciencias Naturales"] . "</td>";
                echo "<td>" . $notas["Geografía"] . "</td>";
                echo "<td>" . number_format($media, 3, ',', '') . "</td>";
                echo "</tr>";
                $contador++;
            }
        ?>

    </table>

    <h3>Notas del alumno seleccionado:</h3>

    <?php
        $notas = $alumnos[$alumnoBuscado];
        $media = (
            $notas["Matemáticas"] +
            $notas["Lengua"] +
            $notas["Ciencias Naturales"] +
            $notas["Geografía"]
        ) / 4;

        echo "<table border='0' cellpadding='8' cellspacing='0'
               style='border-collapse:collapse; text-align:center;'>";
        echo "<tr style='background-color:#8064A2; color:black; font-weight:bold;'>";
        echo "<th>Alumno</th>";
        echo "<th>Matemáticas</th>";
        echo "<th>Lengua</th>";
        echo "<th>Ciencias<br>Naturales</th>";
        echo "<th>Geografía</th>";
        echo "<th>Media</th>";
        echo "</tr>";

        echo "<tr>";

        echo "<td style='background-color:#8064A2; color:white; font-weight:bold; text-align:left;'>$alumnoBuscado</td>";
        echo "<td>" . $notas["Matemáticas"] . "</td>";
        echo "<td>" . $notas["Lengua"] . "</td>";
        echo "<td>" . $notas["Ciencias Naturales"] . "</td>";
        echo "<td>" . $notas["Geografía"] . "</td>";
        echo "<td>" . number_format($media, 3, ',', '') . "</td>";
        echo "</tr>";

        echo "</table>";
    ?>
</body>
</html>