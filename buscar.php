<?php 
session_start();
?>
<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximun-scale=1" />
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css" />
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
	<title>Buscar</title>
</head>
<body>
	<div data-role="page" id="pagina1" data-add-back-btn="true">
		<div data-role="header" data-add-back-btn="true" data-back-btn-text="Atras" data-back-btn-theme="w" data-position="fixed">
			<h1>TITULO</h1>
			<div data-role="navbar">
				<ul data-role="listview">
					<li><a href="#" class="ui-btn-active" data-icon="home"></a></li>
				</ul>
			</div>
		</div>
		
		<form action="tablas.php" method="get">
			<div data-role="content">
				<h2>BUSCAR</h2>
				<label>Numero de cedula:</label>
				<input type="search" name="cedula" id="cedula" data-mini="true" />
			</div>
			
			<input type="submit" value="Consultar" data-mini="true" />
		</form>
		
		<div data-role="footer" data-position="fixed">
			<h4>PIE DE PAGINA</h4>
		</div>
	</div>
</body>
</html>