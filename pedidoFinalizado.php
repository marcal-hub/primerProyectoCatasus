<!DOCTYPE html PUBLIC>
  <html>
    
    <body>
    <?php
        include 'config/parameters.php';
        include 'modelo/productos.php';
        include 'modelo/entrantes.php';
        include 'modelo/principal.php';
        include 'modelo/postres.php';
        include 'modelo/users.php';
        include 'calculadoraPrecios.php';
        include 'modelo/pedido.php';
        session_start();
        require_once 'cabecera.php';
    
        /* Establecer la variable en nulo. */
        $arrayPedido = null;

        if(isset($_POST["finalizarPedido"])){
            /* Configuración de una cookie con el nombre "ultimoPedido" y el valor de la sesión "reserva" y
            el tiempo de la cookie es de 60 segundos. */
            setcookie("ultimoPedido", serialize($_SESSION["reserva"]), time() + 60);
            $arrayPedido = $_SESSION["reserva"];
            session_unset(); 
            session_destroy();
        }else if(isset($_POST["ultimoPedido"])){
            /* Comprobando si la cookie "ultimoPedido" está configurada y si lo está, está deserializando la cookie y configurando la variable. */
            if(isset($_COOKIE["ultimoPedido"])){
                $arrayPedido = unserialize($_COOKIE["ultimoPedido"]);
            }
        }

        /* Comprobando si la variable no es nula y si no lo es, está configurando el
        variable al valor de la función calculadoraPrecioTotal. */
        if(!is_null($arrayPedido)){
            $precioTotal = calculadoraPrecios::calculadoraPrecioTotal($arrayPedido);
        ?> 

        <!-- Pagina que muestra los datos básixos del último pedido realizado a partir de la cookie creada anteriormente -->
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
                        <?php $pos = 0; foreach($arrayPedido  as $pedido){ ?>
                            <form  method='post'>
                                <input type="hidden" name="pos" value=<?=$pos?>>
                                <div class="row rowCarrito my-4">
                                    <div class="col d-flex flex-column justify-content-center align-items-center">
                                        <?=$pedido->getProducto()->getNombre_producto()?>
                                        <img src="assets/images/<?=$pedido->getProducto()->getImagen()?>.png">
                                    </div>
                                    <div class="col d-flex justify-content-evenly align-items-center">
                                        <p><?=$pedido->getCantidad()?></p>
                                    </div>
                                    <div class="col-3 d-flex justify-content-end align-items-center">
                                        <p class="pe-2"><?=$pedido->getProducto()->getPrecio_Producto()?>€</p>
                                    </div>
                                </div>
                                <hr class="linea_carta">

                            </form>
                        <?php $pos++; } ?>
                    </div>

                    <div class="col d-flex justify-content-center align-items-end">
                        <div class="d-flex justify-content-end">
                            <div class="contenedorSubtotal">
                                <p style="text-align: center">SUBTOTAL (<?=count($arrayPedido)?> productos a pagar): </p>
                                <p style="text-align: center"><?= $precioTotal ?>€</p>
                                <?php if(count($arrayPedido) > 3){ ?>
                                    <hr>
                                    <p style="text-align: center">DESCUENTO 20% POR +3 PRODUCTOS:</p>
                                    <p style="text-align: center"><?= round(calculadoraPrecios::calculadoraDescuento($arrayPedido),2)?>€</p>
                                    <hr>
                                    <p style="text-align: center">PRECIO FINAL: (IVA INCLUIDO) </p>
                                    <p style="text-align: center"><?= $precioTotal - round(calculadoraPrecios::calculadoraDescuento($arrayPedido),2)?>€</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        }else{?>
            <div class="d-flex justify-content-center" >
                <p id="carrito_vacio" style="font-size: 2.5rem">La cesta está vacía!</p>
            </div>
        <?php } ?>

        <?php
        require_once 'footer.php';
        ?>
    </body>

</html>
