<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Formulario en PHP</title>
	</head>
	<body>
		<h1>Formulario Operaciones Basicas en PHP</h1>
		<form method="POST">
			<p>
				<label for=""></label></label>
				<input type="number" name="numero1" />
			</p>
			
			<p>
				<label for="numero2"></label>
				<input type="number" name="numero2" />
			</p>
			
			<input type="submit" name="Sumar" value="Sumar"/>
            <input type="submit" name="Restar" value="Restar"/>
            <input type="submit" name="Multiplicar" value="Multiplicar"/>
            <input type="submit" name="Dividir" value="Dividir"/>
		</form>
	</body>
</html>

<?php
//Hacer una interfaz de usuario(formulario) con dos inputs y 4 botones uno para sumar, restar, dividir y multiplicar.

if(isset($_POST['Sumar'])){
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $sumar = $_POST['Sumar'];
    $rslt = $numero1 + $numero2;
    echo 'Suma = ' . $rslt . '<br><br>';


}elseif (isset($_POST['Restar'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $restar = $_POST['Restar'];
    $rslt = $numero1 - $numero2;
    echo 'Resta = ' . $rslt . '<br><br>';


}elseif (isset($_POST['Multiplicar'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $rslt = $numero1 * $numero2;
    echo 'Multiplicación = ' . $rslt . '<br><br>';

    $multiplicar = $_POST['Multiplicar'];
}elseif (isset($_POST['Dividir'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $dividir = $_POST['Dividir'];
    $rslt = $numero1 / $numero2;
    echo 'División = ' . $rslt . '<br><br>';

}
//var_dump($_POST['Dividir']);
?>