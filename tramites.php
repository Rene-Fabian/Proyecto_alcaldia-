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
  <link rel="stylesheet" href="./css/style_tramites.css">
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
              <a class="nav-link " href="./index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-success" href="./tramites.php">Tramites</a>
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

  <!-- Contenedor general -->
  <div class="container">
    <section>
      <div class="card-deck">
        <!--Primer card-->
        <div class="card">
          <img src="./img/obras.svg" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Dirección General de Obras</h5>
            <p class="card-text">Funciones: Asegurar la autorización oportuna de los servicios en materia de desarrollo
              urbano,
              además de coordinar eficazmente y eficientemente, acciones pertinentes en materia de rehabilitación y
              mantenimiento urbano, Informar oportunamente de los diversos órganos internos y externos competentes,
              sobre el ejercicio de las funciones de la unidad ejecutora.</p>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop_obras" data-keyboard="true" tabindex="-1" role="dialog"
              aria-hidden="false">
              <!-- la funcion backdrop hace estatico en fondo, data-backdrop="static"  -->
              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Tipo de tramites</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button> -->
                  </div>
                  <div class="modal-body">
                    <p class="lista">1.-Solicitud de constancia de alineamiento y/o número oficial.</p>
                    <p class="lista">2.-Licencia de Construcción Especial.</p>
                    <p class="lista">3.-Prorroga de Licencia de Construcción Especial.</p>
                    <p class="lista">4.-Aviso de terminación de obra procedente de una Licencia de Construcción
                      Especial.</p>
                    <p class="lista">5-Solicitud de Registro de Obra Ejecutada.</p>
                    <p class="lista">6.-Registro de constancia de seguridad estructural y su renovación</p>
                    <p class="lista">7.-Visto bueno de Seguridad y Operación y su renovación.</p>
                    <p class="lista">8.-Solicitud de Licencia de Subdivisión, fusión y su prórroga.</p>
                    <p class="lista">9.-Expedición de Licencia de Relotificación y su Prórroga.</p>
                    <p class="lista">10.-Autorización para romper el pavimento o hacer cortes en las banquetas y
                      guarniciones en la vía pública para llevar a cabo su mantenimiento</p>
                  </div>
                  <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div> -->

                </div>
              </div>
              <!-- Modal -->
            </div>
          </div>
          <div class="card-footer bg-white">
            <!-- botton modal -->
            <button type="button" class="conocer btn btn-success" data-toggle="modal"
              data-target="#staticBackdrop_obras" style="font-size:1.200vw;">Conocer
              más</button>
            <!-- Botton modal -->
          </div>
          <div class="card-footer">
            <small class="text-muted" style="font-size:1vw;">Ultima actualización 16/05/2020</small>
          </div>
          <!-- Primer card -->
        </div>
        <!-- Segundo card -->
        <div class="card">
          <img src="./img/riesgos.svg" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Unidad de Atención a Riesgos</h5>
            <p class="card-text">Funciones: Auxiliar a la o el Titular de la Alcaldía en la vigilancia del cumplimiento
              tanto de
              las autoridades como de la población en
              general, del cumplimiento de las normativas en materia de protección civil, así como informar a la
              Dirección General de Gobierno y Asuntos Jurídicos,
              sobre el incumplimiento de las normativas, para que se actúe en consecuencia y se sancione conforme a
              derecho.</p>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop_riesgos" data-keyboard="true" tabindex="-1" role="dialog"
              aria-hidden="true">
              <!-- la funcion backdrop hace estatico en fondo, data-backdrop="static"  -->
              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Tipo de tramites</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button> -->
                  </div>
                  <div class="modal-body">
                    <p class="lista">1.-Programa Especial de Protección Civil.</p>
                    <p class="lista">2.-Programa Interno de Protección Civil.</p>
                    <p class="lista">3.-Autorización para la presentación de juegos pirotécnicos.</p>

                  </div>
                  <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div> -->
                </div>
              </div>
              <!-- Modal -->
            </div>
          </div>
          <div class="card-footer bg-white">
            <!-- Button Modal -->
            <button type="button" class="conocer btn btn-success" data-toggle="modal"
              data-target="#staticBackdrop_riesgos" style="font-size:1.200vw;"> Conocer
              más</button>
            <!-- Button Modal -->
          </div>
          <div class="card-footer">
            <small class="text-muted" style="font-size:1vw;">Ultima actualización 16/05/2020</small>
          </div>

          <!-- Segundo card -->
        </div>
        <!-- Tercer Card -->
        <div class="card">
          <img src="./img/Mercados.svg" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Jefatura de Unidad Departamental de Mercados</h5>
            <p class="card-text">Funciones: Implementar mecanismos adecuados para que los administradores, mesas
              directivas y locatarios conozcan sus derechos y obligaciones, asi como laborar, resguardar y actualizar el
              padrón
              de locatarios y movimientos al padrón, cédulas de empadronamiento y giros de mercados públicos que se
              ubiquen en la demarcación.
            </p>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop_mercados" data-keyboard="true" tabindex="-1" role="dialog"
              aria-hidden="true">
              <!-- la funcion backdrop hace estatico en fondo, data-backdrop="static"  -->
              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Tipo de Tramites</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button> -->
                  </div>
                  <div class="modal-body">
                    <p class="lista">1.-Autorización de cambio de nombre de la cédula de empadronamiento de locales en
                      Mercados Públicos por fallecimiento del empadronado.</p>
                    <p class="lista">2.-Autorización para cambio de giro de local en mercado público.</p>
                    <p class="lista">3.-Autorización por 90 días para que una persona distinta del empadronado pueda
                      ejercer el comercio en puestos permanentes o temporales en mercados públicos, por cuenta del
                      empadronado.</p>
                    <p class="lista">4.-Obtención de la cédula de empadronamiento para ejercer actividades comerciales
                      en los mercados públicos.</p>
                    <p class="lista">5.-Refrendo de la cédula de empadronamiento para ejercer actividades comerciales en
                      los mercados públicos.</p>
                    <p class="lista">6.-Autorización para el traspaso de derechos de cédula de empadronamiento del local
                      en mercado público.</p>
                    <p class="lista">7.-Autorización de remodelación de local.</p>
                    <p class="lista">8.-Permisos para ejercer actividades comerciales en Romerías.</p>
                  </div>
                  <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div> -->
                </div>
              </div>
              <!-- Modal -->
            </div>
          </div>
          <div class="card-footer bg-white">
            <!-- Button Modal -->
            <button type="button" class="conocer btn btn-success" data-toggle="modal"
              data-target="#staticBackdrop_mercados" style="font-size:1.200vw;">Conocer
              más</button>
            <!-- Button Modal -->
          </div>
          <div class="card-footer">
            <small class="text-muted" style="font-size:1vw;">Ultima actualización 16/05/2020</small>
          </div>
          <!-- Tercer card -->
        </div>
      </div>
      <br>
      <div class="card-deck">
        <!-- cuarto card -->
        <div class="card">
          <img src="./img/Espectaculos.svg" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Jefatura de Unidad Departamental de Giros Mercantiles Y Espectáculos Públicos</h5>
            <p class="card-text">Funciones: realizar las actividades administrativas para la atención de los trámites
              relacionados con el funcionamiento de los establecimientos mercantiles y la celebración de espectáculos
              públicos, en cumplimiento a la normatividad aplicable en materia de establecimientos mercantiles y
              espectáculos públicos, respectivamente.
            </p>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop_espectaculos" data-keyboard="false" tabindex="-1" role="dialog"
              aria-hidden="true">
              <!-- la funcion backdrop hace estatico en fondo, data-backdrop="static"  -->
              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Tipo de Tramites</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button> -->
                  </div>
                  <div class="modal-body">
                    <p class="lista">1.-Autorización para la presentación de espectáculos en la vía pública, parques o
                      espacios públicos.</p>
                    <p class="lista">2.-Permiso para la presentación de Espectáculos Públicos.</p>
                    <p class="lista">3.-Aviso para la presentación de espectáculos públicos.</p>
                  </div>
                  <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div> -->
                </div>
              </div>
              <!-- Modal -->
            </div>
          </div>
          <div class="card-footer bg-white">
            <!-- Button Modal -->
            <button type="button" class="conocer btn btn-success" data-toggle="modal"
              data-target="#staticBackdrop_espectaculos" style="font-size:1.200vw;">Conocer
              más</button>
            <!-- Button Modal -->
          </div>
          <div class="card-footer">
            <small class="text-muted" style="font-size:1vw;">Ultima actualización 16/05/2020</small>
          </div>
          <!-- cuarto card -->
        </div>
        <!-- Quinto card -->
        <div class="card">
          <img src="./img/servicios_al_publico.svg" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Jefatura de Unidad Depatamental de Servicios al Público</h5>
            <p class="card-text">Funciones: Coordinar el seguimiento a la demanda ciudadana, para su atención así como
              supervisar que el área responsable haya dado respuesta a la demanda ciudadana ademas de Realizar el
              análisis de la demanda ciudadana recibida a través del (CESAC, VU), así como su respuesta a la misma, a
              fin de adoptar medidas que mejoren la atención a la ciudadanía.
            </p>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop_spublico" data-keyboard="false" tabindex="-1" role="dialog"
              aria-hidden="true">
              <!-- la funcion backdrop hace estatico en fondo, data-backdrop="static"  -->
              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Tipo de Tramites</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button> -->
                  </div>
                  <div class="modal-body">
                    <p class="lista">1.-Expedición de Certificado de Residencia.</p>
                  </div>
                  <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div> -->
                </div>
              </div>
              <!-- Modal -->
            </div>
          </div>
          <div class="card-footer bg-white">
            <!-- Button Modal -->
            <button type="button" class="conocer btn btn-success" data-toggle="modal"
              data-target="#staticBackdrop_spublico" style="font-size:1.200vw;">Conocer
              más</button>
            <!-- Button Modal -->
          </div>
          <div class="card-footer">
            <small class="text-muted" style="font-size:1vw;">Ultima actualización 16/05/2020</small>
          </div>
          <!-- Quinto card -->
        </div>
      </div>
    </section>
  </div>

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