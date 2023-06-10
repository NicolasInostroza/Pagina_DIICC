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
                            <img alt="teacher" style="width: 100%;" src=<?php echo fromroot($file, $mostrar["img_path"]); ?>>
                        </div>

                        <div class="col teacher-details-content">
                            <style type="text/css">
                                table,
                                th,
                                td {
                                    border: 1px solid black;
                                }
                            </style>
                            <h2><?php echo utf8_encode($mostrar['Nombre']); ?></h2>
                            <h5><?php echo utf8_encode($mostrar['cargo']);?></h5>
                            <p><?php echo utf8_encode($mostrar['descripcion']); ?></p>
                            <ul>
                                <li><span>Grado Académico: </span><?php echo utf8_encode($mostrar['grado_academico']); ?>
                                </li>
                                <li><span>Áreas de interés: </span><?php echo utf8_encode($mostrar['area_interes']); ?>
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
                        
                    <div class="row-md-5 row-sm-5 row-xs-12 bg-primary ">
                        <?php
                            $query1 = "SELECT `nombre`, `fecha`,`descripcion`, `img_path`, `link` FROM `projectacademic` WHERE id_academico=%s ORDER BY fecha DESC";
                            #escribir codigo2
                            
                            $res1 = $conexion->query(sprintf($query1,$_GET['id']));
                            if ($res1->num_rows != 0) {
                        ?>
                        <h3>Proyectos</h3>
                        <table class="table" style="width: 100%; color:black;">
                            <thead class="table-dark">
                                <tr align="center">
                                    <th>Título</th>
                                    <th>Base de Datos</th>
                                    <th>Fecha de Publicación</th>
                                    <th>Ver proyecto</th>
                                </tr>
                            </thead>
                            <?php
                            while ($row1 = $res1->fetch_assoc()) {
                            ?>
                                <tr align="center">
                                    <td><?php echo utf8_encode($row1['nombre']); ?></td>
                                    <td><?php echo utf8_encode($row1['descripcion']); ?></td>
                                    <td><?php echo $row1['fecha']; ?></td>
                                    <td><a href="<?php echo $row1['link']; ?>">Ver Proyecto</a></td>
                                </tr>
                            <?php
                            } ?>
                        </table>
                        <?php
                            } ?>
                        <!--<div class="col-4 bg-danger border" style="display:flex; align-items:center; height:50%;">
                            <p>funciona todo con tablas?</p>
                        </div>
                        <div class="col-4 bg-warning border">
                            <p>donde esta esto</p>
                        </div>
                        <div class="col-4 bg-danger " style="">
                            <p>ddd</p>
                        </div>-->
                    </div>
                       
                    <div class="row-md-5 row-sm-5 row-xs-12">
                        <!-- escribir codigo 1 -->

                        <?php
                            $query = "SELECT `titulo`, `revision`, `fecha`, `acceso` FROM `publicaciones` WHERE id_academico=%s ORDER BY fecha DESC";
                            #escribir codigo2
                            
                            $res = $conexion->query(sprintf($query,$_GET['id']));
                            if ($res->num_rows != 0){
                        ?>
                        <h3>Artículos</h3>
                        <table class="table" style="width: 100%">
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
                                    <td><?php echo utf8_encode($row['titulo']); ?></td>
                                    <td><?php echo utf8_encode($row['revision']); ?></td>
                                    <td><?php echo $row['fecha']; ?></td>
                                    <td><a href="<?php echo $row['acceso']; ?>">Ver Artículo</a></td>
                                </tr>
                            <?php
                            } ?>
                        </table>
                        <?php
                            } ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <?php include_once "include/footer.php"; ?>
        <!-- FOOTER -->
    </body>

</html>