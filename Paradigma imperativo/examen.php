<!DOCTYPE html>
<!-- 
    Autor: Roberto Rico Sandoval.
    Fille: Examen en PHP - Back End.
    Date: 21/ 07/ 2023
-->

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen PHP</title>

</head>

<body>

    <?php 
    
    // Vector de 100 posiciones.
    $vector = [100];

    // Colecciones de datos de números impares y pares.
    $pares = [51];
    $impares = [51];

    $itera;
    $j;

        // Operación aritmética para encontrar números pares e impares.
        for ($itera = 0; $itera <= 100; $itera++){

            $vector[$itera] = $itera;
            
            if ($vector[$itera] % 2 == 0){

                echo "El número " . $vector[$itera] . " es par.<br>";
                $pares[$itera] = $itera;
            }
            else{

                echo "El número " . $vector[$itera] . " es impar.<br>";
                $impares[$itera] = $itera;
            }
        }

        //Mostrar colección de datos pares.
        for ($j = 0; $j <= count($vector); $j++){

            echo $pares[$j] . "<br>";
        }
    ?>

</body>

</html>

