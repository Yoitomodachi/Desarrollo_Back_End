<!DOCTYPE html>
<!-- 
    Autor: Roberto Rico Sandoval.
    Fille: Quinto ejemplo formal de PHP - Back End.
    Date: 21/ 07/ 2023
-->

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 5</title>

</head>

<body>

    <?php

    // Declaración e inicialización de una variable.
    $edad = 25;
    $i = 0;

    // Declaración y limitacion de una lista, array, o vector simple.
    $edades = [4];

    // Integración de valores en el vector.
    $edades [0] = $edad;
    $edades [1] = 22;
    $edades [2] = 62;
    $edades [3] = 14;

    /*NOTA: PHP acepta multivalor en sus vectores (Múltiples tipos de datos distintos que, no estrictamente
    tienen que ser de un mismo tipo de dato.)*/

    // Estructura de control Do while.
        do {

            if($edades[$i] >= 18){

                echo "La persona ";
                echo $i + 1;
                echo " Puede ser registrado.<br>";
            }
            
            // Estructuras condicionales múltiple en PHP.
            else if ($edades[$i] <= 15){
    
                echo "La persona ";
                echo $i + 1;
                echo " Puede recibir correos.<br>";
            }
            else{
                echo "La persona ";
                echo $i + 1;
                echo " No puede recibir correos.<br>";
            }
            break;

        }while ($i <= 3)

    ?>

</body>

</html>

