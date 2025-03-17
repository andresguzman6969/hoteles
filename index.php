<?php require_once("./procesar.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
  <!-- site metas -->
  <title>Hoteles</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css" />
  <!-- fevicon -->
  <link rel="icon" href="images/logo.jpg" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" />
  <!-- Tweaks for older IEs-->
  <link
    rel="stylesheet"
    href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
    media="screen" />
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script
    ><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
            <div class="full">
              <div class="center-desk">
                <div class="logo">
                  <a href="index.html"><img src="images/logo.jpg" alt="#" /></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
            <nav class="navigation navbar navbar-expand-md navbar-dark">
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarsExample04"
                aria-controls="navbarsExample04"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="./">Home</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header inner -->
  <!-- end header -->
  <div class="back_re">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title">
            <h2>Habitaciones de hotel</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- our_room -->
  <div class="our_room">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="titlepage">
            <p class="margin_0">
              Compra en el mejor hotel de la ciudad y disfruta de la mejor
            </p>
          </div>
        </div>
      </div>
      <form action="./#pago" method="post">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div id="serv_hover" class="room">
              <div class="room_img">
                <div id="request" class="main_form">
                  <div class="row">
                    <div class="col-md-12">
                      <input
                        min="1"
                        required
                        value="<?= $numero_habitaciones_simples ?>"
                        class="contactus"
                        placeholder="Numero de habitaciones"
                        type="number"
                        name="numero_habitaciones_simples" />
                    </div>
                    <div class="col-md-12">
                      <input
                        min="1"
                        required
                        value="<?= $numero_personas_simple ?>"
                        class="contactus"
                        placeholder="Numero de personas"
                        type="number"
                        name="numero_personas_simple" />
                    </div>
                  </div>
                </div>
                <figure><img src="images/room2.jpg" alt="#" /></figure>
              </div>
              <div class="bed_room">
                <h3>Habitacion simple</h3>
                <p>Habitacion simple con cama matrimonial, baño privado.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div id="serv_hover" class="room">
              <div class="room_img">
                <div id="request" class="main_form">
                  <div class="row">
                    <div class="col-md-12">
                      <input
                        min="1"
                        required
                        value="<?= $numero_suites ?>"
                        class="contactus"
                        placeholder="Numero de habitaciones"
                        type="number"
                        name="numero_suites" />
                    </div>
                    <div class="col-md-12">
                      <input
                        min="1"
                        required
                        value="<?= $numero_personas_suite ?>"
                        class="contactus"
                        placeholder="Numero de personas"
                        type="number"
                        name="numero_personas_suite" />
                    </div>
                  </div>
                </div>
                <figure><img src="images/room3.jpg" alt="#" /></figure>
              </div>
              <div class="bed_room">
                <h3>Suite</h3>
                <p>
                  Suite presidencial con cama matrimonial, baño privado, aire
                  acondicionado, tv por cable, wifi.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div id="serv_hover" class="room">
              <div class="bed_room">
                <div id="request" class="main_form">
                  <div class="row">
                    <div class="col-md-12">
                      <input
                        required
                        value="<?= $nombre ?>"
                        class="contactus"
                        placeholder="Nombre"
                        type="type"
                        name="nombre" />
                    </div>
                    <div class="col-md-12">
                      <input
                        required
                        value="<?= $correo ?>"
                        class="contactus"
                        placeholder="Correo electronico"
                        type="type"
                        name="correo" />
                    </div>
                    <div class="col-md-12">
                      <input
                        required
                        value="<?= $numero_celular ?>"
                        class="contactus"
                        placeholder="Numero de celular"
                        type="type"
                        name="numero_celular" />
                    </div>
                    <div class="col-md-12">
                      <button class="send_btn">Comprar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      <?php if (!empty($_POST)): ?>
        <div class="row">
          <div class=" col-md-4 col-sm-6 row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm border-primary">
                <div class="card-header py-3 text-bg-primary border-primary">
                  <h4 class="my-0 fw-normal">Recibo de pago</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title"><strong>Total: </strong>$<?= number_format($total, 0, '', '.'); ?></h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li><Strong>Nombre: </Strong> <?= $nombre ?> </li>
                    <li><Strong>Correo electronico: </Strong> <?= $correo ?> </li>
                    <li><strong>Numero de celular: </strong> <?= $numero_celular ?> </li>
                    <li><strong>Numero de habitaciones simples: </strong> <?= $numero_habitaciones_simples ?> </li>
                    <li><strong>Numero de personas habitacion simple: </strong> <?= $numero_personas_simple ?> </li>
                    <li><strong>Numero de siute: </strong> <?= $numero_suites ?> </li>
                    <li><strong>Numero de personas siute: </strong> <?= $numero_personas_suite ?> </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <!-- end our_room -->

  <!--  footer -->
  <footer id="pago">
    <div class="footer">
      <div class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-10 offset-md-1">
              <p>
                © 2025 All Rights Reserved.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer -->
  <!-- Javascript files-->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery-3.0.0.min.js"></script>
  <!-- sidebar -->
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>