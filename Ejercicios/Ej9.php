<?php
/*
Crear un array con el contenido de la tabla y mostrarlo en un sitio web html:
ACCION AVENTURA DEPORTES
GTA ASSASINS FIFA 19
COD CRASH PES 19
PUGB Prince of Persia MOTO GP 19
*/


/* Creating a multidimensional array. */
$listaVideojuegos = array(
    'ACCION' => array('GTA','COD','PUGB'),
    'AVENTURA' => array('ASSASINS','CRASH','Prince of Persia'),
    'DEPORTES' => array('FIFA 19','PES 19','MOTO GP 19'),
    
);

echo '<table border="2">';

echo '<tr>';
/* Iterating through the keys of the array and printing them. */
foreach (array_keys($listaVideojuegos) as $genero){ 
    echo '<td>'.$genero.'</td>';
}
echo '</tr>';

/* Creating a table with the video games and their respective genres. */
for ($l=0; $l < count($listaVideojuegos[$genero]) ; $l++) { 

    echo '<tr>';
    /* Iterating through the keys of the array and printing them. */
    foreach (array_keys($listaVideojuegos) as $genero){ 
        echo '<td>'.$listaVideojuegos[$genero][$l].'</td>';
    }
    echo '</tr>';
}

echo '</table>';


/*
$a = [
    [
            'Nombre' => 'Mauro',
            'Apellido' => 'Chojrin',
            'Correo' => 'mauro.chojrin@leewayweb.com',
    ],
    [
            'Nombre' => 'Alberto',
            'Apellido' => 'Loffatti',
            'Correo' => 'aloffatti@hotmail.com',
    ],
    [
            'Nombre' => 'Foo',
            'Apellido' => 'Bar',
            'Correo' => 'foo_bar@example.com',
    ]
];


echo '<table border="1">';
foreach ( $a as $r ) {
        echo '<tr>';
        foreach ( $r as $v ) {
                echo '<td>'.$v.'</td>';
        }
        echo '</tr>';
}
echo '</table>';


$numeros = [1,2,3,4,5];
$peliculas = array("Superman","Los Vengadores","Batman","Cars");

Showing the content of the array.
var_dump($peliculas);

echo "<ul>";
for($i=0;$i < count($peliculas);$i++){
  echo "<li>".$peliculas[$i] ."</li>"; 
}
echo "</ul>";

echo "<ul>";
foreach($peliculas as $pelicula){
  echo "<li>".$pelicula."</li>"; 
}
echo "</ul>";

$alumnos = array(
  array(
    'nombre' => 'Luis',
    'mote' => 'Luisito'
  ),
  array(
    'nombre' => 'Dani',
    'mote' => 'Ricopollo'
  )
);

echo $alumnos[0]['nombre'];
echo $alumnos[1]['nombre'];

echo "<ul>";
foreach($alumnos as $key => $alumno){
  echo "<li>". $alumno['nombre'].", ".$alumno['mote']. "</li>";
}

echo "</ul>";

$alumno_luis = array(
    'nombre' => 'Luis',
    'mote' => 'Luisito'
  );


echo "<ul>";
foreach($alumno_luis as $datos){
  echo "<li>". $datos. "</li>";
}
echo "</ul>";


echo "<ul>";
foreach($alumno_luis as $key => $datos){
  echo "<li>". $key. ":".$datos . "</li>";
}
echo "</ul>";
*/

?>