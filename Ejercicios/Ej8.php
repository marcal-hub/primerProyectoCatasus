<?php
//Hacer un programa en PHP que tenga un array con 8 numeros enteros y que haga lo siguiente:
//- Ordenarlo y mostrarlo
$array = array(44, 33, 27, 12, 89, 76, 59, 1);
sort($array);
echo 'Array completa i ordenada: ';
for ($i=0; $i < count($array); $i++) { 
    echo $array[$i];
    if($i<(count($array) -1)){
        echo ', ';
    }
}
//- Mostrar su longitud
echo '<br> Longitud de l\'array: ' . count($array) . '<br>';
//- Buscar algun elemento (buscar por el parametro que me llegue por la url)
if (isset($_GET['numero'])) {
    $numero = $_GET['numero'];
    $buscar = array_search($numero,$array);
    /* Comprobando si el valor de es un número. Si es así, se hará eco de "Este numero SI esta en
    l'array" y si no lo está, se hará eco de "Este numero NO esta en l'array". */
    if (is_numeric($buscar)) {
        echo 'Este numero SI esta en l\'array';
    }else{
        echo 'Este numero NO esta en l\'array';
    }
}

//Pasar parametros por URL
//?numero=10
?>