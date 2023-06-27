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
                            $sql =  sprintf("SELECT * FROM `proyectos` ORDER BY year DESC LIMIT 10 OFFSET %d",$page*10); // mejorar query falta nombre del que subio la noticia
                            $resultado = mysqli_query($conexion, $sql);
                            while ($mostrar = mysqli_fetch_array($resultado)) { ?>

                                <div class="col-md-4 col-sm-8">
                                    <div class="single-blog mb-60 text-center">
                                            <div class="blog-img">
                                                <?php echo '<a href="' . $mostrar["link"] . '"></a>'; ?><img src=<?php echo fromroot($file, $mostrar['img_path']); ?>>
                                                <div class="blog-hover">
                                                    <i class="fa fa-link"></i>
                                                </div>
                                            </div>
                                            <div class="blog-content">
                                                <div class="blog-content" style="font-size: 15px; margin: 10px">
                                                    <div class="badge badge-primary badge-sm"><?php echo $mostrar['year']; ?></div>
                                                    <div class="card-title"><?php echo '<a href="' . $mostrar["link"] . '">' . utf8_encode($mostrar['nombre']) . '</a>'; ?></div>
                                                    <p style="padding: 5px"><?php echo $mostrar['descripcion']; ?></p>
                                                </div>
                                            </div>
                                            <div class="blog-bottom">
                                            <?php echo '<a href="' . $mostrar["link"] . '"><span>LEER MÁS
                                                    <img src="https://static3.avast.com/1/web/i/v2/components/arrow-m-right-orange.png" height="24">
                                                </span>
                                                </a>'; ?>
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