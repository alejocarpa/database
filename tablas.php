<?php 
session_start();
$numero_cedula = $_GET['cedula'];
?>
<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximun-scale=1" />
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css" />
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
	<title>Datos</title>
</head>
<body>
	
	<div data-role="page" id="pagina2" >
		<div data-role="header" data-add-back-btn="true" data-back-btn-text="Atras" data-back-btn-theme="w" data-position="fixed">
			<h1>TITULO 2</h1>
		</div>
		<?php 
		$array = json_decode($_SESSION['resultado']);
		//print_r($array);
		//echo $array[2]->ciu_nombre;
		?>
		<?php 
		for($i=0;$i<count($array);$i++){
			if($numero_cedula==$array[$i]->ciu_docume){
		?>
		<div data-role="content">
			<h2><?php echo $array[$i]->ciu_nombre." ".$array[$i]->ciu_apelli; ?></h2>
		</div>
		<div data-role="content">
			<table data-role="table" data-mode="reflow" class="ui-responsive" >
				<thead>
					<tr>
						<th>Codigo</th>
						<th>Nombre 1</th>
						<th>Apellido 1</th>
						<th>N&deg Cedula</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $array[$i]->ciu_id; ?></td>
						<td><?php echo $array[$i]->ciu_nombre; ?></td>
						<td><?php echo $array[$i]->ciu_apelli; ?></td>
						<td><?php echo $array[$i]->ciu_docume; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<?php 
			}
		}
		?>
		<div data-role="footer" data-position="fixed">
			<div data-role="navbar">
				<ul data-role="listview">
					<li><a href="#">Home</a></li>
					<li><a href="#">Maestros</a></li>
				</ul>
			</div>
			<h4>PIE DE PAGINA 2</h4>
		</div>
	</div>
</body>
</html>