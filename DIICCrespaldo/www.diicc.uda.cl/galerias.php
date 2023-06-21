<!doctype html>
<html class="no-js" lang="en">
    <?php
        session_start();
        $file = __FILE__;
        $pagetitle = "galerias - DIICC UDA";
        include_once "config/config.php";
        include_once "include/functions.php";
        include_once "include/head.php";
    ?>
    <body id="body_galerias">
        <!-- Header -->
        <?php include_once "include/header.php"; ?>
        <!-- Header Area End -->
		<!-- Banner Area Start -->
		<div class="banner-area-wrapper">
            <div class="banner-area text-center">	
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>Galerías</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin Banner -->
        
        <div id="espacio"></div>

        <main class="page-content">
            <div class="cards">
                <div class="content">
                    <h2 class="title">Bienvenida C2023</h2>
                    <p class="copy">Revive algunos de los momentos en la bienvenida C2023.</p><a href="https://diicc.uda.cl/galeria.php"><button class="btn">Ver fotos</button></a>
                </div>
            </div>
            <div class="cards">
                <div class="content">
                    <h2 class="title">Titulaciones</h2>
                    <p class="copy">Revisa las titulaciones de algunos de los alumnos egresados de la UDA.</p><a href="https://diicc.uda.cl/titulaciones.php"><button class="btn">Ver fotos</button></a>
                </div>
            </div>
            <div class="cards">
                <div class="content">
                    <h2 class="title">Actividades</h2>
                    <p class="copy">Capturas sobre algunas actividades realizadas por el DIICC y el CEAL.</p><a href="https://diicc.uda.cl/actividades.php"><button class="btn">Ver fotos</button></a>
                </div>
            </div>
            <div class="cards">
                <div class="content">
                    <h2 class="title">Clases</h2>
                    <p class="copy">Fotos sobre algunas de las clases impartidas en el departamento de informática.</p><a href="https://diicc.uda.cl/clases.php"><button class="btn">Ver fotos</button></a>
                </div>
            </div>
        </main>
        <div id="espacio"></div>



        <!-- FOOTER -->
        <!-- FOOTER -->
        <?php include_once "include/footer.php"; ?>
        <!-- FOOTER -->
    </body> 
</html>   