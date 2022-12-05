<!DOCTYPE html PUBLIC>
    <html>

	<body>
    <?php
        /* Incluyendo los archivos que se necesitan para que la página funcione. */
        session_start();
        require_once 'cabecera.php';

        include 'config/parameters.php';
        include 'modelo/Productos.php';
        include 'modelo/Pedido.php';
        include 'modelo/Entrantes.php';
        include 'modelo/Principal.php';
        include 'modelo/Postres.php';

        /* Creación de una matriz de objetos. */
        $listaEntrantes = array (0 => new Entrantes(0,"Entrante","Ensalada Groovy",10.99,["Verduras frescas"," lechuga"," aguacate"," cebolla tierna"," pimineto rojo"," pepino"],"e0"), 
        1 => new Entrantes(1,"Entrante","Hummus con Judías Verdes",10.99,["Judias verdes con ajo y cebolla"," hummus"," lechuga"," espinacas"," y tomate con salsa de pesto"],"e1"),
        2 => new Entrantes(2,"Entrante","Nachos Indios",9.99,["Frutas de temporada","lechuga","y nueces con veganesa"],"e2"));

        $listaPrincipales = array (0 => new Principal(0,"Principal","Hamburgesa Vegetal",8.99,["Disfruta de nuestro pan casero e ingredientes naturales con una exquisita salsa"],"p0"),
        1 => new Principal(1,"Principal","Hamburgesa sin pan",7.99,["Hamburgesa en plato sin pan con arroz"," ensalada y una salsa"],"p1"),
        2 => new Principal(2,"Principal","Bocadillo de Tofu",4.99,["Tofu al horno"," tomate"," lechuga"," zanahoria"," aguacate"," cebolla"," germinados con salsa satay y japonesa"],"p2"));

        $listaPostres = array (0 => new Postres(0,"Postre","Sopa",10.99,["Sopa o puré del dia"],"po0"), 
        1 => new Postres(1,"Postre","Gazpacho",10.99,["Nuestra versión de gazpacho con productos naturales"],"po1"));

        
        /* Al verificar si la sesión está configurada, si lo está, verifica si la publicación está configurada, si lo está, configura
        el producto a la lista del producto, si no lo está, comprueba si la publicación está configurada,
        es decir, establece el producto en la lista del producto, si no es así, comprueba si la publicación es
        set, si lo está, fija el producto a la lista del producto, si no lo está, comprueba si
        el producto está configurado, si lo está, establece el producto en la lista del producto, si no lo está,
        establece el producto en la lista del producto. */
        if(isset($_SESSION['reserva'])){
            if(isset($_POST['entrante'])){
                $productoSel = $listaEntrantes[$_POST['entrante']];	
            }else if(isset($_POST['principal'])){
                $productoSel = $listaPrincipales[$_POST['principal']];	
            }else if(isset($_POST['postre'])){
                $productoSel = $listaPostres[$_POST['postre']];	
            }

            if(isset($productoSel)){
                $pedido = new Pedido($productoSel);
                array_push($_SESSION['reserva'],$pedido);
            }
        }else{
            $_SESSION['reserva'] = array();
        }

	?>
    
    <section class="row d-flex justify-content-center align-content-center">
    
        <div class="hamburgesa_carta">
            <div class="contenedor">
                <p class="titulo_hamburgesas_carta">Principales</p>
                <?php foreach($listaPrincipales as $producto){ ?>
                    <p class="texto_carta"><?= $producto->getNombre_producto()?></p>
                    <p style="font-family: Arial"><?php /* Obtener los ingredientes del producto y mostrarlos. */
                    foreach($producto->getIngredientes() as $ingrediente) echo $ingrediente.","; ?></p>
                    <form method="POST">
                        <input type="hidden" name="principal" value=<?=/* Obtener la identificación del producto. */
                        $producto->getId_producto();?>>
                        <button class="boton1" type="submit" name="enviar">Añadir al carrito</button>
                    </form>
                    <p class="linea_carta"></p>

                <?php } ?>
            </div>       
        </div>

        <div class="tapas_frias_carta">
            <div class="contenedor">
                <p class="titulo_hamburgesas_carta">Entrantes</p>
                <?php foreach($listaEntrantes as $producto){ ?>
                    <p class="texto_carta"><?= $producto->getNombre_producto()?></p>
                    <p style="font-family: Arial"><?php foreach($producto->getIngredientes() as $ingrediente) echo $ingrediente.","; ?></p>
                    <form method="POST">
                        <input type="hidden" name="entrante" value=<?=$producto->getId_producto();?>>
                        <button class="boton1" type="submit" name="enviar">Añadir al carrito</button>
                    </form>
                    <p class="linea_carta"></p>

                <?php } ?>
            </div>                   
        </div>

        <div class="sopas_carta">
            <div class="contenedor">
                <p class="titulo_hamburgesas_carta">Sopas</p>
                <?php foreach($listaPostres as $producto){ ?>
                    <p class="texto_carta"><?= $producto->getNombre_producto()?></p>
                    <p style="font-family: Arial"><?php foreach($producto->getIngredientes() as $ingrediente) echo $ingrediente.","; ?></p>
                    <form method="POST">
                        <input type="hidden" name="postre" value=<?=$producto->getId_producto();?>>
                        <button class="boton1" type="submit" name="enviar">Añadir al carrito</button>
                    </form>
                    <p class="linea_carta"></p>

                <?php } ?>
            </div>
        </div>

    </section>


    <?php
    require_once 'footer.php';
    ?>

	</body>
</html>