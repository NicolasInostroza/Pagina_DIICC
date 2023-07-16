<!doctype html>
<html class="no-js" lang="span">
<?php
session_start();
$file = __FILE__;
$pagetitle = "Proyectos - DIICC UDA";
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

$query = "SELECT * FROM proyectos order by 'year' DESC LIMIT $start_from, $registro_por_pagina";
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
                            $sql =  sprintf("SELECT * FROM `proyectos` ORDER BY year DESC LIMIT $start_from, $registro_por_pagina"); // mejorar query falta nombre del que subio la noticia
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
                                                <div class="blog-content" style="margin: 10px">
                                                    <div class="badge badge-primary badge-sm" style="font-size: 15px"><?php echo $mostrar['year']; ?></div>
                                                    <div class="card-title" style="font-size: 15px; padding-top: 8px"><?php echo '<a href="' . $mostrar["link"] . '">' . utf8_encode($mostrar['nombre']) . '</a>'; ?></div>
                                                    <p style="padding: 5px; font-size: 20px"><?php echo $mostrar['descripcion']; ?></p>
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

                                $page_query = "SELECT * FROM proyectos ORDER BY year DESC";
                                $page_result = mysqli_query($conexion, $page_query);
                                $total_records = mysqli_num_rows($page_result);
                                $total_pages = ceil($total_records/$registro_por_pagina);
                                $start_loop = $pagina;
                                $diferencia = $total_pages - $pagina;
                                if($total_pages == 1){
                                    echo "<li><a class='pagina' href='proyectos.php'>1</a></li>";
                                }
                                else{
                                    if($diferencia <= ($total_pages - 1))
                                    {
                                    $start_loop = $total_pages - ($total_pages - 1);
                                    }
                                    $end_loop = $start_loop + ($total_pages - 2);
                                    if($pagina > 1)
                                    {
                                    echo "<li><a class='pagina' href='proyectos.php?pagina=1'>In</a></li>";
                                    echo "<li><a class='pagina' href='proyectos.php?pagina=".($pagina - 1)."'><</a></li>";
                                    }
                                    for($i=$start_loop; $i<=$end_loop; $i++)
                                    {     
                                    echo "<li><a class='pagina' href='proyectos.php?pagina=".$i."'>".$i."</a></li>";
                                    }
                                    if($pagina <= $end_loop)
                                    {
                                    echo "<li><a class='pagina' href='proyectos.php?pagina=".($pagina + 1)."'>></a></li>";
                                    echo "<li><a class='pagina' href='proyectos.php?pagina=".$total_pages."'>Úl</a></li>";
                                    }
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