<?php

class users{
    private $nombre;
    private $apellido;
    private $contra;
    private $fecha;
    private $correo;
    private $rol;

    public function __construct($nombre,$apellido,$contra,$fecha,$correo,$rol){
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> contra = $contra;
        $this -> fecha = $fecha;
        $this -> correo = $correo;
        $this -> rol = $rol;
    }

    

    public function Info(clientes $Cliente){
        
        return "
        <h1>Información User</h1> </br>
        Nombre :" .$this->$nombre."<br>
        Apellido: " .$this->$apellido."<br>
        Fecha: " .$this->$fecha."<br>
        Correo: " .$this->$correo;


    }


    public function getNombre(){
        return $this->nombre;
    }

 
    public function setNombre($nombre){
        $this->nombre = $nombre;

        return $this;
    }

 
    public function getApellido(){
        return $this->apellido;
    }


    public function setApellido($apellido){
        $this->apellido = $apellido;

        return $this;
    }


    public function getContra(){
        return $this->contra;
    }


    public function setContra($contra){
        $this->contra = $contra;

        return $this;
    }

    public function getFecha(){
        return $this->fecha;
    }


    public function setFecha($fecha){
        $this->fecha = $fecha;

        return $this;
    }


    public function getCorreo(){
        return $this->correo;
    }


    public function setCorreo($correo){
        $this->correo = $correo;

        return $this;
    }


    public function getRol(){
        return $this->rol;
    }


    public function setRol($rol){
        $this->rol = $rol;

        return $this;
    }
}

?>