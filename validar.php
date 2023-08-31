<?php
session_start();

include ('conexion.php');

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$validar_user = mysqli_query($conexion, "SELECT * FROM usuario WHERE User='$usuario' and Clave='$password'");

if(mysqli_num_rows($validar_user) > 0){
    $_SESSION['usuario']= $usuario;
    header("Location: deportes.php");
    exit;
} else{
    echo '
    <script>
        alert("Credenciales Incorrectas");
        window.location = "index.php"
    </script>
    ';
    exit;
}

?>
