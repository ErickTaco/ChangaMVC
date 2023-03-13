<?php

require('../modelo/login.php');
require('../modelo/conexion.php');
require('../controlador/controlador.php');

session_start();

if ($_SESSION['Username']) {
    echo 'bienveidov' . $_SESSION['Username'];
    require_once("../controlador/controlador.php");

    $datos = new controlador();

    $resultado = $datos->MostrarInformacion();
} else {
    header('location:../web/login.php');
}



?>
<?php

?>

<style>
    .mo {
        width: 90%;
        height: 150px;
    }
</style>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>JSP Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>
    <h1>Hola <?php echo  $_SESSION['Username']; ?>
        <a href="../controlador/controlador.php?accion=salir">salir</a>
    </h1>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th colspan="2" scope="col" class="text-center">Configuracion De Nuestra Pagina

                </th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">pagina</th>
                <td><button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#agregarProductoModal">Success</button></td>
            </tr>
            <tr>
                <th scope="row">cartelera</th>
                <td><button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#agregarProductoModal2">Success</button></td>
            </tr>
            <tr>
                <th scope="row">talleres</th>
                <td><button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#agregarProductoModal3">Success</button></td>
            </tr>

            <div class="modal fade" id="agregarProductoModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header text-black" style="background-color: #00659B;">
                            <h5 class="modal-tittle" style="color: white">Editar</h5>

                        </div>

                        <form action="../controlador/controlador.php?accion=editarLaChanga" method="POST" class="was-validated" enctype="multipart/form-data">
                            <div class="modal-body">


                                <div class="container-fluid mt-1 me-1">

                                    <div class="row" style="justify-content: center">
                                        <?php foreach ($resultado as $roow) { ?>
                                            <div class="card m-5" style="width: 10rem;background: transparent;">
                                                <img src="../img/<?php echo $roow['carusel']; ?>" class="img-fluid" alt="...">
                                                <a href="../controlador/controlador.php?accion=editarCarusel&IdFoto=<?php echo $roow['id']; ?>">
                                                    <button type="button" class="btn btn-outline-warning">Warning</button>
                                                </a>
                                            </div>
                                        <?php } ?>
                                    </div>

                                </div>










                                <label for="exampleFormControlTextarea4">Texto Historia</label>
                                <br><textarea class="mo" name="txtHistoria"> <?php foreach ($resultado as $row) { ?> <?php echo $row['historia']; ?> <?php } ?></textarea>






                                <div class="form-group">
                                    <div class="col-md-6">
                                        <img src="" class="img-fluid" alt="imgencenttro">
                                        <input type="file" class="form-control" name="fotoHis" value="<?php foreach ($resultado as $row) { ?>  <?php echo $row['imgHistoria']; ?>  <?php } ?>">
                                    </div>
                                </div>


                                <div class="form-group purple-border">
                                    <label for="exampleFormControlTextarea4">Texto Mision</label>
                                    <input type="text" required class="form-control" value=" <?php foreach ($resultado as $row) { ?>  <?php echo $row['Mision']; ?>  <?php } ?>" name="txtMision" />
                                </div>



                                <label for="exampleFormControlTextarea4">Texto Vision</label>
                                <input type="text" required class="form-control" value=" <?php foreach ($resultado as $row) { ?>  <?php echo $row['Vision']; ?>  <?php } ?>" name="txtVision" />




                                <div class="modal-footer">
                                    <button class="btn btn-success" type="submit" name="editar" value="editar">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="agregarProductoModal2">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header text-black" style="background-color: #00659B;">
                            <h5 class="modal-tittle" style="color: white">Editar</h5>

                        </div>

                        <form action="conexiones/editar.php" method="POST" class="was-validated" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="container-fluid mt-1 me-1">
                                    <div class="row" style="justify-content: center">
                                        <?php foreach ($res as $roow) { ?>
                                            <div class="card m-5" style="width: 10rem;background: transparent;">
                                                <h5> <?php echo $roow['titulo']; ?> </h5>
                                                <img src="img/<?php echo $roow['imgEvento']; ?>" class="img-fluid" alt="...">
                                                <a href="conexiones/cartelera/carteleraMensual/seleccionaInformacionCartelera.php?IdEvento=<?php echo $roow['id']; ?>">
                                                    <button type="button" class="btn btn-outline-warning">Warning</button>
                                                </a>

                                                <a href="conexiones/cartelera/carteleraMensual/eliminarEventoMensu.php?IdEvento=<?php echo $roow['id']; ?>">
                                                    <button type="button" class="btn btn-outline-warning">Eliminar</button>
                                                </a>

                                            </div>
                                        <?php } ?>

                                        <a href="conexiones/cartelera/carteleraMensual/agregarInfEventoMen.php">
                                            <button type="button" class="btn btn-outline-warning">Agregar</button>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </form>





                        <h1>Eventos Anuales</h1>

                        <form action="conexiones/editar.php" method="POST" class="was-validated" enctype="multipart/form-data">
                            <div class="modal-body">


                                <div class="container-fluid mt-1 me-1">
                                    <div class="row" style="justify-content: center">
                                        <?php foreach ($resA as $roow) { ?>
                                            <div class="card m-5" style="width: 10rem;background: transparent;">
                                                <h5> <?php echo $roow['titulo']; ?> </h5>
                                                <img src="img/<?php echo $roow['imgEvento']; ?>" class="img-fluid" alt="...">
                                                <a href="conexiones/cartelera/carteleraAnual/seleccionaInformacionCarteleraAnual.php?IdEvento=<?php echo $roow['id']; ?>">
                                                    <button type="button" class="btn btn-outline-warning">Warning</button>
                                                </a>

                                                <a href="conexiones/cartelera/carteleraAnual/eliminarEventoMensuAnu.php?IdEvento=<?php echo $roow['id']; ?>">
                                                    <button type="button" class="btn btn-outline-warning">Eliminar</button>
                                                </a>

                                            </div>
                                        <?php } ?>

                                        <a href="conexiones/cartelera/carteleraAnual/agregarInfEventoMenAnual.php">
                                            <button type="button" class="btn btn-outline-warning">Agregar</button>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </form>









                    </div>
                </div>
            </div>



            <div class="modal fade" id="agregarProductoModal3">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header text-black" style="background-color: #00659B;">
                            <h5 class="modal-tittle" style="color: white">Editar</h5>

                        </div>

                        <form action="conexiones/editar.php" method="POST" class="was-validated" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="container-fluid mt-1 me-1">
                                    <div class="row" style="justify-content: center">
                                        <?php foreach ($res as $roow) { ?>
                                            <div class="card m-5" style="width: 10rem;background: transparent;">
                                                <h5> <?php echo $roow['titulo']; ?> </h5>
                                                <img src="img/<?php echo $roow['imgEvento']; ?>" class="img-fluid" alt="...">
                                                <a href="conexiones/cartelera/carteleraMensual/../../talleres/seleccionaInformacionTalleres.php?IdTallere=<?php echo $roow['id']; ?>">
                                                    <button type="button" class="btn btn-outline-warning">Warning</button>
                                                </a>

                                                <a href="conexiones/cartelera/carteleraMensual/eliminarEventoMensu.php?IdEvento=<?php echo $roow['id']; ?>">
                                                    <button type="button" class="btn btn-outline-warning">Eliminar</button>
                                                </a>

                                            </div>
                                        <?php } ?>

                                        <a href="conexiones/cartelera/carteleraMensual/agregarInfEventoMen.php">
                                            <button type="button" class="btn btn-outline-warning">Agregar</button>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </form>





                    </div>
                </div>
            </div>


        </tbody>
    </table>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://kit.fontawesome.com/d826e2fbf6.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>