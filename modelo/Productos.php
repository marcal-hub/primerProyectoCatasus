<?php

abstract class Productos {
    protected $id_producto;
    protected $tipo_producto;
    protected $nombre_producto;
    protected $precio_producto;
    protected $ingredientes = [];
    protected $imagen;

    public function __construct($id_producto, $tipo_producto,$nombre_producto,$precio_producto,$ingredientes,$imagen){
        $this->id_producto = $id_producto;
        $this->tipo_producto = $tipo_producto;        
        $this->nombre_producto = $nombre_producto;        
        $this->ingredientes = $ingredientes;        
        $this->precio_producto = $precio_producto;
        $this->imagen = $imagen;
    }

    public function getTipo_producto(){
        return $this->tipo_producto;
    }


    public function setTipo_producto($tipo_producto){
        $this->tipo_producto = $tipo_producto;

        return $this;
    }

    public function getPrecio_producto(){
        return $this->precio_producto;
    }


    public function setPrecio_producto($precio_producto){
        $this->precio_producto = $precio_producto;

        return $this;
    }


    public function getNombre_producto(){
        return $this->nombre_producto;
    }


    public function setNombre_producto($nombre_producto){
        $this->nombre_producto = $nombre_producto;

        return $this;
    }


    public function getIngredientes(){
        return $this->ingredientes;
    }


    public function setIngredientes($ingredientes){
        $this->ingredientes = $ingredientes;

        return $this;
    }


    public function getId_producto(){
        return $this->id_producto;
    }


    public function setId_producto($id_producto){
        $this->id_producto = $id_producto;

        return $this;
    }

    public function getImagen(){
        return $this->imagen;
    }


    public function setImagen($imagen){
        $this->imagen = $imagen;

        return $this;
    }
}