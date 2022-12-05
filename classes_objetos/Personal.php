<?php

abstract class Personal{

    protected $nom;
    protected $direccio;
    protected $data_incorporacio;
    protected $equipInformatic;
    protected $sou_base;
    protected $irpf;

    function __construct($nom,$direccio,$data_incorporacio,$sou_base,$irpf){
        $this->nom = $nom;;
        $this->direccio = $direccio;;
        $this->data_incorporacio = $data_incorporacio;
        $this->sou_base = $sou_base;
        $this->irpf = $irpf;
    }

    abstract function calculaSouMensualNet();

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;

        return $this;
    }

    public function getDireccio(){
        return $this->direccio;
    }

    public function setDireccio($direccio){
        $this->direccio = $direccio;

        return $this;
    }

    public function getData_incorporacio(){
        return $this->data_incorporacio;
    }

    public function setData_incorporacio($data_incorporacio){
        $this->data_incorporacio = $data_incorporacio;

        return $this;
    }

    public function getSou_base(){
        return $this->sou_base;
    }
 
    public function setSou_base($sou_base){
        $this->sou_base = $sou_base;

        return $this;
    }

    public function getIrpf(){
        return $this->irpf;
    }

    public function setIrpf($irpf){
        $this->irpf = $irpf;

        return $this;
    }
}
?>