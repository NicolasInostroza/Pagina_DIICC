<!doctype html>
<html class="no-js" lang="en">
<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Académicos - DIICC UDA";
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
                                    <h2>Académicos</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End -->
        <!-- Teacher Start -->
        <div class="teacher-area pt-150 pb-105">
            <div class="container">
                <div class="row teacher-grid">
                <?php
                    $sql = "select * from funcionarios WHERE es_academico = 1 ORDER BY jerarquia DESC";
                    $resultado = mysqli_query($conexion, $sql);
                    $consecutivo = 1;
                    while ($mostrar = mysqli_fetch_array($resultado)) {
                ?>

                        
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="academico.php?id=<?php echo $mostrar['id']; ?>"><img alt="teacher" src=<?php echo fromroot($file, $mostrar['img_path']);?>></a>
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="academico.php?id=<?php echo $mostrar['id']; ?>"><?php echo ($mostrar['Nombre']); ?></a></h2>
                                <h4><?php echo ($mostrar['cargo']);?></h4>
                                

                            </div>
                            
                        </div>
                
                <?php 
                    $consecutivo++;
            
            } 
            ?>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <?php include_once "include/footer.php"; ?>
        <!-- FOOTER -->
    </body>

</html>