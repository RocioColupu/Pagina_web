<?php
include("conexion.php");

$Id = $_REQUEST['Id'];
$sql = "DELETE FROM usuario WHERE ID = '$Id'";
$query = mysqli_query($conexion,$sql);
echo "<div class='content alert alert-primary'>";
if($query){
    header('location:Crud.php');
}
?> 
