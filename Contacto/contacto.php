<! DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"><meta/>
	<title>Contáctenos</title>
	<!--imporatnte todas las paginas deben tenerlo-->
	<link rel="stylesheet" href="../CSS/otromenu.css">
	<link rel="stylesheet" type="text/css" href="../CSS/carga.css">
	<script src="../JS/carga.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<!--biblioteca Jquery-->
	<script src="../JS/jquery-3.2.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../CSS/fonts/logos.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale = 1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
	<!-- icono pestaña-->
	<link rel="shortcut icon" href="../CSS/IMG/colibri.png">
	<link rel="stylesheet" type="text/css" href="../CSS/contacto/style.css">
	<!-- CSS de contacto -->
	<link rel="stylesheet" type="text/css" href="../CSS/contacto.css">
	<!-- links nuevos -->
	<!--Import Google Icon Font-->
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->

  <!--Let browser know website is optimized for mobile-->
</head>
<body>
	<div id="contenedor_carga">
		<div id="carga">
		</div>
	</div>
	<?PHP
		include("menucontacto.php")//incluir el menu
	?>
	<br>
	<br>
<!--localización exacta del hotel, mediante google maps -->
<div id="map" align="center">
	<iframe src="https://wego.here.com/directions/mix//Casa-campestre-la-cosecha,-km-2.4-v%C3%ADa-Armenia-pueblo-tapao,-036-Armenia:e-eyJuYW1lIjoiQ2FzYSBjYW1wZXN0cmUgbGEgY29zZWNoYSIsImFkZHJlc3MiOiJrbSAyLjQgdlx1MDBlZGEgQXJtZW5pYSAtIHB1ZWJsbyB0YXBhbywgQXJtZW5pYSIsImxhdGl0dWRlIjo0LjUxNDU3OTksImxvbmdpdHVkZSI6LTc1Ljc4NDcsInByb3ZpZGVyTmFtZSI6ImZhY2Vib29rIiwicHJvdmlkZXJJZCI6OTEyMjU3NDM4ODc3MTAxfQ==?map=4.51458,-75.7847,15,normal&fb_locale=es_ES" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<br>
<!--informacion -->
<div class="cuadro">
	<p class="titulo" color="#8bc53e">Información del Contácto</p>
	<div class="cuadro1">
		<span class="icon-user"></span><p class="info">Rubiela Romero Barrero</p>
		<br>
		<span class="icon-mobile2"></span><p class="info">Tel: 315 699 9060</p>
	</div>
	<div class="cuadro2">
		<span class="icon-user"></span><p class="info">Julio C. Santos Duarte</p>
		<br>
		<span class="icon-mobile2"></span><p class="info">Tel: 310 353 6520</p>
	</div>
	<br>
	<div class="cuadro3">
		<span class="icon-mail4"></span><a class="info" href="mailto:santosduartejulio@hotmail.com">santosduartejulio@hotmail.com</a>
		<br>
		<br>
		<span class="icon-mail4"></span><a class="info" href="mailto:ruby6817348@hotmail.com">ruby6817348@hotmail.com</a>
		<br>
		<br>
		<span class="icon-mail4"></span><a class="info" href="mailto:casacampestrelacosecha@gmail.com">casacampestrelacosecha@gmail.com</a>
	</div>
</div>
<br>
<div class="cuadro0">
	<p class="titulo" color="#8bc53e">Envianos un Mensaje</p>
	<br>
	<form  method="post" action="correo.php">
		<input type="text" name="nombre" placeholder="Nombre">
		<input type="number" name="telefono" placeholder="Teléfono">
		<input type="email" name="correo" placeholder="Correo Electrónico">
		<textarea name="mensaje" placeholder="Escribe tu mensaje"></textarea>
		<input type="submit" name="enviar" value="ENVIAR" class="enviar">
	</form>
</div>
<br>
<?PHP
	include("../pie.php")//incluir el pie de pagina
?>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../JS/menu.js"></script>
</body>
</html>
