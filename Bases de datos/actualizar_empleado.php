<?php 

/*** 
     * Autor: Roberto Rico Sandoval.
     * Date: 28/ 08/ 2023
     * Fille: Actualizar datos del empleado en la base de datos.
***/

    // Adquirir los métodos de este archivo (Paquetes / Módulos).
    include("prueba_db.php");

    // Verificar quue no haya campos vacios.
    if(!empty($_POST['empleado_nombre']) && !empty($_POST['empleado_edad']) && !empty($_POST['empleado_id'])){
        
        // Conexión a la base de datos.
        $conexionbd = conectar_bd();

        // Consulta, para insertar datos en el campo nombre y el campo edad.
        $querry = "UPDATE empleado SET nombre='".$_POST['empleado_nombre']."',edad='".$_POST['empleado_edad']."'
        WHERE id=".$_POST['empleado_id'];

        // Comando para realizar una consulta sobre una conexión SQL.
        $exito = mysqli_query($conexionbd, $querry);

        // Verificar que la consulta sobre la conexión fue exitosa.
        if($exito){

            header('Location: lista_de_usuarios_bd.php');
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

