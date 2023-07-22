<!-- 
    Autor: Roberto Rico Sandoval.
    Fille: Archivo principal PHP/HTML
    Date: 18/ 07/ 2023
-->

<?php

    // Declaración de funciones predefinidas.
    //phpinfo();

    // Definición de variables en PHP $
    $variable1 = 10;
    $variable2 = 3;

    $variable3 = " Suma ";

    $variable4 = $variable1 + $variable2;
    $resultado = strval($variable4);

    // Impresión de resultado [echo].
    /*
        NOTA: Las nuevas versiones de PHP, no aceptan el signo de suma + concatenaciones o líneas de impresión
        EL signo reservado a hora es un punto entre datos [.].
    */
    print ("La" . $variable3 . "es: " . $resultado); 

?>

