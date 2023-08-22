<!DOCTYPE html>
<!-- 
    Autor: Roberto Rico Sandoval.
    Fille: Página para realizar división.
    Date: 08 / 08/ 2023
-->

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "./style.css" />
    <title>División</title>

</head>

<body>

    <?php 

        // Recoger datos insertados.
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        // Invocar o llamar a la función.
        $resultado = Division($num1, $num2);

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
    ?>

</body>

</html>

