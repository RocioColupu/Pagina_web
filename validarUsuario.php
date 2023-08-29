<?php

include ("conexion.php");

if(isset($_POST['usuario']) && isset($_POST['password']) ) {
	
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$usuario = validate($_POST['usuario']);
	$clave = validate($_POST['password']);

	if (empty($usuario)){
		header("Location : index.php?error~ El usuario es requerido");

	}elseif (empty($clave)){
		header("Location : index.php?error~ El password es requerido");
		exit();
	}else{
		// $password = md5($password);

		$sql="SELECT * FROM Usuarios WHERE Telefono = '$usuario' AND DNI='$password' ";
		$result = mysqli_query($conexion , $sql);

	}
}
