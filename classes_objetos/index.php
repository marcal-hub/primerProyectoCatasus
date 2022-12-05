<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Base PHP</title>
		<link rel="stylesheet" href="./assets/css/style.css" type="text/css"/>
	</head>
	<body>
	<?php

    include 'Personal.php';
    include 'Treballador.php';
    include 'Repartidor.php';
    include 'TreballadorInformatic.php';
    include 'calculaSous.php';
    include 'Gerents.php';
    

    $llistaTreballadors = array (0 => new Treballador("Ruben","C/las Tortas 24","20/10/2021",12000,0.19), 
    1 => new Treballador("Marco","Av. Barcelona 34","09/03/2022",10000,0.21),
    2 => new Treballador("David","C/ Trinitaris 17","28/02/2022",10000,0.20));

    $llistaInformatics = array (0 => new TreballadorInformatic("Victor","C/las Tortas 24","20/10/2021",18000,0.19,"435431531536"), 
    1 => new TreballadorInformatic("Manel","Av. Barcelona 34","09/03/2022",18000,0.21,"453214324213"),
    2 => new TreballadorInformatic("Bonilla","C/ Trinitaris 17","28/02/2019",50000,0.20,"543453155543"));

    $llistaRepartidor = array (0 => new Repartidor("Julio","C/las Tortas 24","20/10/2021",11000,0.19,665434329), 
    1 => new Repartidor("Dani","Av. Barcelona 34","09/03/2022",11000,0.21,698865437),
    2 => new Repartidor("Eric","C/ Trinitaris 17","28/02/2022",11000,0.20,765455442));

    $llistaGerents = array (0 => new Gerents("Javi","Av.Collserola 43","05/01/2010","Gerent",300,30000,0.20),
    1 => new Gerents ("Javi","Av.Collserola 43","05/01/2010","Gerent",400,30000,0.19),
    2 => new Gerents ("Javi","Av.Collserola 43","05/01/2010","Gerent",200,30000,0.21))
	?>

    <table border="1">
        <h3>TREBALLADORS</h3>
        <tr>
            <td>Nom</td>
            <td>Direccio</td>
            <td>Data incorporacio</td>
            <td>Sou Base</td>
            <td>Sou Net Mensual</td>
            <td>IRPF</td>
            <td>Sou Anual Brut</td>
            <td>Sou Mensual Actualitzat</td>
        </tr>

        <?php
        foreach ($llistaTreballadors as $key => $value) {
        echo "<tr>";
        echo "<td>";
        echo $value->getNom();
        echo "<td>";
        echo $value->getDireccio();
        echo "<td>";
        echo $value->getData_incorporacio();
        echo "<td>";
        echo $value->getsou_base();
        echo "<td>";
        echo $value->calculaSouMensualNet();
        echo "<td>";
        echo $value->getIrpf();
        echo "<td style =color:red>";
        if ($value->getsou_base() < 17000) {
            echo $value->getsou_base() + ($value->getsou_base() * 0.1);
        }
        echo "<td>";
        echo $value->souMensualActualitzat();
        echo "</td>";
        echo "</tr>";
        }
        echo "<tr>";
        echo "<td>";
        echo "TOTAL";
        echo "<td>";
        echo "<td>";
        echo "<td>";
        echo calculaSous::calculaSumaSous($llistaTreballadors);
        echo "</td>";
        echo "</tr>";

        
        
        ?>

    </table>

    <table border="1">
        <h3>TREBALLADORS INFORMATICS</h3>
        <tr>
            <td>Nom</td>
            <td>Direccio</td>
            <td>Data incorporacio</td>
            <td>Sou Base</td>
            <td>Sou Net Mensual</td>
            <td>IRPF</td>
            <td>Equip Informatic</td>
            <td>Sou Anual Brut</td>
            <td>Sou Mensual Actualitzat</td>
        </tr>

        <?php
        foreach ($llistaInformatics as $key => $value) {
        echo "<tr>";
        echo "<td>";
        echo $value->getNom();
        echo "<td>";
        echo $value->getDireccio();
        echo "<td>";
        echo $value->getData_incorporacio();
        echo "<td>";
        echo $value->getsou_base();
        echo "<td>";
        echo $value->calculaSouMensualNet();
        echo "<td>";
        echo $value->getIrpf();
        echo "<td>";
        echo $value->getEquip_informatic();
        echo "<td style =color:red>";
        if ($value->getsou_base() < 17000) {
            echo $value->getsou_base() + ($value->getsou_base() * 0.1);
        }
        echo "<td>";
        echo $value->souMensualActualitzat();
        echo "</td>";
        echo "</tr>";
        }
        echo "<tr>";
        echo "<td>";
        echo "TOTAL";
        echo "<td>";
        echo "<td>";
        echo "<td>";
        echo calculaSous::calculaSumaSous($llistaInformatics);
        echo "</td>";
        echo "</tr>";
        
        ?>

    </table>

    <table border="1">
        <h3>REPARTIDORS</h3>
        <tr>
            <td>Nom</td>
            <td>Direccio</td>
            <td>Data incorporacio</td>
            <td>Sou Base</td>
            <td>Sou Net Mensual</td>
            <td>IRPF</td>
            <td>Mobil</td>
            <td>Sou Anual Brut</td>
            <td>Sou Mensual Actualitzat</td>
        </tr>

        <?php
        foreach ($llistaRepartidor as $key => $value) {
        echo "<tr>";
        echo "<td>";
        echo $value->getNom();
        echo "<td>";
        echo $value->getDireccio();
        echo "<td>";
        echo $value->getData_incorporacio();
        echo "<td>";
        echo $value->getsou_base();
        echo "<td>";
        echo $value->calculaSouMensualNet();
        echo "<td>";
        echo $value->getIrpf();
        echo "<td>";
        echo $value->getMobil();
        echo "<td style =color:red>";
        if ($value->getsou_base() < 17000) {
            echo $value->getsou_base() + ($value->getsou_base() * 0.1);
        }
        echo "<td>";
        echo $value->souMensualActualitzat();
        echo "</td>";
        echo "</tr>";
        }
        echo "<tr>";
        echo "<td>";
        echo "TOTAL";
        echo "<td>";
        echo "<td>";
        echo "<td>";
        echo calculaSous::calculaSumaSous($llistaRepartidor);
        echo "</td>";
        echo "</tr>";
        
        ?>

    </table>

    <table border="1">
        <h3>GERENTS</h3>
        <tr>
            <td>Nom</td>
            <td>Direccio</td>
            <td>Data incorporacio</td>
            <td>Carrec</td>
            <td>Complement</td>
            <td>Sou Base</td>
            <td>Sou Net Mensual</td>
            <td>IRPF</td>
            <td>Sou Anual Brut</td>
            <td>Sou Mensual Actualitzat</td>
        </tr>

        <?php
        foreach ($llistaGerents as $key => $value) {
        echo "<tr>";
        echo "<td>";
        echo $value->getNom();
        echo "<td>";
        echo $value->getDireccio();
        echo "<td>";
        echo $value->getData_incorporacio();
        echo "<td>";
        echo $value->getCarrec();
        echo "<td>";
        echo $value->getComplement();
        echo "<td>";
        echo $value->getsou_base();
        echo "<td>";
        echo $value->calculaSouMensualNet();
        echo "<td>";
        echo $value->getIrpf();
        echo "<td style =color:red>";
        if ($value->getsou_base() < 17000) {
            echo $value->getsou_base() + ($value->getsou_base() * 0.1);
        }
        echo "<td>";
        echo $value->souMensualActualitzat();
        echo "</td>";
        echo "</tr>";
        }
        echo "<tr>";
        echo "<td>";
        echo "TOTAL";
        echo "<td>";
        echo "<td>";
        echo "<td>";
        echo calculaSous::calculaSumaSous($llistaGerents);
        echo "</td>";
        echo "</tr>";
        
        ?>

    </table>

	</body>
</html>



