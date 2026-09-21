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
        echo "Ejercicio 4 de introducción a PHP";
    ?>
    </h2>
    
    <?php
        //Crear un documento PHP en el que se cree un array asociativo para contener
        // los datos de una mascota: nombre de la mascota, familia, raza, color, peso,
        // altura y edad. Rellenar dicho array con los valores de una mascota y
        // mostrarlo en una tabla.

        $matriz['nombre'] ="La niña mala";
        $matriz['familia'] ="Ajolote";
        $matriz['raza'] ="Albino";
        $matriz['color'] ="Naranja";
        $matriz['peso'] ="67 kg";
        $matriz['altura'] ="0,37 m";
        $matriz['edad'] ="45 años";
    ?>
        <TABLE BORDER="1" CELLPADDING='2' CELLSPACING="2">
            <TR ALIGN="center" BGCOLOR="orange">
                <TD></TD>
                <TD>NOMBRE</TD> <TD>FAMILIA</TD> <TD>RAZA</TD> <TD>COLOR</TD> <TD>PESO</TD> <TD>ALTURA</TD> <TD>EDAD</TD>
            </TR>

            <TR ALIGN="center">
                <TD BGCOLOR="orange">Mascotilla</TD>
                <TD> <?php echo $matriz["nombre"] ?> </TD>
                <TD> <?php echo $matriz["familia"] ?> </TD>
                <TD> <?php echo $matriz["raza"] ?> </TD>
                <TD> <?php echo $matriz["color"] ?> </TD>
                <TD> <?php echo $matriz["peso"] ?> </TD>
                <TD> <?php echo $matriz["altura"] ?> </TD>
                <TD> <?php echo $matriz["edad"] ?> </TD>
            </TR>
        </TABLE></CENTER>
</body>
</html>