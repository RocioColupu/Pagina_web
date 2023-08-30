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
</form>
    </div> 
    <h1>BASE DE DATOS</h1>
    <div class="container">
      <div class="row">
        <div class="col">
        <div class="col-12 col-md-12"> 
<form action="" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombres">Nombres</label>
      <input name="nombres" type="text" class="form-control" placeholder="Nombres">
    </div>
    <div class="form-group col-md-6">
      <label for="edad">Apellidos</label>
      <input name="apellidos" type="text" class="form-control" id="edad" placeholder="Apellidos">
    </div>
  </div>
<div class="form-row">  
    <div class="form-group col-md-6">
      <label for="profesion">Profesión</label>
      <input name="profesion" type="text" class="form-control" id="profesion" placeholder="Profesion">
    </div>

  <div class="form-group col-md-6">
    <label for="Estado">Estado</label>
    <select required name="estado" class="form-control" id="Estado">
    <option value=""><< >></option>
    <option value="Colombia">Colombia</option>
    <option value="Argentina">Argentina</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Peru">Peru</option>
    <option value="Brasil">Brasil</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Chile">Chile</option>
    </select>
  </div>

</div>
<div class="form-group">
  <button name="insertar" type="submit" class="btn btn-primary  btn-block">Guardar</button>
</div>
          <table class="table">
            <tr class="table-dark">
              <td>codigo</td>
              <td>Nombres</td>
              <td>Apellidos</td>
              <td>DNI</td>
              <td>Direccion</td>
              <td>Telefono</td>
              <td>deporte</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <?php
                $mysqli = new mysqli("localhost","root","","aedima");
                $resultado = $mysqli->query("SELECT * FROM usuarios");

                while($usuario = mysqli_fetch_array($resultado)){
              ?>
              <td><?php echo $usuario['Cod_usu']?></td>
              <td><?php echo $usuario['Nombres']?></td>
              <td><?php echo $usuario['Apellidos']?></td>
              <td><?php echo $usuario['DNI']?></td>
              <td><?php echo $usuario['Direccion']?></td>
              <td><?php echo $usuario['Telefono']?></td>
              <td><?php echo $usuario['nombre_deporte']?></td>
              <td><button>Eliminar</button></td>
              <td><button>Editar</button></td> 
            </tr>
            <?php
              }
            ?>
          </table>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" id="formInsertar" >nuevo registro</button>
            <button class="btn btn-primary">cancelar</button>
          </div>
        </div>
      </div>
    </div>



    <?php
if (isset($_POST['formInsertar'])){?>
    <div class="col-12 col-md-12"> 
<form action="" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombres">Nombres</label>
      <input name="nombres" type="text" class="form-control" placeholder="Nombres">
    </div>
    <div class="form-group col-md-6">
      <label for="edad">Apellidos</label>
      <input name="apellidos" type="text" class="form-control" id="edad" placeholder="Apellidos">
    </div>
  </div>
<div class="form-row">  
    <div class="form-group col-md-6">
      <label for="profesion">Profesión</label>
      <input name="profesion" type="text" class="form-control" id="profesion" placeholder="Profesion">
    </div>

  <div class="form-group col-md-6">
    <label for="Estado">Estado</label>
    <select required name="estado" class="form-control" id="Estado">
    <option value=""><< >></option>
    <option value="Colombia">Colombia</option>
    <option value="Argentina">Argentina</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Peru">Peru</option>
    <option value="Brasil">Brasil</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Chile">Chile</option>
    </select>
  </div>

</div>
<div class="form-group">
  <button name="insertar" type="submit" class="btn btn-primary  btn-block">Guardar</button>
</div>
</form>
    </div> 
<?php }  ?>
<!-- Fin Insertar Registros-->
  </body>
</html>