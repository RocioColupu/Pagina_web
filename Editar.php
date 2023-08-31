<?php
include("conexion.php");

$Id = $_POST['Id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono']; 
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$fechanac = $_POST['fechanac'];
$distrito = $_POST['distrito'];

$sql = "UPDATE usuario SET Nombre='$nombre', Apellido='$apellido',DNI='$dni',Telefono='$telefono',User='$usuario',clave='$contraseña',FechaNac='$fechanac',Distrito='$distrito' WHERE ID='$Id'";

$query = mysqli_query($conexion,$sql); 

if($query===TRUE){
    header("Location:Crud.php");
}


?>