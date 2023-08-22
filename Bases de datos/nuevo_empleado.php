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

</head>

<body>
    
    <form action = "agregar_empleado.php" method = "post">

    Empleado nombre: <input type="text" name="empleado_nombre" /><br/><br/>
    Empleado edad: <input type="number" name="empleado_edad" /><br/><br/>
    <input type="submit" name="agregar_empleado" value="Agregar empleado" />
    
    </form>
</body>

</html>

