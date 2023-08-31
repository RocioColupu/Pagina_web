<?php
include("conexion.php");

$Id = $_POST['Id'];
$nombre_user = $_POST['nombre'];
$deporte = $_POST['deporte'];
$telefono = $_POST['telefono'];
$dni = $_POST['dni'];

$sql = "UPDATE solicitud SET nombreUser='$nombre_user', Deporte='$deporte',Telefono='$telefono',DNI='$dni' WHERE idSolicitud='$Id'";
 
$query = mysqli_query($conexion,$sql); 

if($query===TRUE){
    header("Location:Crud-Solicitud.php");
}


?>