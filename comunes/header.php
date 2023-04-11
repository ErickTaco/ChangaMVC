<?php
?>
<!-- Link Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<!-- Link Bootstrap/Estilos -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
<!-- Link AOS/Animaciones -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


<style>
    .subt {
        font-family: 'Tangerine', serif;
        font-size: 35px;
        color: red;
        font-weight: bold;
        padding-left: 5px;
        margin-top: -5px;
    }

    .logo>img {
        width: 110px;
        height: 30px;
        margin-top: -10px;
    }
</style>
<!-- Titulo -->
<div class="container-fluid fixed-top pt-1" style="background: #fff;color: black; height: 7%">
    <div class="col logo subt text-center">
        <img class="alineadoTextoImagenCentro" src="../img/lachanga.png" alt="" /> "Colectivo de Artes Populares"
    </div>
</div>
<!-- Barra de Navegación -->
<nav class="navbar navbar-expand-lg scrolling-navbar fixed-top py-0 mt-5" style="background: #fff;">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarRightAlignExample" aria-controls="navbarRightAlignExample" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse scrolling-navbar" id="navbarRightAlignExample">
            <!-- Left links -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white bg-dark rounded mx-2 my-1 px-4 py-1" aria-current="page" href="../index.php">Inicio</a>
                </li>

                <!-- Navbar dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white bg-dark rounded mx-2 my-1 px-4 py-1" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        Centro Cultural Independiente Turubamba
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="../web/ccit.php">Centro Cultural Independiente Turubamba</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../web/teatro.php">Teatro</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../web/estudio.php">Estudio de Grabación Bocina Records</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../web/turuteka.php">Turuteka Biblioteca Comunitaria</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../web/huerta.php">Huerta Andina Comunitaria</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link active text-white bg-dark rounded mx-2 my-1 py-1 px-4" aria-current="page" href="#">Fundación</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white bg-dark rounded mx-2 my-1 py-1 px-4" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        Grupos Artísticos
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="../web/teatro_colectivo_la_changa.php">Teatro Colectivo LA CHANGA</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../web/la_changa_estail.php">LA CHANGA Estail</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../web/poncho_viejo.php">Poncho Viejo</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../web/la_wazzaba_barrial_band.php">Wazzaba Barrial Band</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../web/la_comadre_radio_barrial.php">La Comadre Radio Barrial</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../web/batumba.php">Batumba</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link active text-white bg-dark rounded mx-2 my-1 py-1 px-4" aria-current="page" href="cartelera.php">Cartelera</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active text-white bg-dark rounded mx-2 my-1 py-1 px-4" aria-current="page" href="talleres.php">Talleres para la Comunidad</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active text-white bg-dark rounded mx-2 my-1 py-1 px-4" aria-current="page" href="#">Priostazgo</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>


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


<script>
    //vamos a darle el efecto al menú
    let ubicacionPrincipal = window.pageYOffset; //0
    /*aparece y desaparece el menu segun mueve el scroll*/
    window.addEventListener("scroll", function() {
        let desplazamientoActual = window.pageYOffset; //180
        if (ubicacionPrincipal >= desplazamientoActual) { // 200 > 180
            document.getElementsByTagName("nav")[0].style.top = "0px";
        } else {
            document.getElementsByTagName("nav")[0].style.top = "-130px";
        }
        ubicacionPrincipal = desplazamientoActual; //200
    });
</script>