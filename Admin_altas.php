<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Alcaldia Milpa Alta</title>
    <!-- MDB icon -->
    <link rel="stylesheet" href="./css/style._admin.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="./css/style_estaditicas.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style_altas.css">
    <!-- Material Design Bootstrap -->

    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="./fontawesome-free-5.13.0-web/css/all.css">
    <script src="./js/graficas_pdf.js"></script>
    <script src="./jsPDF-1.3.2/dist/jspdf.min.js"></script>

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
                        <a class="nav-link" href="./Admin_peticiones.html">Peticiones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Admin_estadisticas.html">Estadisticas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Admin_usuarios.html">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="./Admin_altas.html">Altas</a>
                    </li>
                    <!-- dropdown usuario -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">

                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-default"
                            aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="login.html">Cerrar sesión</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--navbar-->




    <!--Inicio_formulario -->
    <div class="formbox container">
        <div class="card mt-5">
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col">
                            <h1 class="display-4 mt-4 text-center text-success ">Crear Usuario</h1>
                            <input type="text" name="usuario" id="usuario" class="form-control mt-4"
                                placeholder="Usuario">
                            <input type="mail" name="email" id="email_alta" class="form-control mt-4"
                                placeholder="Email">
                            <input type="password" name="password" id="password" class="form-control mt-4"
                                placeholder="Password">
                            <select name="rol" id="rol" class="form-control mt-4">
                                <option value="">Rol1</option>
                                <option value="">Rol2</option>
                                <option value="">Rol3</option>
                                <option value="">Rol4</option>
                                <option value="">Rol5</option>
                            </select>
                            <input type="submit" value="Registrar" class="btn btn-outline-success mt-4" >
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
    <!--Fin_formulario-->











    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->



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