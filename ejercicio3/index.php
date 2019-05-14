<?php
/*
Basados en el ejemplo 2:
a) Controlar que solo inicie sesión si se han escrito el usuario y contraseña en los campos. 
b) Validar el usuario y contraseña contra una lista de usuarios y contraseñas almacenados en un array o 
una base de datos (tabla usuarios).
c) Crear un formulario que le permita registrar un usuario con los siguientes datos: 
     - nombre
     - apellidos
     - usuario
     - clave
     - repetir clave
     - género: masculino, femenino (radio)
     - correo electrónico
     - fecha de nacimiento
     - ciudad de nacimiento (lista de ciudades)
     - intereses: programación, redes, ensamblaje, SOA, BI, análisis de texto, big data, redes sociales
        (checkbox)
     - una breve biografía
d) El formulario anterior debe ser enviado a través de un botón submit mediante POST 
y debe guardar la información en la base de datos (tabla usuarios) y presentar una página con 
toda la información ingresada en el formulario, esta página debe incluir un link que permita volver 
a ingresar los datos y un link que permita cerrar la sesión y volver al index.
*/
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div>
        <center>
            <font color="green">
                <h2>Bienvenido</h2>
            </font>
            <div>
                <div class="wrapper fadeInDown">
                    <div id="formContent">

                        <form method="POST" action="PHP/login.php">
                            <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="usuario" required>
                            <input type="password" id="password" class="fadeIn third" name="password" placeholder="contraseña" required>
                            <br><br>
                            <input type="submit" class="fadeIn fourth" value="Entrar">
                        </form>

                    </div>
                </div>
            </div>
        </center>
    </div>
</body>

</html>