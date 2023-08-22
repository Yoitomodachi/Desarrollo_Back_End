<!DOCTYPE html>
<!-- 
    Autor: Roberto Rico Sandoval.
    Fille: Página para realizar resta.
    Date: 08 / 08/ 2023
-->

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "./style.css" />
    <title>Restas</title>

</head>

<body>

    <?php 

        // Recoger datos insertados.
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        // Invocar o llamar a la función.
        $resultado = Resta($num1, $num2);

        // Resta.
        function Resta($ope1, $ope2){

            $resultado = ($ope1 - $ope2);
            echo "<h2> Valores evaluados: Número 1 = " . $ope1 . ", Número 2 = " . $ope2 . "</h2>";
            echo "<h1> Resta: " . $resultado . "</h1>";
        }
    ?>

</body>

</html>

