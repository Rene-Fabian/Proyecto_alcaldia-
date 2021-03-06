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
                        <a class="nav-link  text-white " href="./Admin_estadisticas.html">Estadisticas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Admin_usuarios.html">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Admin_altas.html">Altas</a>
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

    <!-- filtros -->
    <div class="estructura container">
        <form action="" method="post" class="form">
            <div class="row">
                <div class="col-md-3">
                    <label for="inputArea" class="">Area:</label>
                    <select id="inputArea" class="form-control">
                        <option selected>DIRECCIÓN GENERAL DE OBRAS Y DESARROLLO URBANO</option>
                        <option selected>DIRECCIÓN GENERAL DE SERVICIOS URBANOS</option>
                        <option>DIRECCIÓN GENERAL DE CONSTRUCCIÓN DE CIUDADANIA</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="input_tipo_peticione">Tipo de petición</label>
                    <select id="input_tipo_peticione" class="form-control">
                        <!-- obras -->
                        <option elected>Tope</option>
                        <option>Bacheo</option>
                        <option>Pavimentación</option>
                        <option>Desazolve de fosa séptica</option>
                        <option>Banquetas</option>
                        <!-- servicios urbanos -->
                        <option>Desazolve de canales</option>
                        <option>Pipa de agua</option>
                        <option>Poda de árbol</option>
                        <option>Limpieza de barranca</option>
                        <option>Luminarias</option>
                        <!-- construcción de la ciudadania -->
                        <option>Becas escolares</option>
                        <option>Alimentate bien</option>
                        <option>Atención y organización vecinales</option>
                        <option>Solicitud de recorrido y audencias con el alcalde y/o funcionarios</option>
                        <option>Atencion a jovenes</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="fecha_inicio">Fecha Inicial</label>
                    <input type="date" name="" id="fecha_inicio" class="form-control">
                </div>
                <div class="col-md-2">
                    <label for="fecha_final">Fecha Final</label>
                    <input type="date" name="" id="fecha_inicio" class="form-control">
                </div>
                <div class="col-md-2">
                    <label for="consultar"></label>
                    <input type="button" value="consultar" class="btn btn-outline-success btn-block">
                </div>

            </div>
        </form>
    </div>




    <div id="content">
        <!-- graficas -->
        <div class="graficaspdf container" id="reportPage">
            <div class="row">
                <div class="col-md-6">
                    <canvas id="labelChart" class="bg-white"></canvas>
                </div>
                <div class="col-md-6">
                    <canvas id="barChart" class="bg-white"></canvas>
                </div>
            </div>
        </div>
        <!-- graficas -->
        <br><br>

    </div>
    <div id="elementH"></div>


    <div class="descargar_pdf container">
        <button type="button" class="btn btn-outline-danger " value="Descargar PDF" onclick="getPDFgraficos();">
            Descargar Graficos
        </button>
    </div>





    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript" src="./js/grafica_pastel.js"></script>

    <script type="text/javascript" src="./js/grafica_barras.js"></script>


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