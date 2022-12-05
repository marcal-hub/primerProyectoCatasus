<!--Cabecera-->
<!DOCTYPE html PUBLIC>
  <html>
  <head>
      <title>CABECERA</title>

      <meta charset="UTF-8">
      <meta name="description" content="Descripció web">
      <meta name="keywords" content="Paraules clau">
      <meta name="author" content="Autor">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
      <link href="assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/css/full_estil.css" rel="stylesheet" type="text/css" media="screen">
      <script src="assets/js/bootstrap.bundle.min.js"></script>
    
  </head>

  <?php

  /* Checking if the session is set and if it is, it will count the number of items in the session. If it
  is not set, it will set the number of items to 0. */
  if(isset($_SESSION['reserva'])){
    $numeroCarrito = count($_SESSION['reserva']);
  }else{
    $numeroCarrito = 0;
  }
  ?>
    
    <header class="my-4">
    <nav class="navbar navbar-expand-lg bg-color2">
        <div class="contenedor">
          <div class="header ordenador">
            <div>
              <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo_final.png">
              </a>
            </div>
          </div>
          <div class="header movil">
            <div class="d-flex">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div>
                <a class="navbar-brand" href="index.php">
                  <img src="assets/images/logoMovil.png" class="movil">
                </a>
              </div>
              <a class="cesta" href="carrito.php"><img src="assets/images/cesta.png"><?= $numeroCarrito ?></a>
            </div>
          </div>
          <div class="d-flex align-items-center">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex align-items-center">
              <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="carta.php">Carta</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="nosotros.php">Nosotros</a>
                </li>
                <li class="nav-item login">
                  <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item cesta">
                  <a class="cesta ordenador" href="carrito.php"><img src="assets/images/cesta.png"><?= $numeroCarrito ?></a>
                </li>

                <!--
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a> 
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Inicio</a></li>
                    <li><a class="dropdown-item" href="#">Carta</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>                
                </li>
                -->
              </ul>
            </div>
            </div>  
          </div>
        </div>
      </nav>
    </header>