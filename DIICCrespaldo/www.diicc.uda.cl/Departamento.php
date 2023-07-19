<!doctype html>
<html class="no-js" lang="es">
<?php
    session_start();
    $_SESSION['root'] = dirname(__FILE__);
    $file = __FILE__;
    $pagetitle = "Departamento - DIICC UDA";
    include_once "config/config.php";
    include_once "include/functions.php";
    include_once "include/head.php";
?>
<body>
    <!-- Header -->
    <?php include_once "include/header.php";?>
    <!-- Header Area End -->

    <!-- Inicio del Banner -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center">
            <!--Para cambiar la imagen del banner,ir a style.css,linea 172 y modificar la direccion de la imagen(1920x318)-->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">

                            <div class="banner-content">
                                <h2 style="text-decoration:underline;">DEPARTAMENTO</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Fin del Banner -->
    <!-- Inicio de Historia -->
    <div class="historia-area pt-25 pb-70">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row" style="border: .3px; border-color:darkgrey;" >
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="about-content">
                            <p class="glitch" style="font-size:50px; margin-top:20px; margin-bottom:20px">
                                <span aria-hidden="true">Hístoria</span>
                                Hístoria
                                <span aria-hidden="true">Hístoria</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="width:520px;">
                        <div class="about-content">
                            <p style="font-weight:bold; color:black;">En el año 1986, el Departamento de Matemáticas y Ciencias de la Computación, 
                                propone la creación de la carrera de Ingeniería Ejecución en Computación e 
                                Informática. En esos años, otras universidades del país ya impartían la 
                                carrera. En esos momentos se percibía una gran masa crítica de interesados 
                                por esta especialidad; la tecnología empezó a avanzar en forma avasalladora, 
                                comenzando a aparecer una gran demanda de profesionales en estas áreas, por lo
                                tanto, la Universidad decide impartir esta nueva oferta académica. El día 10 
                                de julio de 1991 bajo el Decreto Exento número 021, se formaliza la creación
                                de la carrera de Ingeniería de Ejecución en Computación e Informática. Para 
                                dictar la carrera, en sus comienzos, se contaba con dos Ingenieros Civiles 
                                en Informática más un laboratorio equipado con doce computadores con 
                                tecnología de punta de la época, conectados en red.
                            </p>

                            <p style="font-weight:bold; color:black;">El año 2000, se creó el Departamento de Ingeniería Informática y Ciencias de la
                                Computación (DIICC, de acá en adelante), a partir de la separación de las 
                                áreas de Computación e Industria del Departamento de Matemáticas y Ciencias de
                                la Computación. Paralelamente, ese mismo año se crearon los nuevos planes de 
                                estudios de la carrera de Ingeniería Civil en Computación e Informática, la 
                                que comienza a recibir sus primeros alumnos a partir del año 2001.
                            </p>

                            <p style="font-weight:bold; color:black;">Actualmente, el DIICC dicta las carreras de Ingeniería Civil en Computación e 
                                Informática; Ingeniería de Ejecución en Computación (Continuidad de Estudios 
                                – Vespertino); Magíster en Informática y Ciencias de la Computación (Magíster 
                                Investigación); Magíster en Tecnologías de la Información e Innovación 
                                (Magíster Profesional), este último conjuntamente a los Diplomado en Gestión 
                                de Tecnologías de Información; Diplomado en Gestión de Innovación y 
                                Emprendimiento; y Diplomado en Procesos Integrales de Software. Además, presta 
                                servicios a otras unidades académicas de la Universidad, realiza actividades 
                                de extensión y de investigación.
                            </p>
                        </div>
                    </div>

                    <!--Imagen del frontis del departamento-->
                    <div id="img_dpto" class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="width:600px;">

                        <img id="img_old" src="img/dpto/old.png" class="img-responsive">
                        <h5 >El departamento hasta el 2015.</h5>

                        <img id="img_new" src="img/dpto/about1.png" class="img-responsive">
                        <h5 >El departamento actualmente.</h5>


                    </div>
                    <!--Fin Imagen del frontis del departamento-->

                </div>
                <!--Mision y Vision de la Carrera,junto a los Lineamientos Estrategicos-->

                <div class="container" style="margin-top:20px;">
                    <div class="row" id="card-row">
                        <div class="card" id="card1" style="width: 400px; height:270px;box-shadow: 15px 10px 6px lightgrey;">
                            <div class="flip-card-inner">
                                <div class="flip-card-front" id="deptoback" >
                                <div class="head">
                                    <div style="padding-top: 20px; font-weight: bold;">
                                        <h3 style=" font-weight: bold; color: black; font-size:50px;">Misión</h3>
                                    </div>
                                </div>
                                </div>
                                <div class="flip-card-back">
                                    <div class="description" style="margin-top:-55px">
                                        <p>Cultivar el desarrollo de la ciencia de la computación e informática mediante la docencia
                                            de pre y postgrado, investigación aplicada y vinculación con la comunidad, formando 
                                            profesionales e investigadores altamente calificados que se desempeñan tanto en el 
                                            ámbito público como privado para contribuir al progreso de nuestra región y país. 
                                            Promovemos los principios y valores declarados e impulsados por la Universidad de Atacama.
                                        </p>
                                    </div>
                                    <div class="contact">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" id="card2" style="width: 400px; height:270px; margin-left:150px; box-shadow: 15px 10px 6px lightgrey;">
                        <div class="flip-card-inner">
                            <div class="flip-card-front" id="deptoback">
                            <div class="head">
                                <div style="padding-top: 20px;">
                                    <h3 style=" font-weight: bold; color: black; font-size:50px;">Visión</h3>
                                </div>
                            </div>
                            </div>
                            <div class="flip-card-back">
                            <div class="description">
                                <p>Ser un referente en las actividades de docencia de pre y postgrado, investigación aplicada, 
                                    vinculación con el medio, innovación y transferencia tecnológica en la ciencia de la computación 
                                    e informática de la macro zona norte, así como también a nivel nacional e internacional.
                                </p>
                            </div>
                            <div class="contact">
                                
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="row">

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div id="mision-diicc" class="about-content">
                            <h2>Misión</h2>
                        </div>
                        <p> Cultivar el desarrollo de la ciencia de la computación e informática mediante la docencia
                            de pre y postgrado, investigación aplicada y vinculación con la comunidad, formando 
                            profesionales e investigadores altamente calificados que se desempeñan tanto en el 
                            ámbito público como privado para contribuir al progreso de nuestra región y país. 
                            Promovemos los principios y valores declarados e impulsados por la Universidad de Atacama.
                        </p>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div id="vision-diicc" class="about-content">
                            <h2>Visión</h2>
                        </div>
                        <p>Ser un referente en las actividades de docencia de pre y postgrado, investigación aplicada, 
                        vinculación con el medio, innovación y transferencia tecnológica en la ciencia de la computación 
                        e informática de la macro zona norte, así como también a nivel nacional e internacional.
                        </p>
                    </div>
                </div> -->
                <!--FIN VISION-->
                <!--LINEAMIENTOS-->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div id="lin_est" class="about-content">
                            <h2>Lineamientos Estratégicos</h2>
                        </div>
                        <li class="lineamientos">Fomentar el desarrollo de la Investigación científica en el DIICC.</li>
                        <li class="lineamientos">Establecer métodos de financiamiento para los distintos lineamientos de investigación.</li>
                        <li class="lineamientos">Fomentar proyectos de investigación asociados a las TIC en la comunidad, de acuerdo al plan de investigación del DIICC y postulando a recursos regionales.</li>
                        <li class="lineamientos">Apoyar el perfeccionamiento académico y profesional de los Docentes del DIICC.</li>
                        <li class="lineamientos">Consolidar un cuerpo académico adecuado y estable para realizar labores administrativas, docentes, de investigación y extensión.</li>
                        <li class="lineamientos">Disminuir las tasas de deserción y reprobación de los estudiantes que ingresan a la carrera.</li>
                        <li class="lineamientos">Promover sistemas de articulación y continuidad de estudios.</li>
                        <li class="lineamientos">Asegurar el cumplimiento de estándares de calidad en educación y gestión.</li>
                        <li class="lineamientos">Promover e impulsar actividades de extensión en el DIICC.</li>
                    </div>

                </div>

                <!--FIN LINEAMIENTO-->
                <!--CARRUSEL-->
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div id="infra-diicc" class="about-content">
                            <h2></h2>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="infraestructura" class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <div id="infra-diicc" class="about-content">
                        </div>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicadores -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                <li data-target="#myCarousel" data-slide-to="4"></li>
                                <li data-target="#myCarousel" data-slide-to="5"></li>
                                <li data-target="#myCarousel" data-slide-to="6"></li>
                                <li data-target="#myCarousel" data-slide-to="7"></li>
                                <li data-target="#myCarousel" data-slide-to="8"></li>
                                <!--Diapositivas para las salas
                                    <li data-target="#myCarousel" data-slide-to="5"></li>
                                    <li data-target="#myCarousel" data-slide-to="6"></li>
                                    <li data-target="#myCarousel" data-slide-to="7"></li>
                                    -->
                            </ol>

                            <!-- Diapositivas -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="img/dpto/Olimpo.jpg" alt="Olimpo" class="img-responsive">
                                    <div class="carousel-caption">
                                        <h4>Laboratorio Olimpo</h4>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="img/dpto/Melquiades.jpg" alt="Melquiades" class="img-responsive">
                                    <div class="carousel-caption">
                                        <h4>Laboratorio Melquíades</h4>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="img/dpto/Robotica1.jpg" alt="Robotica1" class="img-responsive">
                                    <div class="carousel-caption">
                                        <h4>Laboratorio de Robótica</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/dpto/Conectividad1.JPG" alt="Conectividad1" class="img-responsive">
                                    <div class="carousel-caption">
                                        <h4>Laboratorio de Conectividad y Redes</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/dpto/SalaEstudio1.JPG" alt="SalaEstudio" class="img-responsive">
                                    <div class="carousel-caption">
                                        <h4>Sala de Estudios</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/dpto/Auditorio.JPG" alt="Auditorio" class="img-responsive">
                                    <div class="carousel-caption">
                                        <h4>Auditorio</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/dpto/Magister.JPG" alt="Magister" class="img-responsive">
                                    <div class="carousel-caption">
                                        <h4>Magíster</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/dpto/DIICC2.JPG" alt="DIICC2" class="img-responsive">
                                    <div class="carousel-caption">
                                        <h4>Sala Multimedia</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/dpto/Salas.JPG" alt="Salas" class="img-responsive">
                                    <div class="carousel-caption">
                                        <h4>Sala de Clases</h4>
                                    </div>
                                </div>
                                <!--Sala de Clases
                                    <div class="item">
                                        <img src="img/dpto/diicc1.jpg" alt="DIICC1" class="img-responsive">
                                    </div>
                                    <div class="item">
                                        <img src="img/dpto/diicc2.jpg" alt="DIICC2" class="img-responsive">
                                    </div>
                                    <div class="item">
                                        <img src="img/dpto/diicc3.jpg" alt="DIICC3" class="img-responsive">
                                    </div>
                                    -->
                            </div>
                            <!-- Controles Izquierda y Derecha-->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>


                        </div>
                    </div>
                    <!--FIN CARRUSEL-->
                    <!--Detalles del Departamento-->
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4|" id="detalles_dpto">
                        <div class="about-content">
                            <h2>Nuestras Dependencias</h2>
                        </div>


                        <div class="table-bordered">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <!--<th>Nuestras Dependencias</th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p><span class="glyphicon glyphicon-chevron-right"></span> Auditorio Dra Karina Carvajal Cuello</p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <p><span class="glyphicon glyphicon-chevron-right"></span> Sala Multimedia</p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <p><span class="glyphicon glyphicon-chevron-right"></span> Sala de Estudios</p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <p><span class="glyphicon glyphicon-chevron-right"></span> Sala Modular de Estudios</p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <p><span class="glyphicon glyphicon-chevron-right"></span> Tres Salas de Clases</p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <p><span class="glyphicon glyphicon-chevron-right"></span> Cuatro Laboratorios</p>
                                            </span>
                                            <div class="laboratorios">
                                                <li>Robótica</li>
                                                <li>Conectividad y Redes</li>
                                                <li>Dos Laboratorios de Computación</li>
                                            </div>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--Fin detalles dpto-->
                </div>
            </div>
        </div>
    </div>
    <div >
        <?php include_once "include/footer.php";?>
    </div>
        <!-- FOOTER -->
        
        <!-- FOOTER -->

    

    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>