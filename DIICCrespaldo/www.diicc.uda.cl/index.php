<!doctype html>
<html class="no-js" lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
    session_start();
    $_SESSION['root'] = dirname(__FILE__);
    $file = __FILE__;
    $pagetitle = "UDA - Departamento de Ingeniería Informática y Ciencias de la Computación";
    include_once "config/config.php";
    include_once "include/functions.php";
    include_once "include/head.php";
?>
 <meta charset="UTF-8">
<body>

    <body>
        <!-- Header -->
        <?php include_once "include/header.php"; ?>
        <!-- Header Area End -->
        <!-- Background Area Start -->
        <section id="slider-container" class="slider-area">
        <div class="slider-owl owl-theme owl-carousel">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicadores -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active" style="border:1px solid #364c59;"></li>
                    <li data-target="#myCarousel" data-slide-to="1" style="border:1px solid #364c59;"></li>
                    <li data-target="#myCarousel" data-slide-to="2" style="border:1px solid #364c59;"></li>
                                                              
                </ol>
                <!--<div class="slider-owl owl-theme owl-carousel">--> <!-- cambiar -->
                <!-- Start Slingle Slide -->
                <div class="carousel-inner">
                    <div class="item active" >
                        <div class="notice-left">
                            <div class="single-slide item" style="background-image: url(img/slide/img1.jpg)">
                                <!-- Start Slider Content -->
                                <div class="slider-content-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-7 col-md-offset-left-5">
                                                <div class="slide-content-wrapper">
                                                    <div class="slide-content">
                                                        <h3>DEPARTAMENTO DE INGENIERÍA </h3>
                                                        <h2>INFORMÁTICA Y CIENCIAS DE LA COMPUTACIÓN</h2>
                                                        <p>Universidad de Atacama, Copiapó, Atacama, Chile.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Slider Content -->
                            </div>
                        </div>
                    </div>
                            <!-- End Slingle Slide -->
                            <!-- Start Slingle Slide -->
                    <div class="item">
                        <div class="notice-left">
                            <div class="single-slide item" style="background-image: url(img/slide/img2.jpg)">
                            <!-- Start Slider Content -->
                                <div class="slider-content-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-7 col-md-offset-left-5">
                                                <div class="slide-content-wrapper text-left">
                                                    <div class="slide-content">
                                                        <h3>MALLA </h3>
                                                        <h2>CURRICULAR </h2>
                                                        <p>Conoce la malla de nuestra carrera </p>
                                                        <a class="default-btn" href="malla1.php">Ver malla</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Slider Content -->
                            </div>
                        </div>
                    </div>
                <!-- End Slingle Slide -->
                <!-- Start Slingle Slide -->
                    <div class="item">
                        <div class="notice-left">

                            <div class="single-slide item" style="background-image: url(img/slide/Coordinadores21.png)">
                            <!-- Start Slider Content -->
                                <div class="slider-content-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-7 col-md-offset-left-5">
                                                <div class="slide-content-wrapper">
                                                    <div class="slide-content">
                                                        <!--<h3>PROFESORES </h3>
                                                        <h2> </h2>
                                                        <p>Conoce a nuestros profesores </p>-->
                                                        <a class="default-btn" href="academicos.php">Ver Académicos</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Slider Content -->
                            </div>
                            <!-- End Slingle Slide -->
                        </div>
                    </div>
                </div>
                        <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>-->
            </div>
        </div>
        </section>
            
        <!-- Background Area End -->
        <!-- carrusel -->
        <div class="rowtrans">
            <div class="rowtrans-title text-center">
                <h2>NOTICIAS</h2>
            </div>                
        </div> 

        <!-- Panel de noticias 2.0-->
        <?php include_once "include/slider3_noticias.php"; ?>

        <!-- fin de noticias -->
           
        
        
        
        <!-- Courses Area Start -->

        <div class="courses-area pt-30 pb-40 text-center">
            <div class="rowtrans">
                    <div class="rowtrans-title">
                        <h2>ÁREAS DE DESARROLLO</h2>
                    </div>                
            </div>

            <div class="container">

                <div class="container" style="margin: 0; padding: 0; box-sizing: border-box; font-family: 'Baloo 2', cursive;">
                    <div class="row" style="display: flex; align-items: center; justify-content: center; min-height: 1vh; background: white; flex-wrap: wrap;">
                        <div class="card">
                            <div class="head">
                                <div class="circle"></div>
                                <div class="img">
                                    <img src="img/areas/SoftwareEngineering/img1.jpg" alt="course">
                                </div>
                            </div>

                            <div class="description">
                                <h3>Inteligencia de Máquinas</h3>
                                <p>La ciencia de computación ha facilitado la creación de tecnologías con capacidades de procesamiento.</p>
                                </div>
                            <div class="contact">
                                
                            </div>
                        </div>
                        <div class="card">
                            <div class="head">
                                <div class="circle"></div>
                                    <div class="img">
                                        <img src="img/areas/ArtificialIntelligent/img1.jpg" alt="course">
                                    </div>
                            </div>
                            <div class="description">
                                <h3>Ingeniería de Software</h3>
                                <p>La Ingeniería de Software comprende procesos, metodologías, métodos, herramientas, y personas.</p>
                            </div>
                            <div class="contact">
                                
                            </div>
                        </div>
                        <div class="card">
                            <div class="head">
                                <div class="circle"></div>
                                <div class="img">
                                        <img src="img/areas/GestionTI/img1.jpg" alt="course">
                                </div>
                            </div>
                            <div class="description">
                                <h3>Gestión TI</h3>
                                <p>La información cada vez más valiosa en las organizaciones requiere de procesos, tecnologías y técnicas adecuadas para su procesamiento.</p>
                            </div>
                            <div class="contact">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          
         <!-- Testimonial Area Start -->
        <div class="testimonial-area pt-110 pb-105 text-center">
            <div class="container tres-columnas">
                    <div class="row">
                        <!--<div class="testimonial-owl owl-theme owl-carousel">-->
                            <div class="col-md-8 col-md-offset-2 col-sm-12">
                                <div class="single-testimonial col-md-6"><!--cambios-->
                                    <div class="testimonial-info">
                                        <div class="testimonial-img">
                                            <img src="img/academicos/Fiuda2030.png" alt="academicos">
                                        </div>
                                        <div class="testimonial-content">
                                            <h4>FIUDA 2030</h4>
                                            <p>Este proyecto es desarrollado gracias al Fondo de Innovación para la Competitividad Regional 
                                            (FIC) del Gobierno Regional, recursos aprobados por el CORE Atacama.</p> 
                                            <p>El cual tiene la misión de 
                                            formar ingenieros altamente competentes y responsables con el medio </p>
                                        
                                        </div>
                                    </div>
                                    
                                
                                </div>
                                <div class="single-testimonial col-md-6"><!--cambios-->
                                    <div class="testimonial-info">
                                        <div class="testimonial-img">
                                            <img src="img/academicos/code.jpg" alt="academicos">
                                        </div>
                                        <div class="testimonial-content">
                                            <h4>Code Club UDA</h4>
                                            <p>Code Club UDA privilegió a niñas en talleres de fundamentos en programación de este 2022</p> 
                                            <p>Iniciativa que impulsa el departamento de Ingeniería en Informática y Ciencias de la 
                                            Computación desde el año 2014, para educar a escolares en lenguaje de programación</p>
                                        
                                        </div>
                                    </div>
                                    
                                
                                </div>
                            
                            </div>
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Area End -->

        <!-- Testimonial Area Start -->
       <!--<div class="testimonial-area pt-110 pb-105 text-center">
            <div class="container">
                <div class="row">
                    <div class="testimonial-owl owl-theme owl-carousel">
                        <div class="col-md-8 col-md-offset-2 col-sm-12">
                            <div class="single-testimonial">
                                <div class="testimonial-info">
                                    <div class="testimonial-img">
                                        <img src="img/academicos/code.jpg" alt="academicos">
                                    </div>
                                    <div class="testimonial-content">
                                        <h4>Code Club UDA</h4>
                                        <p>Code Club UDA privilegió a niñas en talleres de fundamentos en programación de este 2022</p>
                                        
                                        <p>Iniciativa que impulsa el departamento de Ingeniería en Informática y Ciencias de la 
                                            Computación desde el año 2014, para educar a escolares en lenguaje de programación en esta edición se 
                                            impartió exclusivamente para niñas a fin de minimizar brechas de género que se perciben en la disciplina.</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Testimonial Area End -->

         <!-- Blog Area Start -->
         <div class="rowtrans">
            <div class="rowtrans-title text-center">
                <h2>ÚLTIMAS PUBLICACIONES Y TÉSIS</h2>
            </div>                
        </div> 
         <div class="blog-area pt-50 pb-50">
            <div class="container">
                
                <div class="row">
                <?php
                        $sql = "SELECT p.*, f.Nombre AS autor FROM publicaciones AS p INNER JOIN funcionarios AS f ON p.id_academico = f.id ORDER BY fecha DESC LIMIT 3"; // mejorar query falta nombre del que subio la noticia
                        $resultado = mysqli_query($conexion, $sql);
                        while ($mostrar = mysqli_fetch_array($resultado)){
                            echo sprintf(
                                '
                                <div class="col-md-4 col-sm-6 col-xs-12" >
                                    <div class="single-blog" >
                                        <div class="blog-img" >
                                            <a href="%s"><img src="%s" alt="blog"></a>
                                            <div class="blog-hover">
                                                <a href="%s"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <div class="blog-content" ">
                                            <div class="blog-top">
                                                <p>Escrito por %s / %s</p>
                                            </div>
                                            <div class="blog-bottom">
                                                <h2><a href="%s">%s</a></h2>
                                                <a href="%s">Leer más...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ',
                                $mostrar['acceso'],
                                fromroot($file, $mostrar["img_path"], true),
                                utf8_encode($mostrar['acceso']),
                                utf8_encode($mostrar['autor']),
                                $mostrar['fecha'],
                                $mostrar['acceso'],
                                utf8_encode($mostrar['titulo']),
                                $mostrar['acceso']
                            );
                        }

                    ?>
                    
                </div>
            </div>
        </div>
        <!-- Blog Area End --> 
       


        <!-- Event Area Start -->
        <div class="event-area one text-center pt-140 pb-50" id="eventos">
            <div class="rowtrans">
                <div class="rowtrans-title">
                    <h2>PRÓXIMOS EVENTOS</h2>
                </div>                
            </div>
            
            <div class="container">
               
                <div class="row">
                    <?php
                        date_default_timezone_set('UTC');
                        setlocale(LC_ALL, 'ES');
                        $sql = "SELECT * FROM eventos WHERE fecha < CURDATE() ORDER BY id ASC LIMIT 6"; // mejorar query falta nombre del que subio la noticia
                        $resultado = mysqli_query($conexion, $sql);
                        $i = 0;
                        $data = array();
                        while ($mostrar = mysqli_fetch_array($resultado)){
                           
                            #$mostrar['fecha'] = new DateTime($mostrar['fecha']);
                            $mostrar['hora_inicio'] = new DateTime($mostrar['hora_inicio']);
                            $mostrar['hora_termino'] = new DateTime($mostrar['hora_termino']);
                            array_push($data, $mostrar);
                        }

                    ?>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <?php 
                        foreach(array_slice($data, 0 ,count($data)/2) as $m){ 
                            echo sprintf(
                                '
                                <div class="single-event mb-35">
                                    <div class="event-date">
                                        <h3><a>%s<span>%s</span></a></h3>
                                    </div>
                                    <div class="event-content text-left">
                                        <div class="event-content-left">
                                            <h4><a href="http://www.diicc.uda.cl/noticias.php">%s</a></h4>
                                            <ul>
                                                <li><i class="bi bi-clock-fill"></i>%s - %s</li>
                                                <li><i class="bi bi-pin-map-fill"></i>%s</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                ',
                                strftime('%d',strtotime ($m['fecha'])),
                                strftime('%B',strtotime($m['fecha'])),
                                utf8_encode($m['nombre']),
                                $m['hora_inicio']->format('H:i'),
                                $m['hora_termino']->format('H:i'),
                                utf8_encode($m['lugar'])
                            );
                        }
                        ?>
                    </div>
                    <div class="col-md-6 hidden-sm hidden-xs">
                    <?php 
                        foreach(array_slice($data,count($data)/2) as $m){
                            echo sprintf(
                                '
                                <div class="single-event mb-35">
                                    <div class="event-date">
                                        <h3><a>%s<span>%s</span></a></h3>
                                    </div>
                                    <div class="event-content text-left">
                                        <div class="event-content-left">
                                            <h4><a href="http://www.diicc.uda.cl/noticias.php">%s</a></h4>
                                            <ul>
                                                <li><i class="bi bi-clock-fill"></i>%s - %s</li>
                                                <li><i class="bi bi-pin-map-fill"></i>%s</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                ',
                                strftime('%d',strtotime($m['fecha'])),
                                strftime('%B',strtotime($m['fecha'])),
                                utf8_encode($m['nombre']),
                                $m['hora_inicio']->format('H:i'),
                                $m['hora_termino']->format('H:i'),
                                utf8_encode($m['lugar'])
                            );
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Area End -->
        


        <!-- FOOTER -->
        <?php include_once "include/footer.php"; ?>
        <!-- FOOTER -->

        
    </body>

</html>