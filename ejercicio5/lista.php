<?php

$conn = new mysqli('localhost','root','','base1');

if($conn->connect_error){
    echo 'Error en conexión a la base de datos' .$conn->connect_error;
    exit;
}else{
    echo 'Conexión Exitosa con la base';

    $sql_extrare = "select * from alumnos
    ";
    $result = mysqli_query($conn,$sql_extrare);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1 align="center">Alumnos</h1>
<form method ="post">
<div>
<table>
<tr>
<th>Nombre:</th>
<th>Correo electrónico:</th>
<th>Código:</th>
<th>Modifcar</th>
</tr>

<tr>
<?php 
$cod = 0;
while($fila = mysqli_fetch_array($result)){
    $cod = $cod+1;?>
<tr>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['mail']; ?></td>
<td><?php echo $fila['codCurso']; ?></td>
<td><?php echo "<a href='modificar.php?seleccionado=$cod'>Modificar Estudiante </a>";?> </td>

<?php  } ?>
</tr>
</tr>
</table>
</div>
</form>
</body>
</html>