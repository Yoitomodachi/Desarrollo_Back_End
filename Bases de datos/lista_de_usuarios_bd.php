<?php 
/*** 
     * Autor: Roberto Rico Sandoval.
     * Date: 26/ 08/ 2023
     * Fille: Lista de usuarios en la base de datos.
***/

// Inculir el paquete de prueba_db.php
include('prueba_db.php');

//Conectar a la base de datos con este archivo.
$conexion = conectar_bd();

// Seleccionar la columna id, nombre y edad de la tabla empleado.
$querry = "SELECT id, nombre, edad FROM empleado";

// Realizar una consulta a la base de datos con el método mysqli_query(conexión a la bd, tipo de querry o petición).
$resultado = mysqli_query($conexion, $querry);

// Cerrar la conexión con la base de datos.
mysqli_close($conexion);

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de empleados</title>
    <link rel="stylesheet" type="text/css" href="./style/estilo.css"/>

</head>

<body id="cuerpo_principal">

    <!-- Visualizar los registros de la base de datos. -->
    <h1>Lista de empleados.</h1>

    <ul class="caja_formulario">

        <?php 

            while($registro = mysqli_fetch_assoc($resultado)){

                echo '<li>' . $registro['nombre'] . ' ('.$registro['edad']. ' años)';

                // Ir al archivo modificar_empleado.php en caso de hacer clic en modificar.
                echo '<a href="modificar_empleado.php?empleadoid = '. $registro['id'].'"> Modificar</a><li>';

                // Ir al archivo eliminar_empleado.php en caso de hacer clic en eliminar.
                echo '<a href="eliminar_empleado.php?empleadoid = '. $registro['id'].'"> Eliminar</a></li>';
                echo "<br/>";
            }
        ?>

    </ul>

    <footer>

        <img id="imagen_footer" src="./imagenes/FCS.png.crdownload"  alt="Logo da la fundación Carlos Slim."/>
        <p>Autor: Roberto Rico Sandoval.</p>
        <a href="https://www.linkedin.com/in/roberto-jaime-rico-sandoval-53aa50141/">Contacto</a>
    </footer>

</body> 

</html>

