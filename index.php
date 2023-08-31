<?php
session_start();


?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aedima</title>
  <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <!-- FORMULARIO DE INICIO DE SESION -->
  <form action="validar.php" method="POST" >
    <div class="col-4 m-5 justify-content-center">
      <div class="login">
        <div class="image">
          <a href="admin.php">
          <img src="image/iconprincipal.png"> 
          </a>
          
        </div>
        <div>
          <H1>LOGIN</H1>
        </div>
      </div>
      <div class="input-group mb-4">
        <span class="input-group-text"><i class="bi bi-person"></i></span>
        <div class="form-floating">
          <input type="text" name="usuario" class="form-control" id="floatingInputGroup1" placeholder="Usuario">
          <label for="usuario">Usuario: </label>
        </div>
      </div>

      <div class="input-group mb-4">
        <span class="input-group-text">#</span>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="floatingInputGroup1" placeholder="">
          <label for="password">Password: </label>
        </div>
      </div>
      <div class="botones">
        <button type="submit" class="btn btn-primary btn-lg"> Iniciar sesion </button>
        <button type="button" class="btn btn-secondary btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Registrarse</button>

      </div>

    </div>
  </form>

  <!-- MODAL DE REGISTRO -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">  
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">REGISTRARSE</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="regSolicitud.php" method="POST">
            <div class="justify-content-center">
              <div class="login">
                <img src="image/iconprincipal.png">
              </div>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGroup1" placeholder="" name="Nombre">
                <label for="floatingInputGroup1">Nombres:</label>
              </div>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGroup1" placeholder="" name="Apellido">
                <label for="floatingInputGroup1">Apellidos:</label>
              </div>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="bi bi-file-person"></i></i></span>
              <div class="form-floating">
                <input type="number" class="form-control" id="floatingInputGroup1" placeholder="" name="dni">
                <label for="floatingInputGroup1">DNI:</label>
              </div>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="bi bi-phone"></i></i></i></span>
              <div class="form-floating">
                <input type="numeric" class="form-control" id="floatingInputGroup1" placeholder="" name="Telefono">
                <label for="floatingInputGroup1">Telefono:</label>
              </div>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="bi bi-person-bounding-box"></i></i></i></i></span>
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGroup1" placeholder="" name="User">
                <label for="floatingInputGroup1">User:</label>
              </div>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="bi bi-hash"></i></i></i></i></span>
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGroup1" placeholder="" name="Clave">
                <label for="floatingInputGroup1">Clave:</label>
              </div>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="bi bi-calendar3"></i></i></i></i></span>
              <div class="form-floating">
                <input type="date" class="form-control" id="floatingInputGroup1" placeholder="" name="Fechanac">
                <label for="floatingInputGroup1">Fecha de Nacimiento:</label>
              </div>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="bi bi-geo-alt"></i></i></i></i></span>
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGroup1" placeholder="" name="Distrito">
                <label for="floatingInputGroup1">Distrito:</label>
              </div>
            </div>



            <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Registrarse </button>
            </div>
        </div>
        </form>
      </div>

    </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>


</html>