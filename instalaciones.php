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

        .carousel-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh; 
        }

        .carousel-item{
            margin-top: 100px;
            width: 800px; 
            height: auto; 
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
    <div class="carousel-container">
        <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="image/cancha-futbol.png" class="d-block w-100" alt="cancha de futbol">
        </div>
        <div class="carousel-item">
        <img src="image/cancha-basket.png" class="d-block w-100" alt="cancha de basket">
        </div>
        <div class="carousel-item">
        <img src="image/cancha-voley.png" class="d-block w-100" alt="cancha de voley">
        </div>
        </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
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
