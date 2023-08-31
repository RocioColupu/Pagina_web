<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña']; 
$fechanac = $_POST['fechanac'];
$distrito = $_POST['distrito'];

$sql = "INSERT INTO usuario(Nombre,Apellido,DNI,Telefono,User,Clave,FechaNac,Distrito) VALUES('$nombre','$apellido','$dni','$telefono','$usuario','$contraseña','$fechanac','$distrito')";

$query = mysqli_query($conexion,$sql); 

if($query===TRUE){
    header("Location:Crud.php");
}


?>