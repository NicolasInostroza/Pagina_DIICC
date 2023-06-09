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
    <body>
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
        <!-- Album Start -->
        <div class="galeria">
            <div class="teacher-area pt-150 pb-105">
                <div class="container">
                    <div class="row">         
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="single-teacher mb-45">
                                <div class="single-teacher-img">
                                    <a title="galeria" href="https://diicc.uda.cl/galeria.php" target="_blank">
                                    <img src="img/galeria/img1.jpeg" alt="teacher">  
                                </div>
                                <div class="single-teacher-content text-center">
                                    <h2><a>Bienvenida C2023</a></h2>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Album End -->
            <!-- Album Start -->
            <div class="teacher-area pt-150 pb-105">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="single-teacher mb-45">
                                <div class="single-teacher-img">
                                    <a title="galeria" href="https://diicc.uda.cl/titulaciones.php" target="_blank">
                                    <img src="img/titulos/img1.jpg" alt="teacher">  
                                </div>
                                <div class="single-teacher-content text-center">
                                    <h2><a>Titulaciones</a></h2>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Album End -->

            <!-- Album Start -->
            <div class="teacher-area pt-150 pb-105">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="single-teacher mb-45">
                                <div class="single-teacher-img">
                                    <a title="galeria" href="https://diicc.uda.cl/actividades.php" target="_blank">
                                    <img src="img/actividades/img1.jpg" alt="teacher">  
                                </div>
                                <div class="single-teacher-content text-center">
                                    <h2><a>Actividades</a></h2>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Album End -->

            <!-- Album Start -->
            <div class="teacher-area pt-150 pb-105">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="single-teacher mb-45">
                                <div class="single-teacher-img">
                                    <a title="galeria" href="https://diicc.uda.cl/clases.php" target="_blank">
                                    <img src="img/clases/img1.JPG" alt="teacher">  
                                </div>
                                <div class="single-teacher-content text-center">
                                    <h2><a>Clases</a></h2>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Album End -->

        </div> <!--fin galeria-->



        <!-- FOOTER -->
        <!-- FOOTER -->
        <?php include_once "include/footer.php"; ?>
        <!-- FOOTER -->
    </body> 
</html>   