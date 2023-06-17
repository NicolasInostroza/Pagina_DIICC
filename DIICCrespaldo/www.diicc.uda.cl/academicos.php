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

    <body id="body_academicos">
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

        <!-- nuevas tarjetas de academicos -->
        <div id="espacio"></div>
        <section class="container">
            <div class="row active-with-click">
                <?php
                    $sql = "SELECT * FROM funcionarios WHERE es_academico = 1 ORDER BY jerarquia DESC";
                    $resultado = mysqli_query($conexion, $sql);
                    $consecutivo = 1;
                    while ($mostrar = mysqli_fetch_array($resultado)) {
                ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Teal">
                        <h3>
                            <span><a id="enlace" href="academico.php?id=<?php echo $mostrar['id']; ?>"><?php echo utf8_encode($mostrar['Nombre']); ?></a></span>
                            <strong>
                                <?php echo utf8_encode($mostrar['cargo']);?>
                            </strong>
                        </h3>
                        <div class="mc-content">
                            <div class="img-container">
                                <img alt="teacher" src=<?php echo fromroot($file, $mostrar['img_path']);?>>
                            </div>
                            <div class="mc-description">
                                <?php echo utf8_decode($mostrar['grado_academico']) ?>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <div class="mc-footer">
                            <h5><?php echo utf8_decode($mostrar['correo']) ?></h5>
                            <h5>fono: <?php echo utf8_decode($mostrar['fono']) ?></h5>
                        </div>
                    </article>
                    <div id="espacio"></div>
                </div>
                <?php 
                    $consecutivo++;
            
            } 
            ?>
            </div>
        </section>
        <!--end teacher-->

        <!-- FOOTER -->
        <?php include_once "include/footer.php"; ?>
        <!-- FOOTER -->
    </body>

</html>