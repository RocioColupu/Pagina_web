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
    <form action="Crud.php" method="POST" >
        <div class="col-4 m-5 justify-content-center">
            <div class="login">
                <div class="image">
                    <img src="image/iconprincipal.png">
                </div>
                <div>
                    <H1>LOGIN ADMINISTRACION</H1>
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
                <button type="submit" class="btn btn-primary btn-lg" name=""> Iniciar sesion </button>
            </div>

        </div>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>


</html>