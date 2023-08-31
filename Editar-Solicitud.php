<?php
    include("conexion.php");
    $id = $_REQUEST['Id']; 

    $sql = "SELECT * FROM solicitud WHERE idSolicitud = '$id'";
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
    <h1 class="bg-warning p-2 text-white text-center">Editar Solicitud</h1>
    <br>
    <div class="container">
    <form action="EditarSolicitud.php" method="POST"> 
        <input  type="Hidden" name="Id" value="<?php echo $fila['idSolicitud']?>">
      <!-- <div class="mb-3">
        <label class="form-label">ID-Solicitud</label>
        <input type="text" class="form-control" placeholder="Nombre" name="id" value="<?php echo $fila['idSolicitud'];?>">
      </div> -->
      <div class="mb-3">
        <label class="form-label">Nombre-Usuario</label>
        <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="<?php echo $fila['nombreUser'];?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Deporte</label>
        <input type="text" class="form-control" placeholder="Deporte" name="deporte" value="<?php echo $fila['Deporte'];?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Telefono</label>
        <input type="text" class="form-control" placeholder="Telefono" name="telefono" value="<?php echo $fila['Telefono'];?>">
      </div>
      <div class="mb-3">
        <label class="form-label">DNI</label>
        <input type="text" class="form-control" placeholder="DNI" name="dni" value="<?php echo $fila['DNI'];?>">
      </div>
      <div class="container text-center">
        <button type="submit" class="btn btn-primary">Editar ususario </button>
        <a href="Crud-Solicitud.php" class="btn btn-dark">Regresar</a>
      </div>
     
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>