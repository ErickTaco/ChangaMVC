<?php
include('../comunes/header.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>Batumba</title>
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

	<center>Descripción del Grupo Artistico</center>
	</h2>
	<p class="descripcion">Descripción de la página. Aquí puedes escribir todo lo que quieras sobre el contenido que se muestra en la galería de fotos.</p>
	<div class="container">
		<img src="../img/BATUMBA/foto 11.jpg" alt="Foto 1">
		<img src="../img/BATUMBA/IMG_5706.jpg" alt="Foto 2">
		<img src="../img/BATUMBA/IMG_5707.jpg" alt="Foto 3">
		<img src="../img/BATUMBA/IMG_6282.jpg" alt="Foto 4">
	</div>
</body>
<?php
include('../comunes/footer.php');
?>

</html>