<?php
include('../comunes/header.php')

?>
<html>

<head>
    <title>C.C.I.T.</title>
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
            background-color: #FF7C00;
            color: black;
        }

        .name h1 {
            font-weight: 600;
            line-height: 50px;
            color: #FFF;
            font-family: 'Abril Fatface', cursive;
            font-size: 50px;
            text-shadow: 5px 5px 5px #000;
        }

        .name h2 {
            font-family: 'Abril Fatface', cursive;
            color: #FFF;
            margin: 10px 0 0 0;
            font-size: 40px;
            text-shadow: 5px 5px 5px #000;
        }

        .carousel img {
            height: 80vh;
            margin-top: 85px;
        }

        .historia {
            margin-top: 50px;
        }

        .historia .left-image img {
            width: 100%;
            height: 550px;
            overflow: hidden;
        }

        .historia .more-info-content {
            background-color: antiquewhite;
        }

        .historia .right-content {
            padding: 20px 50px 25px 20px;
            /*arriba - derecha - abajo - izquierda*/
            font-size: medium;
        }

        .historia .right-content h2 {
            font-size: 36px;
            font-weight: 600;
            margin-bottom: 19px;
        }


        .talleres {
            padding: 3rem 0;
        }

        .talleres h3 {
            font-weight: 600;
            margin-bottom: 25px;
            background-color: antiquewhite;
        }

        .talleres h4 {
            font-weight: 400;
            font-style: italic;
            font-family: "Roboto Slab";
            margin-bottom: 2rem;
        }

        .talleres h4 {
            font-weight: 400;
            font-style: italic;
            font-family: "Roboto Slab";
            margin-bottom: 2rem;
        }

        .talleres img {
            width: 100%;
            border-radius: 50%;
        }

        .social-media h3 {
            font-weight: 600;
            margin-bottom: 15px;
            background-color: antiquewhite;
        }
    </style>
</head>

<body>
    <!--Carrusel-->
    <div id="carouselExampleIndicators" class="container carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/ccit.JPG" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="../img/ccit3.jpg" class="d-block w-100" alt="..." />
                <!-- Nombre de la página -->
                <div class="name carousel-caption d-none d-md-block">
                    <h1>Centro Cultural</h1>
                    <h2>Independiente Turubamba</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/ccit2.JPG" class="d-block w-100" alt="..." />
                <!-- Nombre de la página -->
                <div class="name carousel-caption d-none d-md-block">
                    <h1>Centro Cultural</h1>
                    <h2>Independiente Turubamba</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/ccith.JPG" class="d-block w-100" alt="..." />
                <!-- Nombre de la página -->
                <div class="name carousel-caption d-none d-md-block">
                    <h1>Centro Cultural</h1>
                    <h2>Independiente Turubamba</h2>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <!--Sección Historia -->
    <section class="historia">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="left-image">
                                    <img src="../img/ccit1.JPG" alt="">
                                </div>
                            </div>
                            <div class="col-md-7 align-self-center">
                                <div class="right-content">
                                    <h2>Historia</h2>
                                    <p>El Centro Cultural Independiente Turubamba nace en Agosto del 2011 a partir de la necesidad de crear y recuperar espacios en desuso (principalmente en el sector de Turubamba Alto),
                                        con el objetivo de fomentar el arte y cultura popular como una alternativa de cambio y transformación para la comunidad y barrios aledaños.
                                        <br><br>
                                        Este proyecto ha sido autogestionado, autofinanciado, creado a partir del reciclaje, mingas y el trabajo de la comunidad.
                                        Donde a acogido a artistas festivales encuentro, que fortalezcan la identidad territorial y pueda existir convivencia entre vecindad, en la actualidad contamos con los siguientes espacios habilitados:
                                    </p>
                                    <ul>
                                        <li>Teatro (capacidad de 60 personas)</li>
                                        <li>Taller de artes plásticas</li>
                                        <li>Estudio de grabación</li>
                                        <li>Turuteka (biblioteca, videoteca, ludoteca)</li>
                                        <li>Huerta andina comunitaria</li>
                                        <li>Áreas verdes</li>
                                        <li>Escenario móvil</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Sección comunidad -->
    <section class="talleres" id="services">
        <div class="container">
            <div class="text-center">
                <h3>Comunidad</h3>
                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
            </div>
            <div class="row text-center">
                <div class="col-md-3">
                    <img src="../img/ccitbi.jpg" alt="" style="border-style: double;" />
                    <h4 class="my-3">Niños</h4>
                </div>
                <div class="col-md-3">
                    <img src="../img/ccitjo.JPG" alt="" style="border-style: double;" />
                    <h4 class="my-3">Jóvenes</h4>
                </div>
                <div class="col-md-3">
                    <img src="../img/ccitad.JPG" alt="" style="border-style: double;" />
                    <h4 class="my-3">Adultos</h4>
                </div>
                <div class="col-md-3">
                    <img src="../img/turuteka.JPG" alt="" style="border-style: double;" />
                    <h4 class="my-3">Adultos Mayores</h4>
                </div>
            </div>
        </div>
    </section>

    <!--Sección socialmedia -->
    <section class="social-media">
        <!--Redes sociales-->
        <div class="container">
            <div class="row text-center">
                <h3>Redes Sociales</h3>
                <br>
                <br>
                <div class="row col-md-12 text-center">
                    <div class="row col-md-5"></div>
                    <div class="row col-md-4">
                        <div class="col-md-2">
                            <a href="https://www.facebook.com/Turubamba.cit">
                                <span class="fa-stack fa-2x">
                                    <i class="fas fa-square fa-stack-2x text-primary"></i>
                                    <i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                                <i class="fas fa-square fa-stack-2x" style="color: #E1306C"></i>
                                <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                                <i class="fas fa-square fa-stack-2x"></i>
                                <i class="fab fa-tiktok fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                                <i class="fas fa-square fa-stack-2x" style="color: red"></i>
                                <i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                    </div>
                    <div class="row col-md-4"></div>
                </div>
            </div>
    </section>

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
    include('../comunes/footer.php')
    ?>

</body>

</html>