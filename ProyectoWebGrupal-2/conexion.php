<?php
    $host='localhost';
    $usuario='root';
    $password='';
    $base='empresa';
    $conn=mysqli_connect($host, $usuario, $password, $base);

    if(!$conn){
        echo 'Error de conexion';
    }
?>