<!DOCTYPE html>
<!--
    Autor: Roberto Rico Sandoval.
    Date: 22/ 08/ 2023
    Fille: Metadatos de un nuevo empleado 
-->
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo empleado</title>
    <link rel="stylesheet" type="text/css" href="./style/estilo.css"/>

</head>

<body id="cuerpo_principal">

    <div id="Encabezado">
        <header>Agregar Nuevo Empleado.</header>
    </div>
    
    <div class="caja_formulario">

        <form action = "agregar_empleado.php" method = "post" class="caja_formulario">

        Empleado nombre: <input type="text" name="empleado_nombre" /><br/><br/>
        Empleado edad: <input type="number" name="empleado_edad" /><br/><br/>
        <input type="submit" name="agregar_empleado" value="Agregar empleado" />
        
        </form>

    </div>

    <footer>

        <img id="imagen_footer" src="./imagenes/FCS.png.crdownload"  alt="Logo da la fundación Carlos Slim."/>
        <p>Autor: Roberto Rico Sandoval.</p>
        <a href="https://www.linkedin.com/in/roberto-jaime-rico-sandoval-53aa50141/">Contacto</a>
    </footer>

</body>

</html>

