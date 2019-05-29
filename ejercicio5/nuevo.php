<?php

$conn = new mysqli('localhost','root','','base1');

if($conn->connect_error){
    echo 'Error de conexión'.$conn->connect_error;
    exit;
}//else{
    //echo 'conexion exitosa';
    //echo $_POST['nombreAlum'];
    //echo $_POST['email'];
    //echo $_POST['codCurso'];
//}

if($_POST){
    
    if(!empty($_POST['nombreAlum']) && !empty($_POST['email']) && !empty($_POST['codCurso']) && 
    isset($_POST['nombreAlum']) && isset($_POST['email']) && isset($_POST['codCurso'])){

        $nombre = strtoupper($_POST['nombreAlum']);
        $emails = $_POST['email'];
        $codCurso = $_POST['codCurso'];

        $sql_insert = " INSERT INTO alumnos 
        (nombre, mail, codCurso)
        VALUES ('$nombre', '$emails', '$codCurso')";

        //echo $sql_insert;
        $conn->query($sql_insert);

        if ($conn->error) {
            echo 'Error en tipo de datos(Datos no admitidos)' .$conn->error;
            exit;
        }else{
            echo 'REGISTRO EXITOSO';
            include ('lista.php');
        }
    }else {
        //header('Location: ../registration.php?error_message=Ingrese todos los datos!');
        echo 'Ingrese datos para el registro';
		exit;
	}
}

?>