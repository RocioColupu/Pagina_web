<?php
    include("conexion.php");
    $id = $_REQUEST['Id'];

    $sql = "SELECT * FROM usuario WHERE ID = '$id'"; 
    $query = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_array($query);
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="bg-warning p-2 text-white text-center">Editar Usuario</h1>
    <br>
    <div class="container">
    <form action="Editar.php" method="POST"> 
        <input  type="Hidden" name="Id" value="<?php echo $fila['ID']?>">
      <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="<?php echo $fila['Nombre'];?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Apellido</label>
        <input type="text" class="form-control" placeholder="Apellido" name="apellido" value="<?php echo $fila['Apellido'];?>">
      </div>
      <div class="mb-3">
        <label class="form-label">DNI</label>
        <input type="text" class="form-control" placeholder="DNI" name="dni" value="<?php echo $fila['DNI'];?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Telefono</label>
        <input type="text" class="form-control" placeholder="Telefono" name="telefono" value="<?php echo $fila['Telefono'];?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Usuario</label>
        <input type="text" class="form-control" placeholder="Usuario" name="usuario" value="<?php echo $fila['User'];?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Contraseña</label>
        <input type="text" class="form-control" placeholder="Contraseña" name="contraseña" value="<?php echo $fila['Clave'];?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Fecha de Nacimiento</label>
        <input type="text" class="form-control" placeholder="Fecha de Nacimiento" name="fechanac" value="<?php echo $fila['FechaNac'];?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Distrito</label>
        <input type="text" class="form-control" placeholder="Distrito" name="distrito" value="<?php echo $fila['Distrito'];?>">
      </div>
      <div class="container text-center">
        <button type="submit" class="btn btn-primary">Editar ususario </button>
        <a href="Crud.php" class="btn btn-dark">Regresar</a>
      </div>
     
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>