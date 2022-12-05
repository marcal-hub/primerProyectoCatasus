<!DOCTYPE html PUBLIC>
  <html>

<body>
    
      <!-- Iniciando sesión y solicitando el archivo cabecera.php -->
      <?php
      session_start();
      require_once 'cabecera.php';
      ?>

        <section class="row d-flex justify-content-center align-content-center">
          <div class="imagen_inicio">
            <div>
              <div class="texto_imagen_inicio">
                VEGANO
              </div>
            </div>
            <div>
              <div class="texto_imagen_inicio">
                Y SABROSO!
              </div>
            </div>
            <a href="carta.php"><p class="texto_imagen_inicio_1">COMPRAR AHORA!</p></a>
            <div>
              <p class="texto_imagen_inicio_2">COMIDA SALUDABLE A TU ALCANCE</p>
            </div>
          </div>
        </section>
        <section id="fotosmenu" class="py-4">
          <div class="contenedor">
              <div class="conoce">
                <p>CONOCE NUESTRO MENÚ!</p>
                <a href="carta.php"><button  class="boton1">VER TODOS LOS PLATOS</button></a>
              </div>
              <div class="row">
                <div class="columna col-12 col-lg-6 izq">
                  <a href="carta.php"><img src="assets/images/hamburgesas.png"></a>
                </div>
                <div class="columna col-12 col-lg-6 der">
                  <a href="carta.php"><img src="assets/images/ensaladas.png"></a>
                </div>
              </div>
              <div class="row">
                <div class="columna col-12 col-lg-6 izq">
                  <a href="carta.php"><img src="assets/images/comidacruda.png"></a>
                </div>
                <div class="columna col-12 col-lg-6 der">
                  <a href="carta.php"><img src="assets/images/tapasfrias.png"></a>
                </div>
              </div>
              <div class="row">
                <div class="columna col-12 col-lg-6 izq">
                  <a href="carta.php"><img src="assets/images/sopas.png"></a>
                </div>
                <div class="columna col-12 col-lg-6 der">
                  <a href="carta.php"><img src="assets/images/bocadillos.png"></a>
                </div>
              </div>
            </div>
        </section>    

        
      <?php
      require_once 'footer.php';
      ?>

      

</body>

</html>