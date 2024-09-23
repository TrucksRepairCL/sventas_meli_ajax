<?php 
	require_once("conexion.php");              
	$conexion=mysqli_connect($host,$user,$password,$database);
	$op=$_POST['operacion'];

	switch($op) {
		case 1: // Update
			$sql=$_POST['sql'];
			echo mysqli_query($conexion,$sql);
			break;
		case 2:
			$sql=$_POST['sql'];
			echo mysqli_query($conexion,$sql);
		break;
	}

?>
