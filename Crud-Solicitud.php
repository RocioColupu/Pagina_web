<?php
include("conexion.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Mostrar datos</title>
  </head>
  <body>
    <h1 class="bg-warning p-2 text-white text-center">BASE DE DATOS</h1>
    <br>
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="Crud.php">Lista de Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Crud-Solicitud.php">Solicitudes</a>
      </li>
    </ul>
    <br>
    <!-- <div class="container">
      <a href="AgregarUsuario.php" class="btn btn-danger">Agregar usuario</a>
    </div> -->
    <br>
    <div class="container" >
        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th scope="col">ID-Solicitud</th>
              <th scope="col">Nombre-Usuario</th>
              <th scope="col">Deporte</th>
              <th scope="col">Telefono</th>
              <th scope="col">DNI</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
              <?php
              include("conexion.php");

              $sql = "SELECT * FROM solicitud";
              $query = mysqli_query($conexion,$sql);

              while($fila = mysqli_fetch_array($query)){
              ?>
                <tr>
                  <th scope="row"><?php echo $fila['idSolicitud'] ?></th>
                  <th scope="row"><?php echo $fila['nombreUser'] ?></th>
                  <th scope="row"><?php echo $fila['Deporte'] ?></th>
                  <th scope="row"><?php echo $fila['Telefono'] ?></th>
                  <th scope="row"><?php echo $fila['DNI'] ?></th>
                  <th>
                    <a href="Editar-Solicitud.php?Id=<?php echo $fila['idSolicitud'] ?>" class="btn btn-warning">Editar</a>
                  </th>
                  <th> <a href="Eliminar-Solicitud.php?Id=<?php echo $fila['idSolicitud'] ?>" class="btn btn-danger">Eliminar</a></th>
                </tr>

              <?php
              }
              ?>
          </tbody>
        </table>
    </div>
  </body>
</html>