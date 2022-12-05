<?php
class Postres extends Productos{

    public function __construct($id_producto,$tipo_producto,$nombre_producto,$precio_producto,$ingredientes,$imagen){
        Parent::__construct($id_producto,$tipo_producto,$nombre_producto,$precio_producto,$ingredientes,$imagen);
        
    }

}