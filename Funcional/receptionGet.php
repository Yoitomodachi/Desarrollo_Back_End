<!DOCTYPE html>
<!--
    Autor: Roberto Rico Sandoval.
    Fille: Archivo operativo de comunicaciones (Controlador). 
    Date: 31/ 07/ 2023
-->
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepción de datos</title>

</head>

<body>

    <?php

        $usuario  = $_GET['name'];
        $password = $_GET['pwd'];

        // Llamado de la función.
        $resultado = verificacion($usuario, $password);

        if ($resultado){

            echo "<h1>Bienvenido.</h1>";
        }
        else{

            echo "<h1>Datos incorrectos.</h1>";
            echo $resultado.$usuario;
            echo "<br/><br/>" . $resultado.$password;
        }

        /***
        
        // Confirmar datos.
        echo "Nombre: " . $usuario . "<br/>";
        echo "Password: " . $password . "<br/>";

        ***/
        
        // Declaración de una función.
        function verificacion($user, $contra){

            if($user == "Roberto Sandoval" && $contra == "123456"){

                return true;
            }
            else{

                return false;
            }
        }
    ?>

</body>

</html>

