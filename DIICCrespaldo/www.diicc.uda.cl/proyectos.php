<!doctype html>
<html class="no-js" lang="span">
<?php
session_start();
$file = __FILE__;
$pagetitle = "Proyectos - DIICC UDA";
include_once "config/config.php";
include_once "include/functions.php";
include_once "include/head.php";
if (!isset($_GET['page'])){
    $page = 0;
}
else{
    $page = $_GET['page'];
}
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
                                <h2>Proyectos</h2>
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
                            $sql =  sprintf("SELECT * FROM `proyectos` ORDER BY year DESC LIMIT 10 OFFSET %d",$page*10);
                            $resultado = mysqli_query($conexion, $sql);
                            while ($mostrar = mysqli_fetch_array($resultado)) { ?>

                                <div class="col-md-4 col-sm-6">
                                    <div class="single-blog mb-60">
                                        <div class="blog-img">
                                            <?php echo '<a href="' . $mostrar["link"] . '"></a>'; ?><img src=<?php echo fromroot($file, $mostrar['img_path']); ?>>
                                            <div class="blog-hover">
                                                <i class="fa fa-link"></i>
                                            </div>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-top">
                                                <p><?php echo $mostrar['year']; ?></p>
                                            </div>
                                            <div class="blog-bottom">
                                                <h2><?php echo '<a href="' . $mostrar["link"] . '">' . utf8_encode($mostrar['nombre']) . '</a>'; ?></h2>
                                                <?php echo '<a href="' . $mostrar["link"] . '">Seguir Leyendo</a>'; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                <div class="row">
                <div class="col-xs-12">
                <div class="pagination">
                        <ul>
                            <?php 
                            $total = mysqli_query($conexion, 'SELECT count(*) from proyectos;');
                            
                                $page = $page + 1;
                                echo '<li><a href="proyectos.php">1</a></li>';
                                if ($resultado->num_rows != 0){
                                    if($page > 1){
                                        echo sprintf('<li><a href="proyectos.php?page=%d">%d</a></li>', $page, $page);}
                                }
                            
                            ?>
                        </ul>
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