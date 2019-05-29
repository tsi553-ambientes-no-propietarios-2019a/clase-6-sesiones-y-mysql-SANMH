<?php
include('../common/utils.php');
$user = $_POST['nombre'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Incio</title>
</head>
<body>
    <h1>Inicio</h1>
    <div>
    <?php echo 'Bienvenido Usuario' .strtoupper($_POST['nombre']);?>
    <p>Los datos ingresados son:</p>
    </div>
    <label> <b>Usuario: </b><?php echo $user; ?></label>
    <div>
    <label><b>Password: </b><?php echo MD5($_POST['password'])?> </label>
    </div>
    <div>
    <a href="home.php">LOGOUT</a>
    </div>
</body>
</html>