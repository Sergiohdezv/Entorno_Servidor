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
        echo "Ejercicio 4 de PHP tema 5";
    ?>
    </h2>
    
    <?php
        // 4) Crear una función que reciba un array asociativo con:
        // nombre, apellidos, nota1, nota2, nota3.
        // Debe mostrar un boletín con la nota final (media).

        function boletinNotas($alumno) {

            $media = ($alumno["nota1"] + $alumno["nota2"] + $alumno["nota3"]) / 3;

            echo "<h3>Boletín de notas</h3>";

            echo "<table border='1' cellpadding='8' cellspacing='0'
                  style='border-collapse:collapse; text-align:center;'>";

            echo "<tr style='background-color:#D9D9D9;'>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Nota 1</th>
                    <th>Nota 2</th>
                    <th>Nota 3</th>
                    <th>Nota final</th>
                  </tr>";

            echo "<tr>";
            echo "<td>" . $alumno["nombre"] . "</td>";
            echo "<td>" . $alumno["apellidos"] . "</td>";
            echo "<td>" . $alumno["nota1"] . "</td>";
            echo "<td>" . $alumno["nota2"] . "</td>";
            echo "<td>" . $alumno["nota3"] . "</td>";
            echo "<td style='font-weight:bold;'>" . round($media, 2) . "</td>";
            echo "</tr>";

            echo "</table>";
        }

        $alumno = array(
            "nombre" => "Paco",
            "apellidos" => "Peláez Yamal",
            "nota1" => 7,
            "nota2" => 8,
            "nota3" => 9
        );

        boletinNotas($alumno);
    ?>
</body>
</html>
