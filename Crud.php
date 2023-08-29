<?php
include("conexion.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Mostrar datos</title>
  </head>
  <body>
    <table class="table">
        <tr>
            <td>codigo</td>
            <td>Nombres</td>
            <td>Apellidos</td>
            <td>DNI</td>
            <td>Direccion</td>
            <td>Telefono</td>
            <td>deporte</td>
        </tr>
        
        <?php
            $sql='SELECT * FROM usuarios';
            $result=mysqli_query($bd,$sql);

            while($mostrar=mysqli_fetch_array($result)){
        ?>

        <tr>
            <td><?php echo $mostrar['Cod_usu']  ?></td>
            <td><?php echo $mostrar['Nombres']  ?></td>
            <td><?php echo $mostrar['Apellidos']  ?></td>
            <td><?php echo $mostrar['DNI']  ?></td>
            <td><?php echo $mostrar['Direccion']  ?></td>
            <td><?php echo $mostrar['Telefono']  ?></td>
            <td><?php echo $mostrar['id_deportes']  ?></td>

        </tr>
    <?php
    }
    ?>
    </table>
  </body>
</html>