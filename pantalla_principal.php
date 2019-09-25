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
	<title>Ejemplo de jquery mobile</title>
</head>
<body>
	<div data-role="page" id="pagina1" data-add-back-btn="true">
		<div data-role="header" data-position="fixed">
			<h1>TITULO</h1>
			<div data-role="navbar">
				<ul data-role="listview">
					<li><a href="#" class="ui-btn-active" data-icon="home"></a></li>
				</ul>
			</div>
		</div>
		<?php 
		require 'sync.php';
		?>
		
		<div data-role="content">
			<h2>CONTENIDO</h2>
			<a href="tablas.html" data-role="button" data-transition="flip" data-icon="check" data-inline="true">Nuevo registro</a>
			<a href="buscar.php" data-role="button" data-transition="flip" data-icon="check" data-inline="true">Buscar registro</a>
		</div>
		
		<div data-role="content">
			<!-- 
			data-inset=true : para que la lista no ocupe todo el ancho de la pantalla 
			-->
			<ul data-role="listview" data-inset="true">
				<li data-icon="star"><a href="#locales">Locales</a></li>
				<li><a href="#delivery">Delivery</a></li>
				<li><a href="#productos">Productos</a></li>
			</ul>
		</div>
		
		<div data-role="content">
			<ol data-role="listview" data-inset="true" data-filter="true" data-filter-placeholder="¿Que persona buscas?">
				<li>Erika</li>
				<li>Farida</li>
				<li>Martin</li>
				<li>Faride</li>
				<li>Simon</li>
				<li>Alejandro</li>
				<li>Chipichape</li>
			</ol>
		</div>
		
		<div data-role="content">
			<form action="pagina2.html" method="get">
				<div data-role="fieldcontain">
					<label for="nombre">Ingrese su nombre:</label>
					<input type="text" name="nombre" id="nombre" data-mini="true" />
					<label>Ingrese su correo electronico:</label>
					<input type="text" name="correo" data-mini="true" />
					<label>Buscar:</label>
					<input type="search" name="buscar" id="buscar" data-mini="true" />
					<label>Slider:</label>
					<input type="range" name="slider" id="slider" max="100" min="00" value="20" step="20" data-highlight="true"  />
					<label>Supscrito? </label>
					<select name="flip_2" id="flip_2" data-role="slider">
						<option value="off">Si</option>
						<option value="on">No</option>
					</select>
					<fieldset data-role="controlgroup" >
						<legend>Elija una opcion de pago:</legend>
						<input name="radio" id="radio-1" type="radio" value="efectivo" checked>
						<label for="radio-1">Pago en efectivo</label>
						<input name="radio" id="radio-2" type="radio" value="credito">
						<label for="radio-2">Pago con tarjeta de credito</label>
						<input name="radio" id="radio-3" type="radio" value="debito">
						<label for="radio-3">Pago con tarjeta debito</label>
					</fieldset>
					<fieldset data-role="controlgroup">
						<legend>Seleccione el/los deportes que practica</legend>
						<input name="checkbox-1" id="checkbox-1" type="checkbox">
						<label for="checkbox-1">Futbol</label>
						<input name="checkbox-2" id="checkbox-2" type="checkbox">
						<label for="checkbox-2">Tenis</label>
						<input name="checkbox-3" id="checkbox-3" type="checkbox">
						<label for="checkbox-3">Natacion</label>
					</fieldset>
					<label for="selectmenu">Bebidas calientes:</label>
					<select name="selectmenu" id="selectmenu" data-native-menu="true" multiple="multiple">
						<option value="americano">Americano</option>
						<option value="machiatto_c">Machiatto</option>
						<option value="expreso">Espresso</option>
						<option value="irlandes">Cafe irlandes</option>
						<option value="moka">Cafe moka</option>
						<option value="capuchino">Capuchino</option>
						<option value="chocolate">Chocolate</option>
						<option value="te">Te</option>
					</select>
					<br>
					<select name="equipos" id="equipos">
						<option value="">Seleccione un equipo de futbol..</option>
						<optgroup label="Inglaterra">
							<option value="manchestes">Manchester untd</option>
						</optgroup>
						<optgroup label="Espa�a">
							<option value="madrid">Real madrid el mejor</option>
						</optgroup>
						<optgroup label="Italia">
							<option value="juventus">Juventus</option>
						</optgroup>
					</select>
					<br>
					<input data-role="date" data-inline="true" type="date">
				</div>
				<input type="submit" value="enviar" data-mini="true" />
			</form>
		</div>
		<div data-role="content">
			<div data-role="collapsible" data-collapsed="true" data-iconpos="right">
				<h4>Titulo</h4>
				<p>Esto es el contenido de un componente desplegable</p>
			</div>
		</div>
		<div data-role="content">
			<div data-role="collapsible-set">
				<div data-role="collapsible">
					<h3>Cataratas del Iguazu</h3>
					<p>En la proviancia de misiones, se encuentra las enormes cataratas del iguazu, que ademas de ser una maravilla de la naturaleza poseen...</p>
				</div>
				<div data-role="collapsible">
					<h3>Bariloche</h3>
					<p>Bariloche ofrece opciones imperdibles: la caminata del cerro otto, el circuito chico....</p>
				</div>
				<div data-role="collapsible" data-collapsed="true">
					<h3>El calafate</h3>
					<p>El parque nacional los glaciares guarda uno de los tesoros de la Argentina....</p>
				</div>
			</div>
		</div>
		<div data-role="content">
			<h2>Popup</h2>
			<a href="#popupBasico" data-rel="popup" data-role="button">Popup basico</a>
			<div data-role="popup" id="popupBasico">
				<p>Esto es un popup basico</p>
			</div>
		</div>
		<div data-role="content">
			<h2>Popup</h2>
			<p>Esto es un parrafo con tooltip. <a href="#popup" data-rel="popup" class="my-tooltip-btn ui-btn ui-alt-icon ui-nodisc-icon ui-btn-inline ui-icon-clock ui-btn-icon-notext" title="Leer mas">Leer mas</a></p>
			<div data-role="popup" id="popup">
				<p>Este es el contenido del tooltip</p>
			</div>
		</div>
		
		<div data-role="content">
			<h2>Visualizador de fotos</h2>
			<a href="#popupIMG_001" data-rel="popup" data-position-to="window" data-transition="fade">
				<img class="popphoto" src="img/IMG_001.jpg" style="width:30%">
			</a>
			<a href="#popupIMG_002" data-rel="popup" data-position-to="window" data-transition="fade">
				<img class="popphoto" src="img/IMG_002.jpg" style="width:30%">
			</a>
			<a href="#popupIMG_003" data-rel="popup" data-position-to="window" data-transition="fade">
				<img class="popphoto" src="img/IMG_003.jpg" style="width:30%">
			</a>
			<div data-role="popup" id="popupIMG_001" data-overlay-theme="b">
				<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Cerrar</a>
				<img class="phpphoto" src="img/IMG_001.jpg" style="max-height:512px;">
			</div>
			<div data-role="popup" id="popupIMG_002" data-overlay-theme="b">
				<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Cerrar</a>
				<img class="phpphoto" src="img/IMG_002.jpg" style="max-height:512px;">
			</div>
			<div data-role="popup" id="popupIMG_003" data-overlay-theme="b">
				<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Cerrar</a>
				<img class="phpphoto" src="img/IMG_003.jpg" style="max-height:512px;">
			</div>
		</div>
		<div data-role="content">
			<a href="#popupMenu" data-rel="popup" data-transition="slideup" class="ui-btn ui-corner-all ui-shadow">Ver...</a>
			<div data-role="popup" id="popupMenu">
				<ul data-role="listview" data-inset="true" style="min-width:210px;">
					<li data-role="list-divider">Elije una opcion</li>
					<li><a href="#">Editar</a></li>
					<li><a href="#">Copiar</a></li>
					<li><a href="#">Pegar</a></li>
					<li><a href="#">Borrar</a></li>
				</ul>
			</div>
		</div>
		
		
		<div data-role="controlgroup" data-type="horizontal">
			<a href="#" data-role="button" data-transition="flip" data-icon="check" >Boton1</a>
			<a href="#" data-role="button" data-transition="flip" data-icon="check" >Boton2</a>
			<a href="#" data-role="button" data-transition="flip" data-icon="check" >Boton3</a>
		</div>
		
		<div data-role="footer" data-position="fixed">
			<h4>PIE DE PAGINA</h4>
		</div>
	</div>
</body>
</html>
