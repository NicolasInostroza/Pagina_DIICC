<!doctype html>
<html class="no-js" lang="en">
<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Funcionarios - DIICC UDA";
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
                                    <h2>FUNCIONARIOS</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
		<!-- Banner Area End -->
        
        <!-- nuevas tarjetas de administrativos -->
        <div id="espacio"></div>
        <section class="container">
            <div class="row active-with-click">
                <?php
                    $sql = "SELECT * FROM funcionarios WHERE es_academico = 0";
                    $resultado = mysqli_query($conexion, $sql);
                    $consecutivo = 1;
                    while ($mostrar = mysqli_fetch_array($resultado)) {
                ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Teal">
                        <h3>
                            <span><a id="enlace" href="academico.php?id=<?php echo $mostrar['id']; ?>"><?php echo ($mostrar['Nombre']); ?></a></span>
                            <strong>
                                <?php echo ($mostrar['cargo']);?>
                            </strong>
                        </h3>
                        <div class="mc-content">
                            <div class="img-container">
                                <img alt="teacher" src=<?php echo fromroot($file, $mostrar['img_path']);?>>
                            </div>
                            <div class="mc-description">
                                <?php echo ($mostrar['grado_academico']) ?>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <div class="mc-footer">
                            <h5><?php echo ($mostrar['correo']) ?></h5>
                            <h5>fono: <?php echo ($mostrar['fono']) ?></h5>
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

        <!-- FOOTER -->
        <?php include_once "include/footer.php"; ?>
        <!-- FOOTER -->
    </body>
</html>
