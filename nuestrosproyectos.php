<!DOCTYPE html>
<html class="wide wow-animation" lang="es">

<head>

  <title>Nuestros Proyectos</title>
  <link rel="icon" href="images/iconoparaguay.png" type="image/x-icon">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="Proyectos de Energia Solar y Renovable PY">
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

    <section class="section-page-title"
      style="background-image: url(images/banner.jpg); background-size: cover;">
      <div class="container">
        <h1 class="page-title">Proyectos</h1>
      </div>
    </section>

    <section class="breadcrumbs-custom">
      <div class="container">
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.html">Inicio</a></li>
          <li class="active">Nuestros Proyectos</li>
        </ul>
      </div>
    </section>

    <section class="proyectos">
      <div class="cuadro1">
        <img class="imagen1" src="/images/proyecto1.jpeg" width="400px">
        <img class="imagen2" src="/images/proyecto2.jpeg" width="400px">
      </div>
      <div class="cuadro2">
        <img class="imagen1" src="/images/proyecto3.jpeg" width="400px">
        <img class="imagen2" src="/images/proyecto4.jpeg" width="400px">
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