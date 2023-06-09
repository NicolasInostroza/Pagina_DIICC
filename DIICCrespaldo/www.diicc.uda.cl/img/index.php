<!doctype html>
<html class="no-js" lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
    session_start();
    $_SESSION['root'] = dirname(__FILE__);
    $file = __FILE__;
    $pagetitle = "UDA - Departamento de Ingeniería Informática y Comunicación";
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
                <!-- Start Slingle Slide -->
                <div class="single-slide item" style="background-image: url(img/slide/img1.jpg)">
                    <!-- Start Slider Content -->
                    <div class="slider-content-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-md-offset-left-5">
                                    <div class="slide-content-wrapper">
                                        <div class="slide-content">
                                            <h3>DEPARTAMENTO DE INGENIERÍA </h3>
                                            <h2>CIVIL EN COMPUTACIÓN E INFORMÁTICA </h2>
                                            <p>Universidad de Atacama, Copiapó, Atacama, Chile.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Slider Content -->
                </div>
                <!-- End Slingle Slide -->
                <!-- Start Slingle Slide -->
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
                <!-- End Slingle Slide -->
                <!-- Start Slingle Slide -->
                <div class="single-slide item" style="background-image: url(img/slide/img3.jpg)">
                    <!-- Start Slider Content -->
                    <div class="slider-content-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-md-offset-left-5">
                                    <div class="slide-content-wrapper">
                                        <div class="slide-content">
                                            <h3>PROFESORES </h3>
                                            <h2> </h2>
                                            <p>Conoce a nuestros profesores </p>
                                            <a class="default-btn" href="academicos.php">Ver profesores</a>
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
        </section>
         <!-- videos -->
        <div class="tvideos">
            <div class="video1">
                <video src="vid/uno.mp4" type="video/mp4"></video>                            
            </div>
            <div class="video2">
                <video src="vid/dos.mp4" type="video/mp4"></video> 
            </div>
        </div>            
        
        <!-- videos End -->
        <!-- Background Area End -->
        <!-- Panel de noticias -->
        <section class="notice-area pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="notice-left">
                            <h3>Panel de noticias</h3>
                            <?php
                             $sql = "SELECT titulo,descripcion,img_path FROM noticias ORDER BY id DESC";  // mejorar query falta nombre del que subio la noticia
                            $resultado = mysqli_query($conexion, $sql);
                            //mysql_select_db("paginaDIICC");
                            // $resultado =$conexion->query($sql);
                            // if($resultado->num_rows>0){
                            //     echo $resultado->num_rows;
                            // }
                            //$mostrar = utf8_encode($mostrar);                          
                            while ($mostrar = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

                              
                                if (strlen($mostrar['descripcion']) > 250 ){
                                    $mostrar['descripcion'] = substr($mostrar['descripcion'],0, 250)."...";
                                }
                            ?>
                                <a class="card mb-3" style="width: 100%; height: 200px;" <?php echo sprintf('href="http://www.paginadiicc.uda.cl/noticias.php"', $mostrar['id']);?>>
                                    <div class="row w-100">
                                        <div class="col-md-3">
                                                                                                    
                                            <img style="width: 200px; height: 200px;" path="*.woff" src=<?php echo fromroot($file, $mostrar["img_path"]); ?>>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="let card-body">
                                                <h4 class="card-title"><?php echo utf8_encode($mostrar['titulo']); ?> </h4>
                                                <p class="card-text"><?php echo utf8_encode($mostrar['descripcion']); ?></p>
                                                <div class="d-flex flex-row justify-content-between">
                                                    <p class="card-text"><small class="text-muted"><?php echo $mostrar['fecha']; ?></small></p>
                                                    <p class="card-text"><small class="text-muted"><?php echo "Autor: ",$mostrar['correo']; ?></small></p>
                                                    
                                                        
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <hr class="solid" style="border-top: 3px solid #bbb;">
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Notice End -->
        <!-- Choose Start -->
        <section class="fiuda">
            <div class="sesion--fiuda">
                <div class="fiuda--logo">                            
                    <a class="logo" href=<?php echo  fromroot($file, "index.php"); ?>>
                        <img src=<?php echo fromroot($file, "img/logo/FIUDA.jpg"); ?> alt="">
                    </a>
                </div>
                <div class="fiuda--desc">
                    <p>Este proyecto es desarrollado gracias al Fondo de Innovación para la Competitividad Regional (FIC) del Gobierno Regional, recursos aprobados por el CORE Atacama. El cual tiene la misión de formar ingenieros altamente competentes y responsables con el medio ambiente, con foco en el sector minero, a través de docencia de pregrado y postgrado, investigación y vinculación con la comunidad, para el desarrollo económico, social, científico, tecnológico de la región y el país.</p>
                    <p class="choose-option">Posicionar la I+D aplicada como una actividad esencial del quehacer de la Facultad, ligada a la capacidad para desarrollo de transferencia de conocimiento, de innovación y emprendimiento para el sector productivo.. </p>
                    <a class="default-btn" href="http://www.fiuda2030.uda.cl/">Más información</a>
                </div>
            </div>            
        </section>
        <!-- Choose Area End -->
        <!-- Courses Area Start -->
        <div class="courses-area pt-150 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title">

                            <h2>ALGÚNAS ÁREAS</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-course">
                            <div class="course-img">
                                <a href="areas/AreaProgramacion.php"><img src="img/areas/ArtificialIntelligent/img1.jpg" alt="course">
                                    <div class="course-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="course-content">
                                <h3><a href="#">Inteligencia de Maquinas</a></h3>
                                <p>La ciencia de computación ha facilitado la creación de tecnologías con capacidades de procesamiento.</p>                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-course">
                            <div class="course-img">
                                <a href="postgrado-procesos-software.html"><img src="img/areas/SoftwareEngineering/img1.jpg" alt="course">
                                    <div class="course-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="course-content">
                                <h3><a href="postgrado-procesos-software.html">Ingenieria de<br>Software<br> </a></h3>
                                <p>La Ingeniería de Software comprende procesos, metodologías, métodos, herramientas, y personas.</p>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm col-xs-12">
                        <div class="single-course">
                            <div class="course-img">
                                <a href="areas/GestionTI.php"><img src="img/areas/GestionTI/img1.jpg" alt="course">
                                    <div class="course-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="course-content">
                                <h3><a href="Carrera-postitulo-Diplomado-gestion.html">Gestion <br>TI<br></a></h3>
                                <p>La información cada vez más valiosa en las organizaciones requiere de procesos, tecnologías y técnicas adecuadas para su procesamiento. El uso correcto de los datos y la generación de información otorga un activo relevante y diferenciador para las empresas e instituciones. Esta área tiene que ver con líneas como TICs, Dataminig, Big data, entre otros.</p>                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses Area End -->
        <!-- Event Area Start -->
        <div class="event-area one text-center pt-140 pb-150" id="eventos">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title">

                            <h2>Próximos eventos</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        date_default_timezone_set('UTC');
                        setlocale(LC_ALL, 'ES');
                        $sql = "SELECT * FROM eventos WHERE fecha < CURDATE() ORDER BY fecha ASC LIMIT 6"; // mejorar query falta nombre del que subio la noticia
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
                                            <h4><a href="http://www.paginadiicc.uda.cl/noticias.php">%s</a></h4>
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
                                            <h4><a href="http://www.paginadiicc.uda.cl/noticias.php">%s</a></h4>
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
        <!-- Testimonial Area Start -->
        <div class="testimonial-area pt-110 pb-105 text-center">
            <div class="container">
                <div class="row">
                    <div class="testimonial-owl owl-theme owl-carousel">
                        <div class="col-md-8 col-md-offset-2 col-sm-12">
                            <div class="single-testimonial">
                                <div class="testimonial-info">
                                    <div class="testimonial-img">
                                        <img src="img/academicos/img1.jpg" alt="academicos">
                                    </div>
                                    <div class="testimonial-content">
                                        <p>Palabras del director de la carrera para invitación a nuevos alumnos como futuros profesionales...</p>
                                        <h4>SERVANDO CAMPILLAY</h4>
                                        <h5>Director, Departamento de ingenieria civil informática y ciencias de la computación.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Area End -->
        <!-- Blog Area Start -->
        <div class="blog-area pt-150 pb-150">
            <div class="container">
                <div class="rows">                    
                    <div class="section-title text-center">
                        <h2>ÚLTIMAS PUBLICACIONES Y TÉSIS</h2>
                    </div>
                    <div class="rowe d-flex aling-items-stretch">                            
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
                                    $mostrar['acceso'],
                                    $mostrar['autor'],
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
        </div>
        
        <!-- Blog Area End -->

        <!-- FOOTER -->
        <?php include_once "include/footer.php"; ?>
        <!-- FOOTER -->

        
    </body>

</html>