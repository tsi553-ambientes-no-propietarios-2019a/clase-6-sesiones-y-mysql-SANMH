<?php
session_start();
if(isset($_SESSION['user'])){
    echo"<center>";
    $nombre=$_SESSION['user'];
    echo "Hola $nombre";
    echo"</center>";
    echo'<a href="salir.php">SAlIR</a>';
}else{
    header('Location: ../index.php');
}
