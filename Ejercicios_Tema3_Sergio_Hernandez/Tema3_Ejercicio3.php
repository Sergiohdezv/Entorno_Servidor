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
        echo "Ejercicio 3 de PHP tema 3";
    ?>
    </h2>

    <?php
        // 3) Crear un documento PHP que cree un array asociativo con al menos 7 posiciones.
        // El array contendrá claves con nombres de alumnos y valores entre 0 y 10.
        // Mostrar después una tabla con las notas reales obtenidas por los alumnos:
        // 0 – 4 = Suspenso, 5 = Aprobado, 6 = Bien,
        // 7 – 8 = Notable, 9 = Sobresaliente, 10 = Matrícula de honor.

        $notas = [
            "Rafa" => 7,
            "Antonio" => 10,
            "Paco" => 4,
            "Pepe" => 6,
            "Pablo" => 9,
            "María" => 5,
            "Javier" => 8
        ];

    ?>

    <table border="1" cellpadding="8" cellspacing="0" style="border-collapse: collapse;">
        <tr bgcolor="#555555" style="color:white;" align="center">
            <th>Alumno</th>
            <th>Nota numérica</th>
            <th>Nota cualitativa</th>
        </tr>

    <?php

        foreach ($notas as $alumno => $nota) {
            if ($nota <= 4) {
                $notaReal = "Suspenso";
            } elseif ($nota == 5) {
                $notaReal = "Aprobado";
            } elseif ($nota == 6) {
                $notaReal = "Bien";
            } elseif ($nota == 7 || $nota == 8) {
                $notaReal = "Notable";
            } elseif ($nota == 9) {
                $notaReal = "Sobresaliente";
            } else {
                $notaReal = "Matrícula de honor";
            }

            echo "<tr align='center' style='background-color:#eeeeee; color:black;'>";

            echo "<td>$alumno</td>";
            echo "<td>$nota</td>";
            echo "<td>$notaReal</td>";

            echo "</tr>";
        }

    ?>

    </table>

</body>
</html>