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

        .cards-container {
            margin-top: 30px;
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
        <div class="salir">
            <button type="button" class="btn btn-danger">Cerrar Sesion</button>
        </div>
    </nav>
    <div class="cards-container">
        <div class="card" style="width: 18rem;">
            <img src="image/profesor-futbol.png" class="card-img-top" alt="profesor de futbol">
            <div class="card-body">
                <p class="card-text">Cuto guadalupe nuestro reconocido ex jugador de la seleccion peruana de futbol te guiara a potenciar tus habilidades y llevar a nuestro equipo a la victoria.</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="image/profesor-basket.png" class="card-img-top" alt="profesor de basket">
            <div class="card-body">
                <p class="card-text">Michale jordan reconocido ex jugador de la nba y varias veces campeon te guiara para potenciar tus habilidades y llevar a nuestro equipo a la victoria.</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="image/profesor-voley.png" class="card-img-top" alt="profesora de voley">
            <div class="card-body">
                <p class="card-text">Natalia malaga nuestra reconocido ex entrenadora de la seleccion  de voley te guiara para potenciar tus habilidades y llevar a nuestro equipo a la victoria.</p>
            </div>
        </div>
    </div>
  </body>
</html>
