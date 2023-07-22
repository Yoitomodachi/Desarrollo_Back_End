<!DOCTYPE html>
<!-- 
    Autor: Roberto Rico Sandoval.
    Fille: Tercer ejemplo formal de PHP - Back End.
    Date: 21/ 07/ 2023
-->

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 3</title>

</head>

<body>

    <?php 

    // Declaración e inicialización de una variable.
    $edad = 25;

    // Declaración y limitacion de una lista, array, o vector simple.
    $edades = [4];

    // Integración de valores en el vector.
    $edades [0] = $edad;
    $edades [1] = 22;
    $edades [2] = 62;
    $edades [3] = 14;

    /*NOTA: PHP acepta multivalor en sus vectores (Múltiples tipos de datos distintos que, no estrictamente
    tienen que ser de un mismo tipo de dato.)*/

    // Estructuras condicionales simples en PHP.

        if($edades[0] >= 18){

            echo "La persona 1 es mayor de edad.<br>";
        }
        // Estructuras condicionales múltiple en PHP.
        else if ($edades[0] <= 15){

            echo "La persona 1 es menor o igual a una edad de 15 años.<br>";
        }
        else{
            echo "La persona 1 es menor de edad.<br>";
        }


        if($edades[1] >= 18){

            echo "La persona 2 es mayor de edad.<br>";
        }
        // Estructuras condicionales múltiple en PHP.
        else if ($edades[1] <= 15){

            echo "La persona 1 es menor o igual a una edad de 15 años.<br>";
        }
        else{
            echo "La persona 2 es menor de edad.<br>";
        }


        if($edades[2] >= 18){

            echo "La persona 3 es mayor de edad.<br>";
        }
        // Estructuras condicionales múltiple en PHP.
        else if ($edades[2] <= 15){

            echo "La persona 1 es menor o igual a una edad de 15 años.<br>";
        }
        else{
            echo "La persona 3 es menor de edad.<br>";
        }


        if($edades[3] >= 18){

            echo "La persona 4 es mayor de edad.<br>";
        }
        // Estructuras condicionales múltiple en PHP.
        else if ($edades[3] <= 15){

            echo "La persona 1 es menor o igual a una edad de 15 años.<br>";
        }
        else{
            echo "La persona 4 es menor de edad.<br>";
        }
        
    ?>

</body>

</html>

