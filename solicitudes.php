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
  <link rel="stylesheet" href="./css/style._solicitudes.css">

  <link href="./fontawesome-free-5.13.0-web/css/all.css" rel="stylesheet">
  <title>Alcaldía Milpa Alta</title>
  <script src="./jsPDF-1.3.2/dist/jspdf.min.js"></script>
  <script src="./js/getPDF.js"></script>
  <script src="./js/activar_botones.js"></script>
  <script src="./js/activar_boton_pdf.js"></script>
  <script src="./js/alert_enviar.js"></script>
  <script src="./js/enviar_datos_solicitud.js"></script>
  <script src="./js/cookies.js"></script>

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
            <a class="nav-link text-success" href="./solicitudes.php">Solicitudes</a>
          </li>
          <!-- dropdown usuario -->
          <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false"
              href="./login.php">
              <i class="fas fa-user"></i>
            </a>

          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!--navbar-->


  <!-- jumbotron-fluid -->
  <div class="jumbotron">
    <div class="container">

      <h1 class="display-4 text-center text-success">Realiza tu solicitud</h1>

      <p class="lead text-center text-success">Ahora ya puedes realizar tu solicitud desde la comodidad de tu hogar</p>
      <hr>
    </div>
  </div>
  <!-- jumbotron-fluid -->


  <!-- Formulario -->

  <div class="container">
    <div class="card">
      <form action="" method="POST">
        <!--  titulo -->
        <h5 class="card-header">
          <strong>Datos personales</strong>
        </h5>
        <!-- titulo -->

        <!--datos personales -->
        <div class="card-body">
          <!-- primera fila -->
          <div class="row">
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Nombre(s)" id="nombre" pattern="[A-Za-z]*" required>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Apellido Paterno" id="paterno" pattern="[A-Za-z]*"
                required>
            </div>
          </div>
          <!-- primera fila -->
          <br>
          <!-- segunda fila -->
          <div class="row">
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Apellido Materno" id="materno" pattern="[A-Za-z]*"
                required>
            </div>
            <div class="col-md-6">
              <input type="email" class="form-control" placeholder=" Correo electrónico" id="correo" required>

            </div>
          </div>
          <!-- segunda fila -->
          <br>
          <!-- tercera fila -->
          <div class="row">
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Teléfono" id="telefono" pattern="[0-9]*" required>
            </div>
            <div class="col-md-6">
              <select id="sexo" class="form-control">
                <option selected>Sexo</option>
                <option>Masculino</option>
                <option>Femenino</option>
              </select>
            </div>
          </div>
          <!-- tercera fila -->

        </div>
        <!-- datos personales -->

        <!-- titulo -->
        <h5 class="card-header">
          <strong>Direccion</strong>
        </h5>
        <!--titulo -->
        <!--direccion -->
        <div class="card-body">
          <!-- primera fila -->
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Calle" id="calle" required>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="N° Interior" id="interior" minlength="2"
                maxlength="3" required>
            </div>
          </div>
          <!-- primera fila -->
          <br>
          <!-- segunda fila -->
          <div class="row">
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="N° Exterior" id="exterior" minlength="2"
                maxlength="5" pattern="[0-9]*" required>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder=" Código Postal" id="cp" maxlength="5"
                pattern="[0-9]*" required>
            </div>
          </div>
          <!-- segunda fila -->
          <br>
          <!-- tercera fila -->
          <div class="row">
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Colonia" id="colonia" required>
            </div>
            <div class="col-md-6">

              <input type="text" name="poblado" id="poblado" class="form-control" placeholder="Pueblo">
            </div>
          </div>
          <!-- tercera fila -->

        </div>
        <!-- direccion -->

        <!-- titulo -->
        <h5 class="card-header">
          <strong>Datos de la solicitud</strong>
        </h5>
        <!--titulo -->
        <!--solicitud -->
        <div class="card-body">

          <br>
          <!-- segunda fila -->
          <div class="row">
            <div class="col-md-12">
              <select id="tipo_solicitud" class="form-control">
                <option selected>Tipo de solicitud</option>
                <!-- obras -->
                <option>Tope</option>
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

          </div>
          <!-- segunda fila -->
          <br>
          <!-- tercera fila -->
          <div class="row">

            <div class="col-md-12">
              <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="5"
                placeholder="Descripción" onkeypress="activarbotones();" required></textarea>
              <!-- placeholder="Descripción" onkeypress="activarbotones();" required></textarea> -->
            </div>
          </div>
          <!-- tercera fila -->
        </div>
        <!-- solicitud -->


        <input type="button" class="btn btn-danger " id="documentopdf" value="Descargar PDF" onclick="getPDF();"
          disabled>
        <hr>
        <input type="submit" class=" btn btn-success " id="enviar" value="Enviar" onclick="postdatos();" disabled>
        <!-- <input type="submit" class=" btn btn-success " id="enviar" value="Enviar" onclick="activarbotonpdf();"  disabled> -->





      </form>
    </div>
  </div>









  <br>
  <!-- Footer -->
  <footer class="footer">
    <!--contenedor general -->
    <div class="container-fluid">
      <!-- fila general -->
      <div class="row">
        <!-- columna con mapa -->
        <div class="col-md-6">
          <!-- <p class="text">Ubicación</p> -->
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1884.0429494784391!2d-99.02456807301851!3d19.191450176982382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce052555a30e47%3A0xe53da50fbef112ed!2sAlcald%C3%ADa%20Milpa%20Alta!5e0!3m2!1ses-419!2smx!4v1588826657157!5m2!1ses-419!2smx"
            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          <br>
          <!-- columna con mapa -->
        </div>
        <!-- columna con contenedor anidado -->
        <div class="col-md-6 text-center">
          <!-- fila de contacto y redes sociales-->
          <div class="row">
            <!-- columna contacto -->
            <div class="contactosfoot col-sm-7">
              <p class="text" style="font-size:3vw;">Contactanos</p>
              <!-- Botones de inforamción-->
              <p class="text_contac" style="font-size:1.150vw;">
                <i class="contac fas fa-phone"></i> (55) 5862 3150</p><br>
              <p class="text_contac" style="font-size:1.150vw;">
                <i class="contac fas fa-envelope"></i> contacto@milpa-alta.cdmx.gob.mx</p><br>
              <p class="text_contac" style="font-size:1.150vw;">
                <i class="contac fas fa-location-arrow"></i>Av. México Esq. Constitución s/n, Alcaldía Milpa Alta C.P.
                12000</p><br>
              <!-- columna contacto -->
            </div>
            <!-- columna redes sociales -->
            <div class="redessociales col-sm-5">
              <p class="text" style="font-size:3vw;">Siguenos</p>
              <ul class="iconos list-unstyled text-center">
                <li class="list-item">
                  <a class="btn-floating btn-fb mx-2" href="https://www.facebook.com/GobMilpaAlta/">
                    <i class="fab fa-facebook-f"> </i>
                  </a>
                </li>
                <li class="list-item">
                  <a class="btn-floating btn-tw" href="https://twitter.com/GobMilpaAlta?lang=es">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-item">
                  <a class="btn-floating btn-youtube" href="https://www.youtube.com/channel/UC6KgB56484Nekwz14qbNI4A">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>
                <li class="list-item">
                  <a class="btn-floating btn-insta" href="https://www.instagram.com/gobmilpaalta/">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
              </ul>
              <!-- columna redes sociales -->
            </div>
            <!-- fila de contacto y redes sociales -->
          </div>
          <!-- columna con contenedor anidado -->
        </div>
        <!-- fila general -->
      </div>
      <!-- contenedor general -->
    </div>


    <!-- Copyright -->
    <div class="copyfooter footer-copyright text-center py-2">
      <p class="footercopy" style="font-size:1vw;">(c) 2020 Alcaldía Milpa Alta</p>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->



  <!-- Optional JavaScript -->
  <script src="./js/validar_campos_login.js"></script>

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