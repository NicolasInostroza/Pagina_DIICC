<!doctype html>
<html class="no-js" lang="span">

<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Publicaciones - DIICC UDA";
    include_once "config/config.php";
    include_once "include/functions.php";
    include_once "include/head.php";
    $registro_por_pagina = 12;
    $pagina = '';
    if(isset($_GET["pagina"]))
    {
    $pagina = $_GET["pagina"];
    }
    else
    {
    $pagina = 1;
    }

    $start_from = ($pagina-1)*$registro_por_pagina;

    $query = "SELECT * FROM publicaciones order by fecha DESC LIMIT $start_from, $registro_por_pagina";
    $result = mysqli_query($conexion, $query);  
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
                                <h2>Publicaciones</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Blog Start -->
    <div class="blog-area pt-150 pb-150">
        <div class="container">
            <div class="row d-flex">
                <?php
                    date_default_timezone_set('UTC');
                    setlocale(LC_ALL, 'ES');
                    $sql = sprintf("SELECT p.*, f.Nombre AS autor FROM publicaciones AS p INNER JOIN funcionarios AS f ON p.id_academico = f.id ORDER BY p.fecha DESC LIMIT $start_from, $registro_por_pagina");
                    $resultado = mysqli_query($conexion, $sql);
                    while ($mostrar = mysqli_fetch_array($resultado)){ ?>


                    <div class="col-md-4 col-sm-6" >
                        <div class="single-blog mb-60" >
                            <div class="blog-img">
                                <?php echo '<a href="publicaciones.php?id=' . $mostrar["id"] . '"></a>'; ?><img src=<?php echo fromroot($file, $mostrar["img_path"]); ?>></a>
                                <div class="blog-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-top">
                                    <p><?php echo utf8_encode($mostrar['autor']); ?> / <?php echo $mostrar['fecha'];?> / <?php echo $mostrar['revision'];?></p>
                                </div>
                            <div class="blog-bottom">
                            <h2><?php echo '<a href="' . $mostrar["acceso"] . '">' . utf8_encode($mostrar['titulo']) . '</a>'; ?></h2>
                            <?php echo '<a href="' . $mostrar["acceso"] . '">Seguir Leyendo</a>'; ?>
                            </div>
                                </div>
                        </div>
                    </div>                         
                <?php  }?>
            </div>
               
            <div class="row" align="center">
                <div class="col-xs-12">
                    <div class="pagination">
                        <ul>
                            <?php

                                $page_query = "SELECT * FROM publicaciones ORDER BY fecha DESC";
                                $page_result = mysqli_query($conexion, $page_query);
                                $total_records = mysqli_num_rows($page_result);
                                $total_pages = ceil($total_records/$registro_por_pagina);
                                $start_loop = $pagina;
                                $diferencia = $total_pages - $pagina;
                                if($diferencia <= 12)
                                {
                                $start_loop = $total_pages - 12;
                                }
                                $end_loop = $start_loop + 11;
                                if($pagina > 1)
                                {
                                echo "<li><a class='pagina' href='publicaciones.php?pagina=1'>In</a></li>";
                                echo "<li><a class='pagina' href='publicaciones.php?pagina=".($pagina - 1)."'><</a></li>";
                                }
                                for($i=$start_loop; $i<=$end_loop; $i++)
                                {     
                                echo "<li><a class='pagina' href='publicaciones.php?pagina=".$i."'>".$i."</a></li>";
                                }
                                if($pagina <= $end_loop)
                                {
                                echo "<li><a class='pagina' href='publicaciones.php?pagina=".($pagina + 1)."'>></a></li>";
                                echo "<li><a class='pagina' href='publicaciones.php?pagina=".$total_pages."'>Úl</a></li>";
                                }
                            
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            
            

            


        </div>

    </div>
    <!-- Blog End -->
    <!-- FOOTER -->
    <?php include_once "include/footer.php"; ?>
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