<?php 

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

$registro = mysqli_fetch_assoc($resultado);

?>


<!DOCTYPE html>
<!--
    Autor: Roberto Rico Sandoval.
    Date: 22/ 08/ 2023
    Fille: Modificar empleado en la base de datos. 
-->
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar empleado</title>
    <link rel="stylesheet" type="text/css" href="./style/estilo.css"/>

</head>

<body id="cuerpo_principal">

    <div id="Encabezado">
        <header>Modificar datos.</header>
    </div>
    
    <form action = "modificar_empleado.php" method = "post" name = "nuevo_empleado" class="caja_formulario">

    Empleado nombre: <input type="text" name="empleado_nombre" value = "<?php echo $registro['nombre'] ?>" />
    <br/><br/>

    Empleado edad: <input type="number" name="empleado_edad" value = "<?php echo $registro['edad']?>" />
    <br/><br/>

    <input type="hidden" name="empleado_id" value = "<?php echo $registro['id']?>" />

    <input type="submit" name="actualizar_empleado" />
    
    </form>

    <footer>

        <img id="imagen_footer" src="./imagenes/FCS.png.crdownload"  alt="Logo da la fundación Carlos Slim."/>
        <p>Autor: Roberto Rico Sandoval.</p>
        <a href="https://www.linkedin.com/in/roberto-jaime-rico-sandoval-53aa50141/">Contacto</a>
    </footer>

</body>

</html>

