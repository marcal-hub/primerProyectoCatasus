<?php
include 'cabecera.php';

$apellido = "Serrano";
function salutacion($nombre){
    global $apellido;
    echo "hola ".  $nombre . " " . $apellido;
    
}

$nombre = "Carlos";
salutacion($nombre);

echo "<br>numero aleatorio ". rand(10,20);


include 'footer.php';
?>