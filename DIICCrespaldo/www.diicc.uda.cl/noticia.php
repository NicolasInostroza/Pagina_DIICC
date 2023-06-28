<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Académicos - DIICC UDA";
    include_once "config/config.php";
    include_once "include/functions.php";

    $id = $_GET['id'];
    $sql = "select * from noticias where id = {$id}";
    $resultado = mysqli_query($conexion,$sql);
    $mostrar = mysqli_fetch_array($resultado);
?>
<!doctype html>
<html class="no-js" lang="en">
    <?php include_once "include/head.php"; ?>
    <!-- HEADER -->
    <?php include_once "include/header.php"; ?>
    <!-- HEADER -->
    <body>
        
        <!-- Blog Start -->
        <div class="blog-details-area pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-details">
                            
                            <div class="blog-details-content">
                                <h2><?php echo $mostrar['titulo']; ?></h2>
                                <div class="blog-details-img">
                                    <img src=<?php echo fromroot($file, $mostrar["img_path"]); ?>></a>
                                </div>
                                <h6>Escrito por <?php echo $mostrar['correo']; ?>  / <?php echo strftime('Publicado el %d/%m/%Y a las %I:%M %p', strtotime($mostrar['fecha'])); ?></h6>
                                <p><?php echo $mostrar['descripcion']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-sidebar right">
                            
                            <div class="single-blog-widget mb-47">
                                <h3>Noticias por año</h3>
                                <!-- Accordion -->
                                <div class="panel-group" id="accordion" role="tablist">
                                    <?php
                                    $cont=1;
                                    $sql="SELECT * FROM `noticias` ORDER BY fecha DESC";
                                    $resultado = mysqli_query($conexion, $sql);
                                    $año_anterior='9999';
                                    while($mostrar = mysqli_fetch_array($resultado)){
                                            $año_actual=strftime('%Y', strtotime($mostrar['fecha']));
                                    ?>

                                    <?php
                                            if ((strcmp($año_actual,$año_anterior))!==0){//$añi_ante|1rior
                                                $año_anterior=strftime('%Y', strtotime($mostrar['fecha']));
                                                ?>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading<?=$cont?>">
                                                    <h4 class="panel-title">
                                                        <a href="#collapse<?=$cont?>" data-toggle="collapse" data-parent="#accordion">
                                                            <?php echo strftime('%Y', strtotime($mostrar['fecha']))?>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id=collapse<?=$cont?> class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                    
                                                        <?php
                                                            $sql2="SELECT * FROM `noticias`";
                                                            $resultado2 = mysqli_query($conexion, $sql2);
                                                            while($mostrar2 = mysqli_fetch_array($resultado2)){
                                                            ?>
                                                            <?php
                                                                if (strftime('%Y', strtotime($mostrar['fecha']))==strftime('%Y', strtotime($mostrar2['fecha']))){
                                                                    $titulo=$mostrar2['titulo'];
                                                                    $titulocorte=substr($titulo,0,30);
                                                            ?>
                                                            <br><h4><?php echo '<a href="noticia.php?id=' . $mostrar2["id"] . '">' . $titulocorte . '..</a>';?></h4><br>
                                                            <?php
                                                            }
                                                            }
                                                            ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            }
                                        ?>
                                        <?php
                                        $cont ++;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->
        
        <!-- FOOTER -->
        <?php include_once "include/footer.php"; ?>
        <!-- FOOTER -->
    </body>
</html>
