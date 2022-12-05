<?php

class Treballador extends Personal{

    //sueldoBase*irpf/12
    public function calculaSouMensualNet(){
        $souNet = $this->sou_base * (1 -$this->irpf) / 12;
        echo $souNet;
    }

    public function souMensualActualitzat(){
        if($this->sou_base < 17000){
            $this->setSou_base($this->sou_base * 1.1);
        }
        return $this->calculaSouMensualNet();
    }

}

?>