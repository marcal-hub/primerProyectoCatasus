<!DOCTYPE html PUBLIC>
  <html>

<body>
    
      <?php
      session_start();
      require_once 'cabecera.php';
      ?>

        <section class="row d-flex justify-content-center align-content-center">
          <div class="inicio_nosotros">
            <div class="contenedor">
              <h2>MUCHO MAS QUE SOLO HOJAS VERDES!</h2>
              <p style="font-family: Arial">Nuestra inspiración proviene de la mezcla de culturas, sobre todo del <b>Nepal</b>, 
                de los <b>países de alrededor</b> y de la cocina <b>mediterránea Europea</b>, donde nuestro 
                chef internacional Ramesh Prasad Niraula y su equipo, te harán degustar de 
                platos gustosamente <b>veganos</b> con un mix nutricional de <b>sensaciones y texturas</b>.
              </p>
            </div>
          </div>
        </section>

        <section id="fotosmenu" class="py-4">
          <div class="contenedor">
            <div class="row">
              <div class="texto_nosotros">
                <h2>DILE ADIÓS A LA COMIDA INDUSTRIAL</h2><br>
                <p style="font-family: Arial">Groovy Vegan es un restaurante de comida 100% vegana 
                  (libre de cualquier producto de origen animal)
                </p>
                <div class="row">
                  <div class="col-xs-12 col-sm-4">
                    <div class="cienvegano">
                      <img src="assets/images/100vegano.png">
                      <p>100% VEGANO</p>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4">
                    <div class="entornoartistico">
                      <img src="assets/images/EntornoArtistico.png">
                      <p>entorno artístico</p>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4">
                      <div class="productosartesanales">
                      <img src="assets/images/ProductosArtesanales.png">
                      <p>productos artesanales</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </section> 
        <div class="soloveganos">
          <div class="contenedor">
            <div class="texto_nosotros">
              <h2>SOLO PARA VEGANOS?</h2>
              <p style="font-family: Arial"><b>Groovy Vegan</b> es ideal no sólo para veganos estrictos y 
                  vegetarianos, sino también para cualquier clase de persona 
                  que desee probar platos saludables sin renunciar al sabor de 
                  los mismos. Nuestros platos tienen un precio asequible a cualquier 
                  presupuesto y su valor nutricional es inigualable.
              </p>
            </div>
          </div>
        </div>


        <section class="row d-flex justify-content-center align-content-center">
          <div class="contenedor">
              <div class="row">
                <div id="ocultar_img" class="col-xs-12 col-sm-6">
                  <img src="assets/images/ultima_foto.png" style="padding-bottom: 11%">
                </div>
                <div class="col-xs-12 col-sm-6">
                  <div class="texto_nosotros_ultima">
                    <h2>¡Recárgate, desintoxícate y… disfruta!</h2>
                    <p style="font-family: Arial">En <b>Groovy Vegan</b> combinamos ingredientes e inspiración de alrededores del mundo para hacer 
                      deliciosas ensaladas, sándwiches vegetarianos, hamburguesas, curris y una impresionante variedad de zumos, 
                      batidos y cócteles veganos, que recargarán tus energías, te desintoxicarán y enamorarán a tu paladar.
                    </p>
                  </div>
                </div>
              </div>
          </div>
        </section>

        
      <?php
      require_once 'footer.php';
      ?>

      

</body>

</html>