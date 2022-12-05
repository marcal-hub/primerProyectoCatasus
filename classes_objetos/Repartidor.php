<?php
//include 'Treballador.php';

class Repartidor extends Treballador{

    protected $mobil;
    
    function __construct($nom,$direccio,$data_incorporacio,$sou_base,$irpf,$mobil){
     Parent::__construct($nom,$direccio,$data_incorporacio,$sou_base,$irpf);
     $this->mobil=$mobil;
    }

    public function getMobil(){
        return $this->mobil;
    }

    public function setMobil($mobil){
        $this->mobil = $mobil;

        return $this;
    }

    public function souMensualActualitzat(){
        $this->setSou_base($this->sou_base * 1.08);
        return $this->calculaSouMensualNet();
    }
}








?>