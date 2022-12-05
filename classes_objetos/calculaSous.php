<?php

class calculaSous{

    static function calculaSumaSous($llistaTreballadors){
    $sumaSou = 0;
        foreach ($llistaTreballadors as $treballador1) {
            $sumaSou += $treballador1 -> getsou_Base();
        }
        echo $sumaSou;
    }
    
}


?>