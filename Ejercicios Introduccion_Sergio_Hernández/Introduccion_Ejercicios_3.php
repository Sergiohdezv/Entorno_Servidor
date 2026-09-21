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
        echo "Ejercicio 3 de introducción a PHP";
    ?>
    </h2>
    
    <?php
        // Codificar una página en PHP que cree un array posicional el cual llevará los
        // siguientes valores:
        // Posición 0: X
        // Posición 1: Y
        // Posición 2: Z
        // Posición 3: X+Y
        // Posición 4: Y*Z
        // Posición 5: X/Z
        // Posición 6: X+Y+Z
        // Posición 7: (Y+Z) / X
        // Tenemos que declarar y dar valor a las variables X,Y,Z Todos los valores
        // deben estar almacenados en las posiciones del array.
        // Una vez creado, mostrarlo en una tabla igual a la mostrada, respetando tanto
        // contenido como formato.
        // Podéis añadir más operaciones si queréis.

        $X = 6;
        $Y = 7;
        $Z = 9;

        $matriz[0] =$X;
        $matriz[1] =$Y;
        $matriz[2] =$Z;
        $matriz[3] =$X+$Y;
        $matriz[4] =$Y*$Z;
        $matriz[5] =$X/$Z;
        $matriz[6] =$X+$Y+$Z;
        $matriz[7] =($Y+$Z)/$X;
    ?>
        <TABLE BORDER="1" CELLPADDING='2' CELLSPACING="2">
            <TR ALIGN="center">
                <TD BGCOLOR="purple" style="color:white;">Posición 0: </TD>
                <TD BGCOLOR="#d6b4ff"> <?php echo $matriz[0] ?> </TD>
            </TR>
            <TR ALIGN="center">
                <TD BGCOLOR="purple" style="color:white;">Posición 1: </TD>
                <TD BGCOLOR="#d6b4ff"> <?php echo $matriz[1] ?> </TD>
            </TR>
            <TR ALIGN="center">
                <TD BGCOLOR="purple" style="color:white;">Posición 2: </TD>
                <TD BGCOLOR="#d6b4ff"> <?php echo $matriz[2] ?> </TD>
            </TR>
            <TR ALIGN="center">
                <TD BGCOLOR="purple" style="color:white;">Posición 3: </TD>
                <TD BGCOLOR="#d6b4ff"> <?php echo $matriz[3] ?> </TD>
            </TR>
            <TR ALIGN="center">
                <TD BGCOLOR="purple" style="color:white;">Posición 4: </TD>
                <TD BGCOLOR="#d6b4ff"> <?php echo $matriz[4] ?> </TD>
            </TR>
            <TR ALIGN="center">
                <TD BGCOLOR="purple" style="color:white;">Posición 5: </TD>
                <TD BGCOLOR="#d6b4ff"> <?php echo $matriz[5] ?> </TD>
            </TR>
            <TR ALIGN="center">
                <TD BGCOLOR="purple" style="color:white;">Posición 6: </TD>
                <TD BGCOLOR="#d6b4ff"> <?php echo $matriz[6] ?> </TD>
            </TR>
            <TR ALIGN="center">
                <TD BGCOLOR="purple" style="color:white;">Posición 7: </TD>
                <TD BGCOLOR="#d6b4ff"> <?php echo $matriz[7] ?> </TD>
            </TR>
        </TABLE>
</body>
</html>