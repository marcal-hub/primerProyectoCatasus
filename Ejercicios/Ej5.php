<?php
/* 
 Ejercicio 5. Hacer un programa que muestre todos los numeros entre dos numeros que nos lleguen por la URL($_GET)
 */
if (isset($_GET['numero1']) and isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    //Por si el numero2 es mas grande que el numero1
    if($numero1<=$numero2){
    for($i=$numero1;$i<=$numero2;$i++){ 
        echo $i . '<br>';
    }
    }else{
        for($j=$numero2;$j<=$numero1;$j++){ 
            echo $j . '<br>';
        }
    }
}else {
    echo 'Faltan parametros por recibir';
}

//Pasar parametros por URL
//?numero1=10&numero2=10
?>