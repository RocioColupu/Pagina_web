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
    </style>
    <nav class="main-nav">
        <div id="toggle-menu" class="toggle-menu">
            <img src="image/logo.png">
        </div>
        <ul id="main-menu" class="main-menu">
            <li class="main-menu_item">
                <a href="#" class="main-menu_link">DEPORTES</a>
            </li>
            <li class="main-menu_item">
                <a href="#" class="main-menu_link">INDUMENTARIA</a>
            </li>
            <li class="main-menu_item">
                <a href="#" class="main-menu_link">PROFESORES</a>
            </li>
            <li class="main-menu_item">
                <a href="#" class="main-menu_link">INSTALACIONES</a>
            </li>
        </ul>
    </nav>
  </body>
</html>
