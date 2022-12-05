<!DOCTYPE html PUBLIC>
  <html>
    
    <body>
    <?php
        /* Incluyendo todos los archivos en el directorio. */
        include 'config/parameters.php';
        include 'modelo/productos.php';
        include 'modelo/entrantes.php';
        include 'modelo/principal.php';
        include 'modelo/postres.php';
        include 'modelo/users.php';
        include 'calculadoraPrecios.php';
        include 'modelo/pedido.php';
        /* Comenzando una sesión. */
        session_start();
        /* Comprobando si la sesión ha caducado. */
        if (isset($_SESSION['session']) && (time() - $_SESSION['session'] > 90)){
                session_unset(); 
                session_destroy(); 
                echo "<script>alert('La sesión ha caducado')</script>"; 
        }else{
            $_SESSION['session'] = time();
        }

        /* Incluyendo el archivo `cabecera.php` en el archivo actual. */
        require_once 'cabecera.php';
        
        /* Comprobando si se ha pulsado el botón Supr. Si se ha pulsado, obtendrá la
        posición del producto en la matriz y verificará si la cantidad del producto es 1. Si
        es 1, eliminará el producto de la matriz. Si no es 1, disminuirá el
        cantidad del producto por 1. */
        if(isset($_POST['Del'])){
            $pedidoSel = $_SESSION["reserva"][$_POST['pos']];
            if ($pedidoSel->getCantidad() == 1) {
                unset($_SESSION["reserva"][$_POST['pos']]);
                $_SESSION["reserva"] = array_values($_SESSION["reserva"]);

            }else{
                $pedidoSel->setCantidad($pedidoSel->getCantidad() -1);
            }
        }/* Comprobando si se ha pulsado el botón Añadir. Si se ha pulsado, obtendrá la
            posición del producto en la matriz y aumentará la cantidad del producto
            por 1.
            Si se ha pulsado el botón Supr, obtendrá la posición del producto en el array y
            eliminará el producto de la matriz. */
        elseif (isset($_POST['Add'])) {
            $pedidoSel = $_SESSION["reserva"][$_POST['pos']];
            $pedidoSel->setCantidad($pedidoSel->getCantidad() + 1);
        }elseif (isset($_POST['Supr'])){
            $pedidoSel = $_SESSION["reserva"][$_POST['pos']];
            unset($_SESSION["reserva"][$_POST['pos']]);
            $_SESSION["reserva"] = array_values($_SESSION["reserva"]);
        }

        /* Comprobando si la sesión está vacía. Si no está vacía, calculará el precio total de los productos en la sesión. */
        if(!empty($_SESSION['reserva'])){
            $precioTotal = calculadoraPrecios::calculadoraPrecioTotal($_SESSION["reserva"]);
        ?> 
        <!-- Page content -->
        <section class="row d-flex justify-content-center align-content-center">  
            <div class="contenedor"> 
                <div class="titulo_carrito">
                    <p>CESTA DE LA COMPRA</p>
                </div>
                <div class="row">
                    <div id="col-9" class="col-9">
                        <div class="barra_carrito">
                            PRODUCTOS AÑADIDOS A LA CESTA
                        </div>
                        <?php $pos = 0; foreach($_SESSION["reserva"] as $pedido){ ?>
                            <form method='post'>
                                <input type="hidden" name="pos" value=<?=$pos?>>
                                <div class="row rowCarrito my-4">
                                    <div class="col d-flex flex-column justify-content-center align-items-center">
                                        <?=/* Obtener el nombre del producto. */
                                        $pedido->getProducto()->getNombre_producto()?>
                                        <img src="assets/images/<?=/* Conseguir la imagen del producto. */
                                        $pedido->getProducto()->getImagen()?>.png">
                                    </div>
                                    <div class="col d-flex justify-content-evenly align-items-center">
                                        <button class="" type="submit" name='Del'><img src="assets/images/menos.png"></button>
                                        <p><?=/* Obtener la cantidad del producto. */
                                        $pedido->getCantidad()?></p>
                                        <button class="" type="submit" name='Add'><img src="assets/images/mas.png"></button>
                                    </div>
                                    <div id="col-3" class="col-3 d-flex justify-content-end align-items-center">
                                        <p class="pe-2"><?=/* Obtener el precio del producto. */
                                        $pedido->getProducto()->getPrecio_Producto()?>€</p>
                                        <button class="" type="submit" name="Supr"><img src="assets/images/borrar.png"></button>
                                    </div>
                                </div>
                                <hr class="linea_carta">

                            </form>
                        <?php $pos++; } ?>
                        <a href="carta.php"><div class="barra_carrito" style="margin-bottom: 1vw">
                            AÑADIR MAS PRODUCTOS
                        </div></a>
                    </div>

                    <div class="col d-flex justify-content-center align-items-end">
                        <div class="d-flex justify-content-end">
                            <div class="contenedorSubtotal">
                                <p style="text-align: center">SUBTOTAL (<?=/* Contar el número de productos en la sesión. */
                                count($_SESSION["reserva"])?> productos a pagar): </p>
                                <p style="text-align: center"><?= $precioTotal ?>€</p>
                                <?php if(count($_SESSION["reserva"]) > 3){ ?>
                                    <hr>
                                    <p style="text-align: center">DESCUENTO 20% POR +3 PRODUCTOS:</p>
                                    <p style="text-align: center"><?= /* Llamando a la función `calculadoraDescuento` desde
                                    la clase `calculadoraPrecios` y va redondeando el resultado a 2 decimales. */
                                    round(calculadoraPrecios::calculadoraDescuento($_SESSION["reserva"]),2)?>€</p>
                                    <hr>
                                    <p style="text-align: center">PRECIO FINAL: (IVA INCLUIDO)</p>
                                    <p style="text-align: center"><?= $precioTotal - round(calculadoraPrecios::calculadoraDescuento($_SESSION["reserva"]),2)?>€</p>
                                <?php } ?>
                                <div class="d-flex justify-content-center" >
                                    <form action="pedidoFinalizado.php" method="POST">
                                        <button class="finalizarPedido my-4" type="submit" name="finalizarPedido">FINALIZAR PEDIDO</button>
                                        <button class="finalizarPedido" type="submit" name="ultimoPedido">ULTIMO PEDIDO</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php }else{ ?>
            <div class="d-flex justify-content-center" >
                <form action="pedidoFinalizado.php" method="POST">
                    <button class="finalizarPedido" type="submit" name="ultimoPedido">ULTIMO PEDIDO</button>
                </form>
            </div>
        <?php } ?>

        

        <?php
        require_once 'footer.php';
        ?>
    </body>

</html>
