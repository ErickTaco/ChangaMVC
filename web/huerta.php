<?php
include('../comunes/header.php');
?>
<html>

<head>
    <title>Huerta Andina Comunitaria</title>
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
            background-color: #D93100;
            color: black;
        }

        .name h1 {
            font-weight: 600;
            line-height: 50px;
            color: #000;
            font-family: 'Abril Fatface', cursive;
            font-size: 50px;
            text-shadow: 5px 5px 5px #fff;
            position: absolute;
            top: 70%;
            left: 30%;
        }

        .name img {
            height: 80vh;
            margin-top: 85px;
        }

        .historia {
            margin-top: 40px;
            text-align: center;
        }

        .historia img {
            width: 60%;
            height: 180px;
            overflow: hidden;
            margin-bottom: 15px;
        }

        .historia .more-info-content {
            background-color: #f4fcdc;
        }

        .historia .left-content {
            padding: 25px 25px 25px 40px;
        }

        .historia .right-content {
            padding: 25px 25px 25px 40px;
        }

        .historia .center-content {
            padding: 25px 25px 25px 40px;
        }

        .historia .right-content h2 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .historia .left-content h2 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .historia .center-content h2 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <!--Imagen-->
    <section id="imagen">
        <div class="container name">
            <img src="../img/huerta.JPG" alt="" style="width: 100%; " />
            <h1 data-aos="fade-up" data-aos-delay="150" data-aos-duration="2000">Huerta Andina Comunitaria</h1>
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
                                <div class="left-content border">
                                    <h2><b>Manzanilla</b></h2>
                                    <img src="../img/manzanilla.png" alt="">
                                    <p>Es una planta herbácea, contiene calcio, magnesio, potasio, fósforo y algunas vitaminas como la B1 y B2.
                                        Es un buen calmante, descongestiona las vías respiratorias, desinflama los intestinos, afecciones de las vías urinarias
                                        y dolores menstruales. </p>
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <div class="center-content border">
                                    <h2><b>Tomate de árbol</b></h2>
                                    <img src="../img/arbol.JPG" alt="">
                                    <p>El tomate de árbol, también conocido como tamarillo. Es un fruto rico en vitaminas y minerales esenciales, gracias a
                                        su gran acción antioxidante sirve para fortalecer el sistema inmunológico, mejorar la visión, reduce el colesterol, bajar la tensión arterial, entre otros beneficios. </p>
                                </div>
                            </div>

                            <div class="col-md-4 align-self-center">
                                <div class="right-content border">
                                    <h2><b>Mora</b></h2>
                                    <img src="../img/mora.JPG" alt="">
                                    <p>Son frutos, pequeños, carnosos y jugosos, de aspecto arracimado y sabor ácido.
                                        También se les conoce como zarzamora o frambuesa negra.
                                        Su contenido en azúcar es muy bajo. Y por la presencia de las vitaminas C y A contribuyen a
                                        nutrir los huesos, los dientes, la piel, la generación de colágeno o la absorción de hierro.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="row">
                            <div class="col-md-4 align-self-center">
                                <div class="left-content border">
                                    <h2><b>Ají</b></h2>
                                    <img src="../img/aji.JPG" alt="">
                                    <p> Es un alimento básico en las cocinas ya sea en su versión dulce o picante.
                                        Un consumo masivo de su variante más fuerte puede llegar a generar dolor de estómago e incluso gastroenteritis,
                                        el ají cuenta con propiedades analgésicas y anticancerígenas.</p>
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <div class="center-content border">
                                    <h2><b>Lechuga Rizada</b></h2>
                                    <img src="../img/rizada.jpeg" alt="">
                                    <p>La Lechuga Batavia Riza es una de las lechugas con más concentración de vitaminas y minerales.
                                        Tiene alto contenido de agua, por lo que mantiene a nuestro organismo hidratado, evita el envejecimiento de la piel
                                        y es un excelente diurético, que evita la retención de líquidos y elimina toxinas mediante la orina. </p>

                                </div>
                            </div>

                            <div class="col-md-4 align-self-center">
                                <div class="right-content border">
                                    <h2><b>Taxo y Papa</b></h2>
                                    <img src="../img/papa.JPG" alt="">
                                    <p><b>El taxo</b> destaca por su alto contenido de vitaminas A, C y las del grupo B, imprescindibles para la salud de la piel, la vista,
                                        el trabajo del sistema inmunitario y la circulación sanguínea.
                                        <b>La papa</b> también conocida como patata, es un tubérculo, Es considerada como un alimento energético por su contenido en carbohidratos,
                                        mayormente en forma de almidón.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    include('../comunes/footer.php');
    ?>
</body>

</html>