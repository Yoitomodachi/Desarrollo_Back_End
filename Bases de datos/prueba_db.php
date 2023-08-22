<?php
/** 
 * Autor: Roberto Rico Sandoval.
 * Fille: Prueba de la base de datos.
 * Date: 21/ 08/ 2023
**/

function conectar_bd(){

    // IP del servidor que almacena la base de datos.
    $servidor = "localhost";

    // Nombre de la base de datos a operar.
    $nombrebd = "empresa";

    // usuario del administrador de la base de datos.
    $usuario = "root";

    // Contraseña del administrador de la base de datos.
    $contraseña = "";

    /** Función que genera la conexión fisica y virtual con la base de datos 
    * con criterios(IP del servidor, Usuario A, contraseña A, tabla a conectar) **/
    $conexion = mysqli_connect($servidor, $usuario, $contraseña, $nombrebd);

    // Verificar que la BD este operativa y lo conexión se haya logrado.
    if(!$conexion){

        die("No se pudo conectar a la base de datos.");

    }else{

        echo "Conexion exitosa";
    }

    // Retornar el valor de los datos de la conexión a la base de datos.
    return $conexion;

    // Cerrar la sesión de la BD.
    mysqli_close($conexion);

}

?> 

