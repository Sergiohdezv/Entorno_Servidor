<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP Tema 5</title>
</head>
<body>

<?php
echo "<h2>Ejercicio 1 de PHP tema 5</h2>";

function boletin($nombre, $notas) {

    echo "<table border='3' cellpadding='8' cellspacing='0'
          style='border-collapse:collapse; text-align:center; border-color:green;'>";

    echo "<tr style='color:black; font-weight:bold;'>";
    echo "<th>Alumno</th>";
    echo "<th>" . $nombre . "</th>";
    echo "</tr>";

    foreach ($notas as $asignatura => $calificacion) {
        echo "<tr>";
        echo "<td>" . $asignatura . "</td>";
        echo "<td>" . $calificacion . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}

$nombre = "Juan Ramírez";

$notas = array(
    "Matemáticas" => "Sobresaliente",
    "Lengua" => "Notable",
    "Historia" => "Notable",
    "Dibujo" => "Insuficiente"
);

boletin($nombre, $notas);
?>

</body>
</html>
