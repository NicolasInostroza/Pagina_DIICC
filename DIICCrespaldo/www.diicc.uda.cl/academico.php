<!doctype html>
<html class="no-js" lang="es">
<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Académico - DIICC UDA";
    include_once "config/config.php";
    include_once "include/functions.php";
    include_once "include/head.php";
?>



    <body>
        <!-- Header -->
        <?php include_once "include/header.php"; ?>
        <!-- Header Area End -->
       
        <!-- Teacher Start -->
        <?php 
            $sql = sprintf("select * from funcionarios where id=%s",$_GET['id']);
            $resultado = mysqli_query($conexion, $sql);
            $mostrar = mysqli_fetch_array($resultado); 
        ?>
        <div class="teacher-details-area pt-150 pb-60">
            <div class="container">
                <div class="col">
                    <div class="row-flex">

                        <div class="col teacher-details-img">
                            <img alt="teacher" class="wid100" src=<?php echo fromroot($file, $mostrar["img_path"]); ?>>
                        </div>

                        <div class="col teacher-details-content">
                            <style type="text/css">
                                table,
                                th,
                                td {
                                    border: 1px solid black;
                                }
                            </style>
                            <h2><?php echo $mostrar['Nombre']; ?></h2>
                            <h5><?php echo $mostrar['cargo'];?></h5>
                            <p><?php echo $mostrar['descripcion']; ?></p>
                            <ul>
                                <li><span>Grado Académico: </span><?php echo $mostrar['grado_academico']; ?>
                                </li>
                                <li><span>Áreas de interés: </span><?php echo $mostrar['area_interes']; ?>
                                </li>
                            </ul>

                            <div class="col">
                                <div class="teacher-contact">
                                    <h4>Información de contacto:</h4>
                                    <p><span>Correo: </span><?php echo $mostrar['correo']; ?></p>
                                    <p><span>FONO: </span><?php echo $mostrar['fono']; ?></p>
                                    <!--agregando codigo para redes sociales-->
                                    <div class="teacher-social contenedor-flex">
                                         <p>
                                            <?php if(!empty($mostrar['linkedin'])): ?>

                                                <a href="<?php echo $mostrar['linkedin']; ?>"target="_blank"><img src="img/academicos/linkedin.png" alt="LinkedIn" width="40" height="40"></a>

                                            <?php endif; ?> 
                                            <?php if(!empty($mostrar['google_scholar'])): ?>

                                                <a href="<?php echo $mostrar['google_scholar']; ?>"target="_blank"><img src="img/academicos/google-scholar.png" alt="GoogleScholar" width="40" height="40"></a>

                                            <?php endif; ?> 
                                            <?php if(!empty($mostrar['researchgate'])): ?>

                                                <a href="<?php echo $mostrar['researchgate']; ?>"target="_blank"><img src="img/academicos/researchgate.png" alt="ResearchGate" width="40" height="40"></a>

                                            <?php endif; ?>
                                            <?php if(!empty($mostrar['web'])): ?>

                                                <a href="<?php echo $mostrar['web']; ?>"target="_blank"><img src="img/academicos/web1.png" alt="web" width="40" height="40"></a>

                                            <?php endif; ?> 
                                        </p>    

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row-md-5 row-sm-5 row-xs-12" style="margin-top: 30px; margin-left: 50px">
                        <!-- escribir codigo 1 -->
                        <p>
                            <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">ARTICULOS</a>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">PROYECTOS</button>
                        </p>
                        <div class="row">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample1">
                                <?php
                                    $query = "SELECT `titulo`, `revision`, `fecha`, `acceso` FROM `publicaciones` WHERE id_academico=%s ORDER BY fecha DESC";
                                    #escribir codigo2
                                    
                                    $res = $conexion->query(sprintf($query,$_GET['id']));
                                    if ($res->num_rows != 0){
                                ?>
                                        <h3>Artículos</h3>
                                        <table class="table wid100">
                                            <thead class="table-dark">
                                                <tr align="center">
                                                    <th>Título</th>
                                                    <th>Base de Datos</th>
                                                    <th>Fecha de Publicación</th>
                                                    <th>Ver artículo</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            while ($row = $res->fetch_assoc()) {
                                            ?>
                                                <tr align="center">
                                                    <td><?php echo $row['titulo']; ?></td>
                                                    <td><?php echo $row['revision']; ?></td>
                                                    <td><?php echo $row['fecha']; ?></td>
                                                    <td><a href="<?php echo $row['acceso']; ?>">Ver Artículo</a></td>
                                                </tr>
                                            <?php
                                            } ?>
                                    </table>
                                </div>
                                <?php
                                } ?>
                            </div>
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                    <?php
                                        $query = "SELECT `nombre`, `year`, `link` FROM `proyectos` WHERE id_academicos=%s ORDER BY 'year' DESC";
                                        
                                    
                                        $res = $conexion->query(sprintf($query,$_GET['id']));
                                        if ($res->num_rows != 0){
                                    ?>
                                    <h3>Proyectos</h3>
                                        <table class="table wid100">
                                            <thead class="table-dark">
                                                <tr align="center">
                                                    <th>Título</th>
                                                    <th>Fecha de Publicación</th>
                                                    <th>Ver artículo</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            while ($row = $res->fetch_assoc()) {
                                            ?>
                                                <tr align="center">
                                                    <td><?php echo $row['nombre']; ?></td>
                                                    <td><?php echo $row['year']; ?></td>
                                                    <td><a href="<?php echo $row['link']; ?>">Ver Proyecto</a></td>
                                                </tr>
                                            <?php
                                            } ?>
                                    </table>
                                </div>
                                <?php
                                }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <?php include_once "include/footer.php"; ?>
        <!-- FOOTER -->
    </body>

</html>