﻿<?php

/**
* Crear una base de datos en PHPMyAdmin: Para crear una base de datos procedemos a seleccionar la pestaña "Base de datos" e ingresamos 
* como nombre "base1" y presionamos el botón crear.
* Crear una tabla llamada "alumnos" con 4 campos y la siguiente estructura:
*      codigo int auto_increment primary key
*      nombre varchar(50)
*      mail varchar(70)
*      codigocurso int
* Utilizar un formulario para añadir alumnos a la BDD. El formulario debe tener como acción "nuevo.php".
* En la página "lista.php" presentar una tabla con todos los alumnos de la BDD. Al final de cada fila añadir un campo que contenga un link
* que redirija a la página "modificar.php"
* En la página "modificar.php" presentar el formulario que permita modificar la información del alumno seleccionado.
*
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario alumnos</title>
</head>
<body>
<h1 align ="center">Registro de alumnos</h1>
<form action="nuevo.php" method = "post">
<div>
    <label>Nombre: </label>
    <input type="text" name ="nombreAlum" required="required">
</div>
<div>
    <label>Email: </label>
    <input type="email" name="email" required="required">
</div>
<div>
    <label>Código curso: </label>
    <input type="text" name = "codCurso" required="required">
</div>
<button>Registrar alumno</button>
</form>    
</body>
</html>