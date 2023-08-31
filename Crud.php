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
    <h1 class="bg-warning p-2 text-black text-center">BASE DE DATOS</h1>
    <br>
    <div class="container">
      <a href="AgregarUsuario.php" class="btn btn-danger">Agregar usuario</a>
    </div>
    <br>
    <div class="container bg-light p-3 border border-dark rounded" >
        <h1>Lista de Usuarios</h1>
        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">DNI</th>
              <th scope="col">Telefono</th>
              <th scope="col">Usuario</th>
              <th scope="col">Contraseña</th>
              <th scope="col">Fecha de Nacimiento</th>
              <th scope="col">Distrito</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
              <?php
              include("conexion.php");

              $sql = "SELECT * FROM usuario";
              $query = mysqli_query($conexion,$sql);

              while($fila = mysqli_fetch_array($query)){
              ?>
                <tr>
                  <th scope="row"><?php echo $fila['ID'] ?></th>
                  <th scope="row"><?php echo $fila['Nombre'] ?></th>
                  <th scope="row"><?php echo $fila['Apellido'] ?></th>
                  <th scope="row"><?php echo $fila['DNI'] ?></th>
                  <th scope="row"><?php echo $fila['Telefono'] ?></th>
                  <th scope="row"><?php echo $fila['User'] ?></th>
                  <th scope="row"><?php echo $fila['Clave'] ?></th>
                  <th scope="row"><?php echo $fila['FechaNac'] ?></th>
                  <th scope="row"><?php echo $fila['Distrito'] ?></th>
                  <th>
                    <a href="Editardatos.php?Id=<?php echo $fila['ID'] ?>" class="btn btn-warning">Editar</a>
                  </th>
                  <th> <a href="" class="btn btn-danger">Eliminar</a></th>
                </tr>

              <?php
              }
              ?>
          </tbody>
        </table>
    </div>
  </body>
</html>