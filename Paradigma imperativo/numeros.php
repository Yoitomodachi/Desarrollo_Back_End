<!DOCTYPE html>
<!-- 
    Autor: Roberto Rico Sandoval.
    Fille: Operaciones numéricas en PHP - Back End.
    Date: 21/ 07/ 2023
-->

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones con números.</title>

</head>

<body>

    <?php 
    
    /* MULTIPLICACIÓN DE NÚMEROS ALEATORIOS. */
    $aleatorio = rand(1, 100);
    $random = $aleatorio;

    $itera;
    $j;

        for ($itera = 1; $itera <=10; $itera++){

            echo $random . " x " . $itera . " = " . $random * $itera . "<br>";
        }
    
    echo "<br>";
    /* NÚMEROS IMPARES */
        
        for ($j = 1; $j<=10; $j++){

            if ($j % 2 == 0){

                echo "El número " . $j . " es par.<br>";
            }
            else{
                echo "El número " . $j . " es impar.<br>";
            }
        }
    ?>

</body>

</html>

