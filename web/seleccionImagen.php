<html>
<?php

require_once("../controlador/controlador.php");

$datos = new controlador();

$filas = $datos->EditarCarusel();

?>
<form action="controlador.php?accion=GuardarFoto" method="POST" class="was-validated" enctype="multipart/form-data">
    <?php foreach ($filas as $row) { ?>
        <input type="number" name="IdFoto" id="IdFoto" value="<?php echo $row['id']; ?>">

    <?php } ?>


    <input type="file" name="fotoCarusel" id="fotoCarusel">
    <button class="btn btn-success" type="submit" name="editar" value="editar">Guardar</button>
</form>



</html>