<?php 
session_start();

include 'conexion.php';

$select="select ciu_id,ciu_nombre,ciu_apelli,ciu_docume from ciudadano limit 10";				
$result = $link->query($select);

$i=0;
while($row = mysqli_fetch_array($result)) {
	$rawdata[$i] = $row;
    $i++;
}

mysqli_close($link);

echo $json=json_encode($rawdata);

$_SESSION['resultado']=$json;

//die("aqui");
?>
