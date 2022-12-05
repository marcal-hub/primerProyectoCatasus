<?php

class Gerents extends Personal{
    protected $carrec;
    protected $complement;

    function __construct($nom,$direccio,$data_incorporacio,$carrec,$complement,$sou_base,$irpf){
        Parent::__construct($nom,$direccio,$data_incorporacio,$sou_base,$irpf);
        $this-> carrec = $carrec;
        $this-> complement = $complement;

    }
    
    public function calculaSouMensualNet(){//Le sumamos el complemento a los gerentes
        $souNet = $this->sou_base * (1 -$this->irpf) / 12 + $this->complement;
        echo $souNet;
    }

    public function souMensualActualitzat(){
        $this->setComplement($this->complement * 0.5);
        $this->calculaSouMensualNet();
    }

    public function getCarrec(){
        return $this->carrec;
    }

    public function setCarrec($carrec){
        $this->carrec = $carrec;

        return $this;
    }

    public function getComplement(){
        return $this->complement;
    }

    public function setComplement($complement){
        $this->complement = $complement;

        return $this;
    }


}



?>