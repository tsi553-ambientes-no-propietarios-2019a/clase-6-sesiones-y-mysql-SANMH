<?php
session_start();
if ($_POST) {
    if (isset($_POST['usuario']) and isset($_POST['password'])) {
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['password'];
        $con = mysqli_connect("localhost", "root", "", "ejercicio3");

        if ($con) {
            $sql = "SELECT usuario, contraseña FROM usuarios WHERE usuario ='$usuario' and contraseña='$contraseña' ";
            $res = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
            $contar = mysqli_num_rows($res);
            if ($contar == 1) {
                $_SESSION['user'] = "$usuario";
                header('Location: inicio.php');
            } else {
                header('Location: ../index.php?usuario y contraseña no coinciden');
            }
        } else {
            header('Location: ../index.php?error al conectar con la base de datos');
        }
    }
} else {
    header('Locarion: ../index.php');
}
