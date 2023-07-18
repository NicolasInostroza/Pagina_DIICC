<!DOCTYPE html>
<html lang="es">
<head>
    <script>
        function seguro(){
            return confirm("¿Desea eliminar este proyecto?");
        }
    </script>
</head>
<?php

	session_start();
    $file = __FILE__;
    $pagetitle = "ACADEMICOS - DIICC UDA";
    include_once "../config/config.php";
    include_once "../include/functions.php";

	if (!isset($_SESSION['usuario'])){
		header(sprintf('Location:%s', fromroot($file, "index.php", True)));
	}
	include_once fromroot($file, "include/dashboard/head.php", TRUE);
?>

<body>
    <div class="container-contenido">
        <?php include_once fromroot($file, "include/dashboard/header.php", TRUE); ?>
        <div class="capa"></div>
        <!--	--------------->
        
        <?php include_once fromroot($file, "include/dashboard/navbar.php", TRUE); ?>
        <div class="fondo">
            <img src="../img/dpto/dpto.jpg" alt="">
        </div>
        <div class="container-center rounded">
            <section class="seccion">
                <div class="container-Noticias">
                     <div class="container-boton">
                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                            Añadir Proyecto
                        </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 style="text-align:center;" class="modal-title" id="exampleModalLabel">Nuevo Proyecto</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                 <div class="modal-body">
                                    <form action="../database/proyectos/crear.php" method="POST" enctype="multipart/form-data">
                                     <div style="margin-left: 110px;" class="form-field "><br>
                                         <input   name="img" type="file" required>
                                    </div>
                                    <div class="form-field  " style="text-align:center; margin-top: 5px;">
                                        <input style="width: 200px; text-align:center;" id="nombre" name="nombre" class="input-text js-input" placeholder="Nombre" type="text" required>
                     
                                    </div>
                                    <div class="form-field  " style="text-align:center; margin-top: 5px;">
                                        <input style="width: 200px; text-align:center;" id="año" name="year" class="input-text js-input" placeholder="Año" type="text" required>
                                    </div>
                                    <div class="form-field  " style="text-align:center; margin-top: 5px;">
                                        <input style="width: 200px; text-align:center;" id="link" name="link" class="input-text js-input" placeholder="Link" type="text" required>
                                    </div>
                                    <div style="margin-top:30px; text-align: center;" class="container-ingresar">
                                        <button type="submit" class="btn">Ingresar</button>
                                    </div>
                                </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="adminforms">
                    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                        <div>
                            <label style="color: white;">Nombre:</label>
                            <input type="text" name="nombre">
                            <label style="color: white;">Año:</label>
                            <input type="year" name="year">
                            
                            <input class="bb btn btn-danger" type="submit" name="enviar" value="BUSCAR">
                            <a href="http://localhost/Pagina_DIICC/DIICCrespaldo/www.diicc.uda.cl/dashboard/AdminGestorProyectos.php" class="bb btn btn-danger justify-content-end">MOSTRAR A TODOS</a>

                        </div>
                        
                        
                    </form>
                </div><br>
                    <table class="table">
                        <thead style="background-color: steelblue;">
                            <tr style="height: 40px;">
                                <th scope="col">Imagen</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Año</th>
                                <th scope="col">Link</th>
                                <th scope="col">Accion</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            <?php
                            if(isset($_POST['enviar'])){
                                $nombre=$_POST['nombre'];
                                $year=$_POST['year'];
                                if(empty($_POST['nombre']) && empty($_POST['year'])){
                                    $sql="SELECT * from proyectos where nombre like '%".$nombre."%' ORDER BY year DESC ";
                                }else{
                                    if(empty($_POST['nombre'])){
                                        $sql="SELECT * from proyectos where year <= '$year' ORDER BY year DESC ";
                                    }
                                    if(empty($_POST['year'])){
                                        $sql="SELECT * from proyectos where nombre like '%".$nombre."%' ORDER BY year DESC ";
                                    }
                                    if(!empty($_POST['nombre']) && !empty($_POST['year'])){
                                        $sql="SELECT * from proyectos where nombre like '%".$nombre."%' and year <= '$year' ORDER BY year DESC ";
                                    }
                                }
                                $resultado = mysqli_query($conexion, $sql);
                                while ($mostrar = mysqli_fetch_array($resultado)) {
                                ?>
                                    <tr>
                                        <td style="text-align: center;"><img style="width: 150px; height: 150px; padding-left:25px;" src=<?php echo fromroot($file ,$mostrar["img_path"]); ?>></td>
                                        <td>
                                            <h4 class="card-title" style="text-align: center;"><?php echo $mostrar['nombre']; ?> </h4>
                                        </td>
                                        <td>
                                            <p class="card-text" style="text-align: center;"><small class="text-muted"><?php echo $mostrar['year']; ?></small></p>
                                        </td>
                                        <td>
                                            <p class="card-text" style="text-align: center;"><a href="<?php echo  $mostrar['link']; ?>"><i class="bi bi-link-45deg"></i></a></p>
                                        </td>
                                        <td>
                                            <div class="btn-group btn-group-sm" style="text-align: center;" role="group">
                                                <a class="btn btn-secondary"style="color:seagreen;" href="../dashboard/modificarPR.php?id=<?php echo $mostrar['id']; ?>"><i class="bi bi-pencil"></i></a>
                                                <a class="btn btn-danger" href="../database/proyectos/eliminar.php?id=<?php echo $mostrar['id']; ?>" onclick="return seguro()"><i class="bi bi-x-circle"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php 
                                }
                            }else{
                                $sql = "select * from proyectos ORDER BY year DESC"; // mejorar query falta nombre del que subio la noticia
                                $resultado = mysqli_query($conexion, $sql);
                                while ($mostrar = mysqli_fetch_array($resultado)) {
                                ?>
                                    <tr>
                                        <td style="text-align: center;"><img style="width: 150px; height: 150px; padding-left:25px;" src=<?php echo fromroot($file ,$mostrar["img_path"]); ?>></td>
                                        <td>
                                            <h4 class="card-title" style="text-align: center;"><?php echo $mostrar['nombre']; ?> </h4>
                                        </td>
                                        <td>
                                            <p class="card-text" style="text-align: center;"><small class="text-muted"><?php echo $mostrar['year']; ?></small></p>
                                        </td>
                                        <td>
                                            <p class="card-text" style="text-align: center;"><a href="<?php echo  $mostrar['link']; ?>"><i class="bi bi-link-45deg"></i></a></p>
                                        </td>
                                        <td>
                                            <div class="btn-group btn-group-sm" style="text-align: center;" role="group">
                                                <a class="btn btn-secondary"style="color:seagreen;" href="../dashboard/modificarPR.php?id=<?php echo $mostrar['id']; ?>"><i class="bi bi-pencil"></i></a>
                                                <a class="btn btn-danger" href="../database/proyectos/eliminar.php?id=<?php echo $mostrar['id']; ?>" onclick="return seguro()"><i class="bi bi-x-circle"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                            <?php    
                                }
                            }
                            ?>
                        </tbody>
                        
                    </table>
                </div>
            </section>
        </div>
    </div>
</body>

<?php include_once fromroot($file, "include/dashboard/footer.php", TRUE); ?>

</html>