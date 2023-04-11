<?php
include('../comunes/header.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>La Wazzaba Barrial Band</title>
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
		<center>Galeria de Fotos La Wazzaba Barrial Band</center>
	</h1>
	<ul>
		<li><a href="batumba.php">Grupo Artistico BATUMBA</a></li>
		<li><a href="la_changa_estail.php">Grupo Artistico LA CHANGA ESTAIL</a></li>
		<li><a href="la_comadre_radio_barrial.php">Grupo Artistico LA COMADRE RADIO BARRIAL</a></li>
		<li><a href="index.php">INDEX</a></li>
		<li><a href="poncho_viejo.php">Grupo Artistico PONCHO VIEJO</a></li>
		<li><a href="teatro_colectivo_la_changa.php">Grupo Artistico TEATRO COLECTIVO LA CHANGA</a></li>
	</ul>
	<h2>
		<center>Descripción del Grupo Artistico</center>
	</h2>
	<p class="descripcion">Descripción de la página. Aquí puedes escribir todo lo que quieras sobre el contenido que se muestra en la galería de fotos.</p>
	<div class="container">
		<img src="../img/LA_WAZZABA_BARRIAL_BAND/70318743_3004892996251659_8722370406788366336_o.jpg" alt="Foto 1">
		<img src="../img/LA_WAZZABA_BARRIAL_BAND/83477392_526876947948754_8720316020851474432_n.jpg" alt="Foto 2">
		<img src="../img/LA_WAZZABA_BARRIAL_BAND/IMG_7464.jpg" alt="Foto 3">
		<img src="../img/LA_WAZZABA_BARRIAL_BAND/IMG_7649.jpg" alt="Foto 4">
		<img src="../img/LA_WAZZABA_BARRIAL_BAND/IMG_8760.jpg" alt="Foto 5">
		<img src="../img/LA_WAZZABA_BARRIAL_BAND/IMG_8762.jpg" alt="Foto 6">
		<img src="../img/LA_WAZZABA_BARRIAL_BAND/IMG_8776.jpg" alt="Foto 7">
	</div>
</body>
<?php
include('../comunes/footer.php');
?>

</html>