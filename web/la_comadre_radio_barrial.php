<?php
include('../comunes/header.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>La Comadre Radio Barrial</title>
	<style>
		.descripcion {
			font-size: 1.2em;
			font-style: italic;
		}

		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			padding: 20px;
		}

		.container img {
			width: 250px;
			height: 250px;
			object-fit: cover;
			margin: 10px;
		}
	</style>
</head>

<body>
	<h1>
		<center>Galeria de Fotos La Comadre Radio Barrial</center>
	</h1>
	<ul>
		<li><a href="batumba.php">Grupo Artistico BATUMBA</a></li>
		<li><a href="la_changa_estail.php">Grupo Artistico LA CHANGA ESTAIL</a></li>
		<li><a href="index.php">INDEX</a></li>
		<li><a href="la_wazzaba_barrial_band.php">Grupo Artistico LA WAZZABA BARRIAL BAND</a></li>
		<li><a href="poncho_viejo.php">Grupo Artistico PONCHO VIEJO</a></li>
		<li><a href="teatro_colectivo_la_changa.php">Grupo Artistico TEATRO COLECTIVO LA CHANGA</a></li>
	</ul>
	<h2>
		<center>Descripción del Grupo Artistico</center>
	</h2>
	<p class="descripcion">Descripción de la página. Aquí puedes escribir todo lo que quieras sobre el contenido que se muestra en la galería de fotos.</p>
	<div class="container">
		<img src="../img/LA_COMADRE_RADIO_BARRIAL/IMG_0104.jpg" alt="Foto 1">
		<img src="../img/LA_COMADRE_RADIO_BARRIAL/IMG_0110.jpg" alt="Foto 2">
	</div>
</body>
<?php
include('../comunes/footer.php');
?>

</html>