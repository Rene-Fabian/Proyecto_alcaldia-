<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style_login.css">
    <link href="./fontawesome-free-5.13.0-web/css/all.css" rel="stylesheet">
    <title>Alcaldía Milpa Alta</title>
</head>

<body>

    <!--navbar-->
    <header class="header sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light sticky-top">
            <a class="navbar-brand" href="#">
                <img class="logoalcaldia" src="./img/Logo_MA.svg" class="logoalcaldia d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
                <ul class="nav navbar-nav navbar-right">
                    <!-- alineacion del navbar -->
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./tramites.php">Tramites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./funcionarios.php">Funcionarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./solicitudes.php">Solicitudes</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-success" id="navbarDropdownMenuLink" aria-haspopup="true"
                            aria-expanded="false" href="./login.php">
                            <i class="fas fa-user"></i>
                        </a>

                    </li>
                    <!-- dropdown usuario -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-default"
                            aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./login.html">Iniciar sesión</a>
                        </div>
                    </li> -->
                </ul>
            </div>
        </nav>
    </header>
    <!--navbar-->




    <div class="cuerpo container">
        <form action="php/validacion_login.php" method="post" class="needs-validation text-center border " novalidate>
            <h2 class="text-center">Iniciar sesión</h2>
            <div class="form-group">
                <br>
                <input type="text" class="form-control" id="uname" placeholder="Usuario" name="uname" required>
                <div class="valid-feedback">Contenido Valido.</div>
                <div class="invalid-feedback">Por favor llenar campo.</div>
            </div>
            <div class="form-group">

                <input type="password" class="form-control" id="pwd" placeholder="Contraseña" name="pswd" required>
                <div class="valid-feedback">Contenido Valido.</div>
                <div class="invalid-feedback">Por favor llenar campo.</div>
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember" required> Recordar contraseña
                    <div class="valid-feedback">Valido.</div>
                    <div class="invalid-feedback">Selecciona la casilla para continuar.</div>
                </label>

            </div>
            <div> <a href="" id="recuperar" data-toggle="modal" data-target="#exampleModal">Olvidate tu
                    contreseña?</a></div>



            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Recupera tu contreseña</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="text-center">introduce tu correo electronico</p>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Ejemplo@.com">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger">Recuperar</button>

                            <div class="alert alert-success" role="alert">
                                A simple success alert—check it out!
                              </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- <p>Siguenos</p> -->
            <div class="mt-3">
                <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                <a href="#" class="mx-2" role="button"><i class="fab fa-instagram light-blue-text"></i></a></div>

            <button type="submit" class="btn btn-primary mt-3">Entrar</button>
        </form>
        <script src="./js/validar_campos_login.js"></script>
    </div>













    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>