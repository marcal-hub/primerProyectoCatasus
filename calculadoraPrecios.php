<?php

Class calculadoraPrecios{

    public static function calculadoraPrecioTotal($productos){
        $precioTotal = 0;
        foreach ($productos as $producto) {
            $precioUnitario = $producto->calculaPrecio();
            $precioTotal += $precioUnitario;
        }
        return $precioTotal;
    }

    
    public static function calculadoraDescuento($productos){
        $descuento = 0;
        $precioTotal = 0;
        foreach ($productos as $producto) {
            $precioUnitario = $producto->calculaPrecio();
            $precioTotal += $precioUnitario;
        }

        if (count($productos)>3){
            $descuento = $precioTotal*0.2;
        }
        return $descuento;
    }
}
?>