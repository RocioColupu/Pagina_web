<?php
include("conexion.php");

$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['Telefono'];
$usuario = $_POST['User'];
$clave = $_POST['Clave'];
$fechanac = $_POST['Fechanac'];
$distrito = $_POST['Distrito'];
//Encriptar la clave
$clave_encriptada = hash('sha512', $clave);

$sql = "INSERT INTO Usuario (Nombre,Apellido,DNI,Telefono,User,Clave,FechaNac,Distrito)
VALUES('$nombre','$apellido','$dni','$telefono','$usuario','$clave','$fechanac','$distrito')";


//Validacion de duplicados en Base de datos 

$verificar_dni = mysqli_query($conexion,"SELECT * FROM usuario WHERE DNI='$dni'");
if(mysqli_num_rows($verificar_dni)>0){
    echo '
    <script>
    alert("Este usuario ya esta registrado");
    window.location = "index.php"
    </script>
    ';
    exit();
}

// verificar usuario 
$verificar_User = mysqli_query($conexion,"SELECT * FROM usuario WHERE User='$usuario'"); 
if(mysqli_num_rows($verificar_dni)>0){
    echo '
    <script>
    alert("Este usuario ya esta registrado");
    window.location = "index.php"
    </script>
    ';
    exit();
}



$query = mysqli_query($conexion,$sql); 

if($query===TRUE){

    echo '
    <script>
        alert("Usuario registrado exitosamente. Por favor Inicia Sesion");
        window.location = "index.php"
    </script>
    ';
}

mysqli_close($conexion); 
?>

