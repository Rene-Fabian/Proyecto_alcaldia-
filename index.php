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
            <a class="nav-link text-success" href="./index.php">Inicio</a>
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
          <!-- dropdown usuario -->
          <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownMenuLink" aria-haspopup="true"
              aria-expanded="false" href="./login.php">
              <i class="fas fa-user"></i>
            </a>
            
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!--navbar-->

  <!-- inicia carousel -->
  <section id="seccioncarousel">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-pause="false">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class=""></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active " data-interval="4000">
          <img src="./img/20.svg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Somos Cultura</h5>
            <p>Milpa Alta una alcadia con historia milenaria.</p>
          </div>
        </div>
        <div class="carousel-item" data-interval="3000">
          <img src="./img/26.svg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Somos Tradición</h5>
            <p>La mayor producción de nopal la encuentras aquí.</p>
          </div>
        </div>
        <div class="carousel-item" data-interval="3000">
          <img src="./img/38.svg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Somos Milpa Alta</h5>
            <p>Tenemos una superficie total de 228.41 km².</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  <!-- fin carousel -->

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