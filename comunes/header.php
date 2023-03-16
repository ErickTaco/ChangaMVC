<?php
?>
<!-- Link Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
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
                            <a class="dropdown-item" href="#">Teatro Colectivo LA CHANGA</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">LA CHANGA Estail</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Poncho Viejo</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Wazzaba Barrial Band</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">La Comadre Radio Barrial</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Batumba</a>
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