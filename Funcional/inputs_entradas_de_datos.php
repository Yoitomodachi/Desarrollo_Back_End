<!DOCTYPE html>
<!--
    Autor: Roberto Rico Sandoval.
    Fille: Netiquetas de entrada de datos. 
    Date: 31/ 07/ 2023
-->
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entradas de datos Input</title>

</head>

<body>
    <h1>Entrada de datos Input.</h1>

    <!-- Se selecciona el método get para enviar información. -->
    <form method="get" action="receptionGet.php">

        <!-- Input simple de tipo texto. -->
        <b>Usuario:</b> <input type="text" name="name" /></br></br>

        <!-- Input complejo de tipo contraseña / password. -->
        <b>contraseña:</b> <input type="password" name="pwd" /></br></br>

        <!-- Input complejo de tipo casillas de verificación. -->
        <!-- Elección múltiple. -->
        <b>Peliculas:</b> 
                   <Input type="checkbox" name="op1" value="openhaimmer"/> OpenHaimmer.
                   <Input type="checkbox" name="op2" value="barbie"/> Barbie.
                   <input type="checkbox" name="op3" value="bluebeattle"/> Blue Beattle.

        <!-- Input complejo de tipo rádio / círculo. -->
        <!-- Elección única. -->
        <br/><br/>
        <b>Género: </b>
        <input type="radio" name="h" value="hombre"/> Hombre.
        <input type="radio" name="m" value="mujer"/> Mujer.
        <input type="radio" name="otro" value="otro"/> Otro.
        
        <!-- Bóton complejo para adjuntar archivos. -->
        <br/><br/>
        <input type="file" name="archivos" value="adjuntararchivo" /> Adjuntar archivo.

        <!-- Bóton complejo para enviar o subir datos a un serividor. -->
        </br></br><input type="submit" name="Enviar" />

    </form>

</body>

</html>

