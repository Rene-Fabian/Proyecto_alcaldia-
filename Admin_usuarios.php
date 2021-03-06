<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />
    <title>Alcaldía Milpa Alta</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado -->


    <link rel="stylesheet" href="./css/style._admin.css">
    <link rel="stylesheet" href="./css/style_peticiones.css">

    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css" />
    <!--datables estilo bootstrap 4 CSS-->
    <link rel="stylesheet" type="text/css"
        href="assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                        <a class="nav-link text-white" href="./Admin_usuarios.html">Usuarios</a>
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

    <header>
        <h3 class='text-center'></h3>

    </header>

    <!-- <div class="titulo"><h5 style="font-size:2.500vw;" class="text-center">Peticiones recibidas</h5></div> -->
    <!-- <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <button id="btnNuevo" type="button" class="btn btn-info" data-toggle="modal"><i
                        class="material-icons">library_add</i></button>
            </div>
        </div>
    </div> -->
    <br>






    <div class="content" id="content">
        <!-- el contenido HTML va aqui -->
        <div class="container-fluid  caja ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive" id="caja">
                        <table id="tablaRegistros" class="table table-striped table-bordered table-condensed"
                            style="width:100%">
                            <thead class="text-center">
                                <tr>
                                    <th>id</th>
                                    <th>Usuario</th>
                                    <th>Correo</th>
                                    <th>Rol</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead head>
                            <tbody>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="elementH"></div>



    <!--Modal para CRUD-->
    <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formUsuarios">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">A. paterno</label>
                                    <input type="text" class="form-control" id="paterno">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">A. Materno</label>
                                    <input type="text" class="form-control" id="materno">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Correo Electrónico</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Telefono</label>
                                    <input type="text" class="form-control" id="telefono">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Sexo</label>
                                    <select id="sexo" class="form-control">
                                        <option selected>Sexo</option>
                                        <option>Masculino</option>
                                        <option>Femenino</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Calle</label>
                                    <input type="text" class="form-control" id="calle">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">N° Interior</label>
                                    <input type="text" class="form-control" id="interior">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">N° Exterior</label>
                                    <input type="text" class="form-control" id="exterior">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Código Postal</label>
                                    <input type="text" class="form-control" id="cp">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Colonia</label>
                                    <input type="text" class="form-control" id="colonia">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Pueblo</label>
                                    <input type="text" class="form-control" id="pueblo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select id="tipo_solicitud" class="form-control">
                                        <option selected>Tipo de solicitud</option>
                                        <option>pendiente</option>
                                        <option>pendiente</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                        <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="imprimir container">
        <button type="submit" class="imprimirpdf btn btn-info" onclick="getPDFtablas();">Imprimir</button>
    </div>
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="assets/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="./jsPDF-1.3.2/dist/jspdf.min.js"></script>
    <script src="./js/tablas_pdf.js"></script>
    <!-- datatables JS -->
    <script type="text/javascript" src="assets/datatables/datatables.min.js"></script>

    <script type="text/javascript" src="./js/main_usuarios.js"></script>


</body>

</html>