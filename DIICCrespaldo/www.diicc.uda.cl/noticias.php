<!DOCTYPE html>
<html class="no-js" lang="en">
<meta charset="utf-8">    
<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Noticias - DIICC UDA";
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

    <!-- Banner -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>Noticias</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Banner -->

    <!-- Blog Start -->
    <div class="blog-area pt-50 pb-50">
        <div class="container">
            <div>
                <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                    <div align="right" class="noti">
                        <div>
                            <input type="number" class="form-control" placeholder="Buscar por año" style="width: 150px;" name="fecha">
                        </div>
                        <div>
                            <input class="btn" style="background-color: rgb(40, 57, 72); color: white;" type="submit" name="enviar" value="🔍︎">
                        </div>

                    </div>
                    
                    
                    
                </form>
                
            </div><br>
            <div class="row">
            <?php
            if(isset($_POST['enviar'])){
                $fecha=$_POST['fecha'];
                
                if(empty($_POST['fecha'])){
                    $sql = sprintf("SELECT * FROM noticias where YEAR(fecha)='$fecha' ORDER BY id DESC LIMIT 12 OFFSET %d",$page*12); 
                }else{
                    
                    if(!empty($_POST['fecha'])){
                        $sql = sprintf("SELECT * FROM noticias where YEAR(fecha)='$fecha' ORDER BY id DESC LIMIT 12 OFFSET %d",$page*12); 
                    }
                }
                $resultado = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_array($resultado)) {
                ?>
                <!-- Título noticia1 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog mb-60 bg-warning">
                            <div class="blog-img">
                                <?php echo '<a href="noticia.php?id=' . $mostrar["id"] . '"></a>'; ?><img src=<?php echo fromroot($file, $mostrar['img_path']);?>></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-top">
                                    <p>Escrito por <?php echo $mostrar['correo']; ?> / <?php echo $mostrar['fecha']; ?></p>
                                </div>
                                <div class="blog-bottom">
                                    <?php
                                    $titulocorte=substr($mostrar['titulo'] ,0,50);
                                    ?>
                                    <h2><?php echo '<a href="noticia.php?id=' . $mostrar["id"] . '">' . $titulocorte . '...</a>'; ?></h2>
                                    <!-- Ojos con el error de index del while si existen noticias -->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } 
            }else{
                $sql = sprintf("SELECT * FROM noticias ORDER BY id DESC LIMIT 12 OFFSET %d",$page*12); 
                $resultado = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_array($resultado)) {
                ?>


                    <!-- Título noticia1 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog mb-60 bg-warning">
                            <div class="blog-img">
                                <?php echo '<a href="noticia.php?id=' . $mostrar["id"] . '"></a>'; ?><img src=<?php echo fromroot($file, $mostrar['img_path']);?>></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-top">
                                    <p>Escrito por <?php echo $mostrar['correo']; ?> / <?php echo $mostrar['fecha']; ?></p>
                                </div>
                                <div class="blog-bottom">
                                    <?php
                                    $titulocorte=substr($mostrar['titulo'] ,0,50);
                                    ?>
                                    <h2><?php echo '<a href="noticia.php?id=' . $mostrar["id"] . '">' . $titulocorte . '...</a>'; ?></h2>
                                    <!-- Ojos con el error de index del while si existen noticias -->
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } 
                
            } ?> 
                <!-- cierre del while -->
            
            </div>
            <div class="row" align="center">
                <div class="col-xs-12">
                    <div class="pagination">
                        <ul>
                            <?php 
                            $total = mysqli_query($conexion, 'SELECT count(*) from noticias;');
                            
                                if ($page == 0){
                                    ++$page;
                                }
                                    $page = $page + 1;
                                    echo '<li><a href="noticias.php">1</a></li>';
                                if ($resultado->num_rows != 0){
                                    echo sprintf('<li><a href="noticias.php?page=%d">%d</a></li>', $page, $page);
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
</body>

</html>