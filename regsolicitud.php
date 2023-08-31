<?php

$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['Telefono'];
$user = $_POST['User'];
$clave = $_POST['Clave'];
$fechanac = $_POST['Fechanac'];
$distrito = $_POST['Distrito'];

$query = "INSERT INTO usuario (Nombre, Apellido, DNI, Telefono, User, Clave, FechaNac, Distrito)"
?>