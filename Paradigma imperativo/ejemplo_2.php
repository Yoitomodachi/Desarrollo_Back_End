<!DOCTYPE html>
<!-- 
    Autor: Roberto Rico Sandoval.
    Fille: Segundo ejemplo formal de PHP - Back End.
    Date: 21/ 07/ 2023
-->

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 2</title>

</head>

<body>

    <?php

        // Declaración e inicialización de una variable.
        $edad = 25;

        // Declaración y limitacion de una lista, array, o vector simple.
        $edades = [3];

        // Integración de valores en el vector.
        $edades [0] = $edad;
        $edades [1] = 22;
        $edades [2] = 62;

        /*NOTA: PHP acepta multivalor en sus vectores (Múltiples tipos de datos distintos que, no estrictamente
        tienen que ser de un mismo tipo de dato.)*/

        echo "Tu edad es: " . $edad . "<br>";
        echo "<br>La edad 1 es: " . $edades [0];
        echo "<br>La edad 2 es: " . $edades [1];
        echo "<br>La edad 3 es: " . $edades [2];
    ?>

</body>

</html>

