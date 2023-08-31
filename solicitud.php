<?php
$idSolicitud = $_POST['idSolicitud'];
$nombreUser = $_POST['nombreUser'];
$Deporte = $_POST['Deporte'];
$Telefono = $_POST['Telefono'];
$DNI = $_POST['DNI'];

INCLUDE ("conexion.php");

$insertar = "INSERT INTO solicitud (idSolicitud,nombreUser,Deporte,Telefono,DNI) 
             VALUES ('$idSolicitud','$nombreUser','$Deporte','$Telefono','$DNI')";
            
$verificar_dni = mysqli_query($conexion,"SELECT * FROM usuario WHERE DNI='$dni'");
if(mysqli_num_rows($verificar_dni)>0){
    echo'
    <script>
    alert("Este DNI ya esta registrado");
    window.location = "index.php"
    </script>
    ';
    exit();
}

if ($conexion -> query($insertar) == true) {
    header('Location:profesores.php');
}else{
    echo "no se guardo la informacion";
}

?>