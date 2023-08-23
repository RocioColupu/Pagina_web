<?php
    // Excepciones
    try {
        $usuario="root";
        $contraseña="";
        // Conexion        
        $mbd = new PDO('mysql:host=localhost;dbname=Aedima', $usuario, $contraseña);        
        // En caso de presentar error
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>