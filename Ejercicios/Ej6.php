<?php
/* 6. Mostrar una tabla de HTML con las tablas de multiplicar del 1 al 10.
 */
$multiplicando;
$multiplicador;

echo "<table text-align:center; border=5>";
echo "<tr>";
for ($tabla=1; $tabla<=10  ; $tabla++) { 
	echo "<td>Tabla del $tabla </td>";
}
echo "</tr>";
echo "<tr>";
for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 
	for ($multiplicando=01; $multiplicando <=10 ; $multiplicando++) { 
		echo "<td>$multiplicando X $multiplicador =";
		echo ($multiplicando *$multiplicador);
		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>