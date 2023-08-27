<?php 

/*** 
     * Autor: Roberto Rico Sandoval.
     * Date: 22/ 08/ 2023
     * Fille: Eliminar usuario de una base de datos.
***/

    // Adquirir los métodos de este archivo (Paquetes / Módulos).
    include("prueba_db.php");

    // Verificar quue no haya campos vacios.
    if(!empty($_GET['empleado_id'])){
        
        // Conexión a la base de datos.
        $conexionbd = conectar_bd();

        // Consulta, para insertar datos en el campo nombre y el campo edad.
        $querry = "DELETE FROM empleado WHERE id=". $_GET['empleado_id'];

        // Comando para realizar una consulta sobre una conexión SQL.
        $exito = mysqli_query($conexionbd, $querry);

        // Verificar que la consulta sobre la conexión fue exitosa.
        if($exito){

            header('Location: lista_de_usuarios_bd.php');
        }
        else{

            header('Location: lista_de_usuarios_bd.php');
        }
    }
    // Volver al formulario principal.
    else{

        header('Location:lista_de_usuarios_bd.php');
    }
?>

