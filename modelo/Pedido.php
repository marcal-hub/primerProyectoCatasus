<?php
    class Pedido{
        public $producto;
        public $cantidad;
        
        public function __construct($producto){
            $this -> producto = $producto;
            $this -> cantidad = 1;             
        }


        public function getProducto(){
                return $this->producto;
        }


        public function setProducto($producto){
                $this->producto = $producto;

                return $this;
        }


        public function getCantidad(){
                return $this->cantidad;
        }


        public function setCantidad($cantidad){
                $this->cantidad = $cantidad;

                return $this;
        }

        public function calculaPrecio(){
            return $this->getProducto()->getPrecio_producto() * $this->getCantidad();
        }

    }
?>