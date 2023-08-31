<?php
include("conexion.php");

session_start();
if (!isset($_SESSION['usuario'])) {
    echo '
    <script>
        alert("Debes iniciar session");
        window.location = "index.php";
    </script>
    ';
    session_destroy();
    die();
}

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
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            background-color: #D9D9D9;
        }

        img {
            max-width: 100%;
        }

        nav {
            height: 120px;
            background-color: #389B95;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
        }

        .toggle-menu {
            left: left;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80px;
            height: 120px;
        }

        .main-menu {
            list-style: none;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            height: 80px;
            font-size: 20px;
            width: 50%;
            padding-top: 25px;
            padding-bottom: 25px;
        }

        .main-menu_item{
            text-align: center;
            height: 20px;
            width: 25%;
            justify-content: center;
        }

        .salir {
            right: right;
        }

        .main-menu_link {
            color: white;
            text-decoration: none; 
        }

        .main-menu_link:hover {
            color: black;
            text-decoration: none;
            padding: 20px 10px;
            border-radius: 15px;
            background-color: #5ba39f;
        }

        @media screen and (min-width: 768px) {
            .main-menu {
                flex-direction: row;
            }
        }

        .main-menu_item{
            padding: 1em;
        }

        .carousel-item{
            margin-top: 100px;
            width: 500px; 
            height: auto; 
        }

        .carousel-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh; 
        }

        .carousel-caption{
            color: black;
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
        <div class="salir">
            <button type="button" class="btn btn-danger">Cerrar Sesion</button>
        </div>
    </nav>
    <div class="carousel-container">
    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/zapatillas-futbol.png" class="d-block w-100" alt="zapatillas de futbol">
      <div class="carousel-caption d-none d-md-block">
        <h5>zapatillas de futbol</h5>
        <p>comodidad confort y seguridad al patear el balon y anotar goles.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/zapatillas-basket.png" class="d-block w-100" alt="zapatillas de basket">
      <div class="carousel-caption d-none d-md-block">
        <h5>zapatillas de basket</h5>
        <p>comodidad confort y seguridad al pisar y anotar canastas.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/zapatillas-voley.png" class="d-block w-100" alt="zapatillas de voley">
      <div class="carousel-caption d-none d-md-block">
        <h5>zapatillas de voley</h5>
        <p>comodidad confort y seguridad al pisar y rematar con fuerza y precision.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>
