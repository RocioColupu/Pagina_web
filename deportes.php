<?php
INCLUDE ("conexion.php")
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aedima</title>
    <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <style>
        body {
            margin: 0;
            background-color: #D9D9D9;
        }

        img{
            max-width: 100%;
        }

        .toggle-menu{
            position: absolute;
            top: 4px;
            right: 1.5rem;
            width: 60px;
        }

        .main-menu_link{
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            background-color: #769ABB;
            border-radius: 10px;
        }

        .main-menu_link:hover{
            color: black;
            padding: 5px 10px;
            text-decoration: none;
            background-color: white;
            border-radius: 10px;
        }

        .main-menu{
            list-style: none;
            margin-top: 0;
            margin-bottom: 0;
            padding-left: 0;
            
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #389B95;
        }

        @media screen and (min-width: 768px) {
            .main-menu {
                flex-direction: row;
            }
        }

        .main-menu_item{
            padding: 1em;
        }

        .cards-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh; 
        }

        .card {
            width: 18rem;
            margin: 0 20px; 
        }
    </style>
    <nav class="main-nav">
        <div id="toggle-menu" class="toggle-menu">
            <img src="image/logo.png">
        </div>
        <ul id="main-menu" class="main-menu">
        <li class="main-menu_item">
                <a href="http://localhost/Pagina_web/deportes.php" class="main-menu_link">DEPORTES</a>
            </li>
            <li class="main-menu_item">
                <a href="http://localhost/Pagina_web/indumentaria.php" class="main-menu_link">INDUMENTARIA</a>
            </li>
            <li class="main-menu_item">
                <a href="http://localhost/Pagina_web/profesores.php" class="main-menu_link">PROFESORES</a>
            </li>
            <li class="main-menu_item">
                <a href="http://localhost/Pagina_web/instalaciones.php" class="main-menu_link">INSTALACIONES</a>
            </li>
        </ul>
    </nav>
    <div class="cards-container">
        <div class="card" style="width: 18rem;">
            <img src="image/futbol.png" class="card-img-top" alt="futbol">
                <div class="card-body">
                    <h5 class="card-title">FUTBOL</h5>
                    <p class="card-text">En nuestra academia podras demostrar tus habilidades con el balon y pertenecer al mas grande equipo de futbol de lima.</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">INSCRIBIRSE</button>
                </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="image/basket.png" class="card-img-top" alt="basket">
                <div class="card-body">
                    <h5 class="card-title">BASKET</h5>
                    <p class="card-text">En nuestra academia podras demostrar tus habilidades con el balon y pertenecer al mas grande equipo de basket de lima.</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">INSCRIBIRSE</button>
                </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="image/voley.png" class="card-img-top" alt="voley">
                <div class="card-body">
                    <h5 class="card-title">VOLEY</h5>
                    <p class="card-text">En nuestra academia podras demostrar tus habilidades con el balon y pertenecer al mas grande equipo de voley de lima.</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">INSCRIBIRSE</button>
                </div>
        </div>
    </div>
<!-- Modal -->
<form action = "solicitud.php" method = "POST" >
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">SOLICITUD DE INSCRIPCION</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="idSolicitud" id="idSolicitud" placeholder="digita id de solicitud">
            <label for="IdSolicitud">ID SOLICITUD</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nombreUser" id="nombreUser" placeholder="digita id de usuario">
            <label for="nombreUser">NOMBRE</label>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" name="Deporte" id="Deporte" aria-label="Floating label select example">
                <option selected>selecciona un deporte</option>
                <option value="futbol">futbol</option>
                <option value="basket">basket</option>
                <option value="voley">voley</option>
            </select>
            <label for="Deporte">DEPORTES</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="Telefono" id="Telefono" placeholder="digita numero de telefono">
            <label for="Telefono">TELEFONO</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="DNI" id="DNI" placeholder="digita el dni">
            <label for="DNI">DNI</label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
        <button type="submit" class="btn btn-primary">INSCRIBIRSE</button>
      </div>
    </div>
  </div>
</div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>
