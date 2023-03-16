<?php
include('../comunes/header.php')
?>
<html>

<head>
    <title>Teatro</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Link Bootstrap/Estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
    <!-- Link AOS/Animaciones -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Estilos -->
    <style>
        body {
            background-color: #000;
            color: black;
        }

        .name h1 {
            font-weight: 600;
            line-height: 50px;
            color: #FFF;
            font-family: 'Abril Fatface', cursive;
            font-size: 50px;
            text-shadow: 5px 5px 5px #000;
            position: absolute;
            top: 60%;
            left: 42%;
        }

        .name img {
            height: 80vh;
            margin-top: 85px;
        }

        .description {
            margin-top: 50px;
            text-align: center;
        }

        .description .more-info-content {
            background-color: black;
            color: white;
        }

        .description h2 {
            font-size: 35px;
            font-weight: 600;
            padding-left: 30px;
        }

        .gallery {
            padding: 2rem 0;
        }

        .gallery h2 {
            font-size: 30px;
            font-weight: 600;
            background-color: #fff;
            color: black;
        }
    </style>
</head>

<body>
    <!--Imagen-->
    <section id="imagen">
        <div class="container name">
            <img src="../img/teatro6.JPG" alt="" style="width: 100%; " />
            <h1 data-aos="fade-up" data-aos-delay="150" data-aos-duration="2000">Teatro</h1>
        </div>

    </section>
    <!--Fin Imagen-->
    <!--Sección Historia -->
    <section class="description">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="row">
                            <div class=" align-self-center">
                                <h2><b>Un poco acerca del teatro...</b></h2>
                                <p>
                                    En el 2017 se inaugura la biblioteca comunitaria TURUTEKA misma que ha sido levantada
                                    desde la autogestión y la participación de vecinos con donaciones de libros y material
                                    inmueble al momento cuenta con más de 2000 ejemplares de distintas Áreas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section class="container gallery">
        <div class="text-center">
            <h2>Galería de Fotos</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <img src="../img/teatro.JPG" class="w-100 shadow-1-strong rounded mb-4" />
                <img src="../img/teatro1.jpg" class="w-100 shadow-1-strong rounded mb-4" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="../img/teatro5.JPG" class="w-100 shadow-1-strong rounded mb-4" />
                <img src="../img/teatro7.JPG" class="w-100 shadow-1-strong rounded mb-4" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="../img/teatro8.JPG" class="w-100 shadow-1-strong rounded mb-4" />
                <img src="../img/teatro3.JPG" class="w-100 shadow-1-strong rounded mb-4" />
            </div>
        </div>
    </section>
    <!-- Gallery -->

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Inicializar el AOS -->
    <script>
        AOS.init();
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
    <?php
    include('../comunes/footer.php');
    ?>
</body>

</html>