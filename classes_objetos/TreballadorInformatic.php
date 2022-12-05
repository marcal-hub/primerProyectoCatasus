<?php
//include 'Treballador.php';

class TreballadorInformatic extends Treballador{

    private $Equip_informatic;


    function __construct($nom,$direccio,$data_incorporacio,$sou_base,$irpf,$Equip_informatic){
        Parent::__construct($nom,$direccio,$data_incorporacio,$sou_base,$irpf);
        $this->Equip_informatic=$Equip_informatic;
    }

    public function getEquip_informatic(){
        return $this->Equip_informatic;
    }

    public function setEquip_informatic($Equip_informatic){
        $this->Equip_informatic = $Equip_informatic;

        return $this;
    }
}


?>