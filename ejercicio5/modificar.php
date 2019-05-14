<?php

$conn = new mysqli('localhost','root','','base1');

function modifica($newName,$newMail, $newCod){
    $conn = new mysqli('localhost','root','','base1');
    $seleccionado=$_GET['seleccionado'];
    echo 'numero dentro de la funcion', $seleccionado;
    $sql_modificar ="UPDATE alumnos set nombre='$newName',
    mail = '$newMail', codCurso ='$newCod' where codAlum = '$seleccionado'";
    $result = mysqli_query($conn,$sql_modificar);
    echo $result;
}

if($conn->connect_error){
    echo 'ecurrio un error al tratar de conectar a la base de datos ' .$conn->connect_error;
    exit;
}else{
    echo 'conexion exitosa';

    $seleccionado=$_GET['seleccionado'];
    //echo $seleccionado;

    $sql_extrare = "select * from alumnos
    where codAlum = '$seleccionado'";

    $result = mysqli_query($conn,$sql_extrare);

    //while($fila = mysqli_fetch_array($result)){
    //echo $fila['nombre'];
    //echo $fila['mail'];
    //echo $fila['codCurso'];
    //  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1 align="center">MODIFICAR</h1>
<form method = "post" > 
<div>
<?php 
$result = mysqli_query($conn,$sql_extrare);
while($fila = mysqli_fetch_array($result)){?>
<p>Nombre del Alumno: <?php echo $fila['nombre']; ?></p>
<label>Nuevo nombre:</label>
<input type="text" name = "userNew" required= "required">
</div>
<div>
<p>Email del Alumno: <?php echo $fila['mail']; ?></p>
<label>Nuevo email:</label>
<input type="email" name = "emailNew" required= "required">
</div>
<div>
<p>Código del curso: <?php echo $fila['codCurso']; ?></p>
<label>Nuevo código de curso:</label>
<input type="int" name = "codigoNew" required= "required">
</div>
<?php } 
if($_POST){
    modifica(strtoupper($_POST['userNew']),$_POST['emailNew'],$_POST['codigoNew']);
}
?>
<button>Aceptar</button>
</form>
</body>
</html>