<?php
 require_once('conexion.php');
 
 $user = $_POST ['usuario'];
 $password = $_POST ['password'];


 $sql = "SELECT * FROM Usuario WHERE User = $user AND password = $password";
    $stmt = $bd->prepare($sql);

 

    // Ejecutar la consulta preparada
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION['username'] = $user['username'];
        header("Location: deportes.php"); // Redirigir al panel de control
    } else {
        echo "Credenciales inválidas.";
    }


?>








?>
