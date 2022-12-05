<?php
/* 
Ejercicio 4. Recoger dos numeros por la url(Parametros GET) y hacer todas las 
 * operaciones basicas de una calculadora(suma, resta, multiplicaion y division)
 * de esos dos numeros.
 */

 if (isset($_GET['numero1']) and isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2']; 
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $mult = $numero1 * $numero2;
    $div = $numero1 / $numero2;
    
    echo 'Suma de los 2 numeros = ' . $suma . '<br>';
    echo 'Resta de los 2 numeros = ' . $resta . '<br>';
    echo 'Multiplicacion de los 2 numeros = ' . $mult . '<br>';
    echo 'Division de los 2 numeros = ' . $div . '<br>'; 


 }else {
    echo 'Faltan parametros por recibir';
}

//Pasar parametros por URL
//?numero1=10&numero2=10
?>