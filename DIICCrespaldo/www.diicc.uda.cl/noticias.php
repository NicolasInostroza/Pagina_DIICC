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
    $registro_por_pagina = 6;
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

    $query = "SELECT * FROM noticias order by fecha DESC LIMIT $start_from, $registro_por_pagina";
    $result = mysqli_query($conexion, $query);  
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
            
            <div class="row">
            <?php
            
                $sql = sprintf("SELECT * FROM noticias ORDER BY id DESC LIMIT $start_from, $registro_por_pagina"); 
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
                
             ?> 
                <!-- cierre del while -->
            
            </div>
            <div class="row" align="center">
                <div class="col-xs-12">
                    <div class="pagination">
                        <ul>
                            <?php

                                $page_query = "SELECT * FROM noticias ORDER BY fecha DESC";
                                $page_result = mysqli_query($conexion, $page_query);
                                $total_records = mysqli_num_rows($page_result);
                                $total_pages = ceil($total_records/$registro_por_pagina);
                                $start_loop = $pagina;
                                $diferencia = $total_pages - $pagina;
                                if($diferencia <= ($total_pages - 1))
                                {
                                $start_loop = $total_pages - ($total_pages - 1);
                                }
                                $end_loop = $start_loop + ($total_pages - 2);
                                if($pagina > 1)
                                {
                                echo "<li><a class='pagina' href='noticias.php?pagina=1'><<</a></li>";
                                echo "<li><a class='pagina' href='noticias.php?pagina=".($pagina - 1)."'><</a></li>";
                                }
                                for($i=$start_loop; $i<=$end_loop; $i++)
                                {     
                                echo "<li><a class='pagina' href='noticias.php?pagina=".$i."'>".$i."</a></li>";
                                }
                                if($pagina <= $end_loop)
                                {
                                echo "<li><a class='pagina' href='noticias.php?pagina=".($pagina + 1)."'>></a></li>";
                                echo "<li><a class='pagina' href='noticias.php?pagina=".$total_pages."'>>></a></li>";
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