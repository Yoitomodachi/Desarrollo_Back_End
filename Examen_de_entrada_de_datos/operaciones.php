<!DOCTYPE html>
<!-- 
    Autor: Roberto Rico Sandoval.
    Fille: Página principal de la calculadora.
    Date: 08 / 08/ 2023
-->

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "./style.css" />
    <title>Operaciones</title>

</head>

<body>

    <?php 

        // Recoger datos insertados.
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $selection = $_POST["select"];
        
        // Suma.
        function Suma($ope1, $ope2){

            $resultado = ($ope1 + $ope2);
            echo "<h2> Valores evaluados: Número 1 = " . $ope1 . ", Número 2 = " . $ope2 . "</h2>";
            echo "<h1> Suma: " . $resultado . "</h1>";
        }

        // Resta.
        function Resta($ope1, $ope2){

            $resultado = ($ope1 - $ope2);
            echo "<h2> Valores evaluados: Número 1 = " . $ope1 . ", Número 2 = " . $ope2 . "</h2>";
            echo "<h1> Resta: " . $resultado . "</h1>";
        }

        // Multiplicación.
        function Multi($ope1, $ope2){

            $resultado = ($ope1 * $ope2);
            echo "<h2> Valores evaluados: Número 1 = " . $ope1 . ", Número 2 = " . $ope2 . "</h2>";
            echo "<h1> Multiplicación: " . $resultado . "</h1>";
        }

        // DIvisión.
        function Division($ope1, $ope2){

            if($ope1 == 0 && $ope2 == 0){

                echo "<h1>No es posible dividir 0 entre 0.</h1>";
            }
            else{

                $resultado = ($ope1 / $ope2);

                echo "<h2> Valores evaluados: Número 1 = " . $ope1 . ", Número 2 = " . $ope2 . "</h2>";
                echo "<h1> División: " . $resultado . "</h1>";
            }
            
        }

        // Controlador de eventos.
        if ($selection == 1){

            Suma($num1, $num2);
        }
        elseif ($selection == 2){

            Resta($num1, $num2);
        }
        elseif ($selection == 3){

            Multi($num1, $num2);
        }
        elseif ($selection == 4){

            Division($num1, $num2);
        }

    ?>

</body>

</html>

