<?php 

/*** 
     * Autor: Roberto Rico Sandoval.
     * Date: 22/ 08/ 2023
     * Fille: Datos del nuevo empleado en la BD desde PHP.
***/

    // Adquirir los métodos de este archivo (Paquetes / Módulos).
    include("prueba_db.php");

    // Verificar quue no haya campos vacios.
    if(!empty($_POST['empleado_nombre']) && !empty($_POST['empleado_edad'])){
        
        // Conexión a la base de datos.
        $conexionbd = conectar_bd();

        // Consulta, para insertar datos en el campo nombre y el campo edad.
        $querry = "INSERT INTO empleado (nombre, edad) VALUES
            ('{$_POST['empleado_nombre']}', '{$_POST['empleado_edad']}')";

        // Comando para realizar una consulta sobre una conexión SQL.
        $exito = mysqli_query($conexionbd, $querry);

        // Verificar que la consulta sobre la conexión fue exitosa.
        if($exito){

            echo "LIsta de usuarios.";
            //header('Location: lista_empleados.php');
        }
        else{

            header('Location: nuevo_empleado.php');
        }
    }
    // Volver al formulario principal.
    else{

        header('Location:nuevo_empleado.php');
    }
?>

