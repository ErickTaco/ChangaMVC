<?php
include('../comunes/header.php');
?>
<html>

<head>
    <title>Estudio de Grabación Bocina Records</title>
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
            left: 11%;
        }

        .name h3 {
            font-family: 'Abril Fatface', cursive;
            color: #fff;
            margin: 10px 0 0 0;
            font-size: 40px;
            text-shadow: 5px 5px 5px #000;
            position: absolute;
            top: 35%;
            left: 9%;
        }

        .name img {
            height: 80vh;
            margin-top: 85px;
        }

        #services-section .service {
            background-color: #000;
            padding: 20px;
            color: white;
        }

        h2 {
            font-size: 30px;
            font-weight: 600;
            background-color: #FF7C00;
            color: #6B010A;
            margin-top: 25px;
            padding: 10px;
        }

        #services-section span {
            color: #000;
        }

        .colum {
            margin-left: -26px;
        }

        .colum1 {
            margin-left: 25px;
        }

        .social-media h3 {
            font-family: "Roboto Slab";
            font-weight: 400;
            margin-bottom: 10px;
            font-size: 25px;
            color: black;
        }
    </style>
</head>

<body>
    <!--Imagen-->
    <section id="imagen">
        <div class="container name">
            <img src="../img/estudio.JPG" alt="" style="width: 100%; " />
            <h3 data-aos="fade-up" data-aos-delay="150" data-aos-duration="2000">Estudio de Grabación</h3>
            <h1 data-aos="fade-up" data-aos-delay="150" data-aos-duration="2000">Bocina Record</h1>
        </div>

    </section>

    <!--Servicios-->
    <div class="site-section" id="services-section">
        <div class="container">
            <div class="row ">
                <div class="text-center">
                    <h2>Servicios</h2>
                </div>

                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">
                    <div class="service d-flex h-100">
                        <div class="svg-icon">
                            <i class="fa-solid fa-headphones fa-2x"></i>
                        </div>
                        <div class="service-about">
                            <h3><span>-</span>Afinación y edición de voz</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service d-flex h-100">
                        <div class="svg-icon">
                            <i class="fa-sharp fa-solid fa-music fa-2x"></i>
                        </div>
                        <div class="service-about">
                            <h3><span>-</span>Instrumentales (Beats) a medida</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">
                    <div class="service d-flex h-100">
                        <div class="svg-icon">
                            <i class="fa fa-light fa-volume-high fa-2x"></i>
                        </div>
                        <div class="service-about">
                            <h3><span>-</span>Mezcla de audio</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service d-flex h-100">
                        <div class="svg-icon">
                            <i class="fa-solid fa-microphone-lines fa-2x"></i>
                        </div>

                        <div class="service-about">
                            <h3><span>-</span>Grabación de voz</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">
                    <div class="service d-flex h-100">
                        <div class="svg-icon">
                            <i class="fa-solid fa-pen fa-2x"></i>
                        </div>
                        <div class="service-about">
                            <h3><span>-</span>Composición a medida</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service d-flex h-100">
                        <div class="svg-icon">
                            <i class="fa-solid fa-compact-disc fa-2x"></i>
                        </div>
                        <div class="service-about">
                            <h3><span>-</span>Web Design / Development</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Gallery -->
    <section class="fotos container-fluid">
        <div class="text-center">
            <h2>Galería de Fotos</h2>
        </div>
        <div class="row">
            <div class="colum1 col-lg-4">
                <img src="../img/estudio1.JPG" class="w-100 border border-ligth" data-aos="zoom-in" />
                <img src="../img/estudio7.JPG" class="w-100 border border-ligth mb-3" data-aos="zoom-in" />
            </div>

            <div class="colum col-lg-4">
                <img src="../img/estudio3.JPG" class="w-100 border border-ligth" data-aos="zoom-in" />
                <img src="../img/estudio9.JPG" class="w-100 border border-ligth mb-3" data-aos="zoom-in" />
            </div>

            <div class="colum col-lg-4">
                <img src="../img/estudio5.JPG" class="w-100 border border-ligth" data-aos="zoom-in" />
                <img src="../img/estudio6.JPG" class="w-100 border border-ligth mb-3" data-aos="zoom-in" />
            </div>
        </div>
    </section>

    <!--Sección socialmedia -->
    <section class="social-media">
        <!--Redes sociales-->
        <div class="container">
            <div class="row text-center">
                <h3>Te invitamos a conocer nuestra Fan Page de Bocina Record:
                    <a href="https://m.facebook.com/profile.php?id=100064071698313">
                        <span class="fa-stack fa-1x">
                            <i class="fas fa-square fa-stack-2x text-primary"></i>
                            <i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </h3>
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
    include('../comunes/footer.php');
    ?>
</body>

</html>