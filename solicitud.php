<?php
$idSolicitud = $_POST['idSolicitud'];
$nombreUser = $_POST['nombreUser'];
$Deporte = $_POST['Deporte'];
$Telefono = $_POST['Telefono'];
$DNI = $_POST['DNI'];

INCLUDE ("conexion.php");

$insertar = "INSERT INTO solicitud (idSolicitud,nombreUser,Deporte,Telefono,DNI) 
             VALUES ('$idSolicitud','$nombreUser','$Deporte','$Telefono','$DNI')";

if ($conexion -> query($insertar) == true) {
    header('Location:profesores.php');
}else{
    echo "no se guardo la informacion";
}

?>