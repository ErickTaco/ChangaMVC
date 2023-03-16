<?php
include('../comunes/header.php');
?>
<html>

<head>
    <title>Turuteka Biblioteca Comunitaria</title>
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
            background-color: #FFA957;
            color: black;
        }

        .name h1 {
            font-weight: 600;
            line-height: 50px;
            color: #fff;
            font-family: 'Abril Fatface', cursive;
            font-size: 50px;
            text-shadow: 5px 5px 5px #000;
            position: absolute;
            top: 25%;
            left: 15%;
        }

        .name h2 {
            font-family: 'Abril Fatface', cursive;
            color: #fff;
            margin: 10px 0 0 0;
            font-size: 40px;
            text-shadow: 5px 5px 5px #000;
            position: absolute;
            top: 35%;
            left: 10%;
        }

        .name img {
            height: 80vh;
            margin-top: 85px;
        }

        .historia {
            margin-top: 40px;
        }

        .historia .left-image img {
            width: 100%;
            overflow: hidden;
            height: 450px;
        }

        .historia .more-info-content {
            background-color: white;
        }

        .historia .left-content {
            padding: 25px 25px 25px 40px;
        }

        .historia .right-content {
            padding: 25px 25px 25px 15px;
        }

        .historia .right-content h2 {
            font-size: 24px;
            font-weight: 600;
            padding-left: 15px;
            margin-bottom: 25px;
        }

        .historia .left-content h2 {
            font-size: 24px;
            font-weight: 600;
            padding-left: 15px;
            margin-bottom: 25px;
        }

        .talleres {
            padding: 1rem 0;
        }

        .talleres h2 {
            font-size: 30px;
            font-weight: 600;
            background-color: black;
            color: white;
        }

        .talleres img {
            width: 100%;
            overflow: hidden;
            margin-bottom: 5px;
        }

        h3 {
            font-family: "Roboto Slab";
            font-weight: 400;
            margin-bottom: 10px;
            font-size: 25px;
            color: black;
        }

        h4 {
            font-size: 25px;
            font-weight: 400;
            background-color: black;
            color: white;
            text-align: center;
            margin-top: -5px;
        }
    </style>
</head>

<body>
    <!-- Encabezado -->
    <jsp:include page="WEB-INF/paginas/comunes/header.jsp"></jsp:include>
    <!--Imagen-->
    <section id="imagen">
        <div class="container name">
            <img src="../img/turuteka.JPG" alt="" style="width: 100%; " />
            <h1 data-aos="fade-up" data-aos-delay="150" data-aos-duration="2000">Turuteka</h1>
            <h2 data-aos="fade-up" data-aos-delay="150" data-aos-duration="2000">Biblioteca Comunitaria</h2>
        </div>

    </section>
    <!--Fin Imagen-->
    <!--Sección Historia -->
    <section class="historia">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="row">
                            <div class="col-md-4 align-self-center">
                                <div class="left-content">
                                    <h2><b>¿Cómo nace Turuteka?</b></h2>
                                    <p>En el 2017 se inaugura la biblioteca comunitaria TURUTEKA misma que ha sido levantada
                                        desde la autogestión y la participación de vecinos con donaciones de libros y material
                                        inmueble al momento cuenta con más de 2000 ejemplares de distintas Áreas.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="left-image">
                                    <img src="../img/logoturuteka.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <div class="right-content">
                                    <h2><b>¿Cuál es nuestro objetivo?</b></h2>
                                    <p>Es reforzar el ámbito educativo inclusivo a través de propuestas alternativas al sistema
                                        académico convencional aportando a la formación integral de niños, niñas , jóvenes y
                                        adultos mayores de la comunidad.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Talleres -->
    <section class="talleres" id="services">
        <div class="container-fluid pt-5">
            <div class="container pb-3">
                <div class="text-center">
                    <h2>¿Qué actividades realizamos?</h2>
                    <h3>Dentro de Turuteka existen:</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 pb-1">
                        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 15px">
                            <div class="pl-4">
                                <img src="../img/talleres.jpg" alt="">
                                <h4>Talleres educativos</h4>
                                <p class="m-0">
                                    Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
                                    lorem amet elitr vero...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pb-1">
                        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 15px">
                            <div class="pl-4">
                                <img src="../img/mesa.jpg"" alt="">
                                <h4>Motivación a la lectura</h4>
                                <p class=" m-0">
                                Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
                                lorem amet elitr vero...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pb-1">
                        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 15px">
                            <div class="pl-4">
                                <img src="../img/tareas.jpg" alt="">
                                <h4>Tareas dirigidas</h4>
                                <p class="m-0">
                                    Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
                                    lorem amet elitr vero...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pb-1">
                        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 15px">
                            <div class="pl-4">
                                <img src="../img/cursos.JPG" alt="">
                                <h4>Curso de inglés / kichwa</h4>
                                <p class="m-0">
                                    Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
                                    lorem amet elitr vero...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pb-1">
                        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 15px">
                            <div class="pl-4">
                                <img src="../img/historia.jpg" alt="">
                                <h4>Juegos de mesa</h4>
                                <p class="m-0">
                                    Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
                                    lorem amet elitr vero...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pb-1">
                        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 15px">
                            <div class="pl-4">
                                <img src="../img/turuteka.JPG" alt="">
                                <h4>Sala de lectura</h4>
                                <p class="m-0">
                                    Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
                                    lorem amet elitr vero...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pb-1">
                        <div class="d-flex shadow-sm mb-4">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pb-1">
                        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 15px">
                            <div class="pl-4">
                                <img src="../img/prestamo.jpeg" alt="">
                                <h4>Préstamo de libros</h4>
                                <p class="m-0">
                                    Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
                                    lorem amet elitr vero...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Talleres -->
    <!--Sección socialmedia -->
    <section class="social-media">
        <!--Redes sociales-->
        <div class="container">
            <div class="row text-center">
                <h3>Te invitamos a conocer nuestra Fan Page de Turuteka:
                    <a href="https://www.facebook.com/turutekacomunitaria">
                        <span class="fa-stack fa-1x">
                            <i class="fas fa-square fa-stack-2x text-primary"></i>
                            <i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </h3>
            </div>
    </section>
    <!--Footer-->
    <jsp:include page="WEB-INF/paginas/comunes/footer.jsp"></jsp:include>

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