<?php
include("conexion.php");

$Id = $_REQUEST['Id'];
$sql = "DELETE FROM solicitud WHERE idSolicitud = '$Id'";
$query = mysqli_query($conexion,$sql);
if($query){ 
    header('location:Crud-Solicitud.php');
}
?>