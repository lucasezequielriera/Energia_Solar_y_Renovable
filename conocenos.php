<!DOCTYPE html>
<html class="wide wow-animation" lang="es">

<head>

  <title>Conocenos</title>
  <link rel="icon" href="images/iconoparaguay.png" type="image/x-icon">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="Conocé Energia Solar y Renovable PY">
  <meta name="author" content="Agrowd">

  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css"
    href="//fonts.googleapis.com/css?family=Lato:300i,400,400i,700%7CMontserrat:400,500,600,700%7CPlayfair+Display:400,700,700i%7COswald:400,700,700i">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="preloader">
    <div class="preloader-body">
      <div class="cssload-jumping"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
  </div>

  <div class="page">

    <!-- Navbar -->
    <?php
    require("templates/header.php")
    ?>

    <section class="section-page-title" style="background-image: url(images/banner.jpg); background-size: cover;">
      <div class="container">
        <h1 class="page-title">Nuestra Empresa</h1>
      </div>
    </section>

    <section class="breadcrumbs-custom">
      <div class="container">
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.html">Inicio</a></li>
          <li class="active">Conocenos</li>
        </ul>
      </div>
    </section>

    <section class="section parallax-container" data-parallax-img="images/foto8.1.png">
      <div class="parallax-content section-lg context-dark text-center section-filter-dark">
        <div class="container">
          <h2>Video de Presentación </h2>
          <div class="divider-lg"></div>
          <p class="block-lg">Para que nos conozcas un poco más, decidimos contarlo en nuestro video de presentación,
            para que tu experiencia sea del 100% desde el minuto 0, y siga así luego de formar parte de tus proyectos.
          </p>
        </div>
        <div class="container">
          <div class="box-video-button" data-lightgallery="group"><a class="button-play" data-lightgallery="item"
              href="#"><span class="icon fa-play"></span></a></div>
        </div>
      </div>
    </section>

    <section class="section section-lg bg-default">
      <div class="container">
        <div class="row row-50 align-items-lg-center justify-content-xl-between">
          <div class="col-lg-6">
            <div class="block-xs">
              <h2>Conocenos Mejor</h2>
              <div class="divider-lg"></div>
              <p class="big text-gray-800">En 1996 nació una empresa de la nada, de la mano de un padre (Julio Coca), y
                su hijo (Armando Barreda); el constante sentimiento de progreso y sabiduría se llevó a cabo por 10 años
                hasta que se consolidó como una empresa con amplia trayectoria y la reputación de sus clientes.</p>
              <p>Para todo el público tenemos horarios designados para que puedan contactarse con nosotros, sin dudarlo,
                asesorándolos de la mejor manera.</p>
            </div>
            <div class="row row-30">
              <div class="col-md-6">
                <div class="box-contact-info-with-icon"><span class="icon mdi mdi-clock icon-primary"></span>
                  <h5>Disponibilidad</h5>
                  <ul class="list-xs">
                    <li> <span class="text-gray-800">Lunes-Viernes: </span> 8:00am – 8:00pm
                    </li>
                    <li><span class="text-gray-800">Sábados:</span> 8:00am – 6:00pm
                    </li>
                    <li><span class="text-gray-800">Domingos: </span> No Respondemos
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="box-contact-info-with-icon"><span class="icon mdi mdi-clock icon-primary"></span>
                  <h5>Ubicación y Teléfono</h5>
                  <ul class="list-xs">
                    <li><span class="text-gray-800">Dirección: </span> Eduardo López Moreira 4846, Asunción, Paraguay
                    </li>
                    <li><span class="text-gray-800">Teléfono: </span> +595 984 644111
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="box-images box-images-variant-3">
              <div class="box-images-item" data-parallax-scroll="{&quot;y&quot;: -20,   &quot;smoothness&quot;: 30 }">
                <img src="images/foto9.png" alt="" width="470" height="282" />
              </div>
              <div class="box-images-item box-images-without-border"
                data-parallax-scroll="{&quot;y&quot;: 40,  &quot;smoothness&quot;: 30 }"><img
                  src="images/foto10.png" alt="" width="470" height="282" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contacto -->
    <?php
    require("templates/contacto.php")
    ?>

    <!-- Ubicación -->
    <?php
    require("templates/ubicacion.php")
    ?>

    <!-- Footer -->
    <?php
    require("templates/footer.php")
    ?>

  </div>

  <div class="snackbars" id="form-output-global"></div>

  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>

</body>

</html>