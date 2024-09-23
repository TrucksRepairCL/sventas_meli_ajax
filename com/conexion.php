<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "sisventas";


$conexion = mysqli_connect($host, $user, $password, $database);
if (!$conexion) {
    echo "No se realizo la conexion a la basa de datos, el error fue:" .
        mysqli_connect_error();
}




// http://192.168.0.146:8080/sventas_meli/sventas_filtros/pag/almacen.php