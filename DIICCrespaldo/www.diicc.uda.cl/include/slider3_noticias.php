<section class="awSlider">
  <div  class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target=".carousel" data-slide-to="0" class="active"></li>
      <li data-target=".carousel" data-slide-to="1"></li>
      <li data-target=".carousel" data-slide-to="2"></li>
      <li data-target=".carousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <?php
                $sql = "SELECT * FROM noticias WHERE id=11";  // mejorar query falta nombre del que subio la noticia
                $resultado = mysqli_query($conexion, $sql);
                                                
                while ($mostrar = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

                    if (strlen($mostrar['descripcion']) > 250 ){
                    $mostrar['descripcion'] = substr($mostrar['descripcion'],0, 250)."...";
                }  
            ?>
            <div class="contenedor-noticia">
                <div class="single-blog mt-60">
                    <div class="blog-img" id="cont-img">
                        <img  path="*.woff" src=<?php echo fromroot($file, $mostrar["img_path"]); ?>>
                    </div>
                    <div class="blog-content">
                        <div class="blog-top">
                            <p>Escrito por <?php echo $mostrar['correo']; ?> / <?php echo $mostrar['fecha']; ?></p>
                        </div>
                        <div class="info_not">
                            <h4><?php echo '<a id="titulonot" href="noticia.php?id=11">' . utf8_encode($mostrar['titulo']) . '</a>'; ?></h4>
                            <!-- Ojos con el error de index del while si existen noticias -->
                            <span id="vermas"><?php echo '<a id="vermas" href="noticia.php?id=11" >Leer más...</a>'; ?><span>
                        </div>
                    </div>
                </div>
            </div>

            <?php } ?>
        </div>
      <div class="item">
        <?php
                $sql = "SELECT * FROM noticias WHERE id=12";  // mejorar query falta nombre del que subio la noticia
                $resultado = mysqli_query($conexion, $sql);
                                                
                while ($mostrar = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

                    if (strlen($mostrar['descripcion']) > 250 ){
                    $mostrar['descripcion'] = substr($mostrar['descripcion'],0, 250)."...";
                }  
            ?>
            <div class="contenedor-noticia">
                <div class="single-blog mt-60">
                    <div class="blog-img" id="cont-img">
                        <img  path="*.woff" src=<?php echo fromroot($file, $mostrar["img_path"]); ?>>
                    </div>
                    <div class="blog-content">
                        <div class="blog-top">
                            <p>Escrito por <?php echo $mostrar['correo']; ?> / <?php echo $mostrar['fecha']; ?></p>
                        </div>
                        <div class="info_not">
                            <h4><?php echo '<a id="titulonot" href="noticia.php?id=12">' . utf8_encode($mostrar['titulo']) . '</a>'; ?></h4>
                            <!-- Ojos con el error de index del while si existen noticias -->
                            <span id="vermas"><?php echo '<a id="vermas" href="noticia.php?id=12" >Leer más...</a>'; ?><span>
                        </div>
                    </div>
                </div>
            </div>

            <?php } ?>
      </div>
      <div class="item">
        <?php
                $sql = "SELECT * FROM noticias WHERE id=13";  // mejorar query falta nombre del que subio la noticia
                $resultado = mysqli_query($conexion, $sql);
                                                
                while ($mostrar = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

                    if (strlen($mostrar['descripcion']) > 250 ){
                    $mostrar['descripcion'] = substr($mostrar['descripcion'],0, 250)."...";
                }  
            ?>
            <div class="contenedor-noticia">
                <div class="single-blog mt-60">
                    <div class="blog-img" id="cont-img">
                        <img  path="*.woff" src=<?php echo fromroot($file, $mostrar["img_path"]); ?>>
                    </div>
                    <div class="blog-content">
                        <div class="blog-top">
                            <p>Escrito por <?php echo $mostrar['correo']; ?> / <?php echo $mostrar['fecha']; ?></p>
                        </div>
                        <div class="info_not">
                            <h4><?php echo '<a id="titulonot" href="noticia.php?id=13">' . utf8_encode($mostrar['titulo']) . '</a>'; ?></h4>
                            <!-- Ojos con el error de index del while si existen noticias -->
                            <span id="vermas"><?php echo '<a id="vermas" href="noticia.php?id=13" >Leer más...</a>'; ?><span>
                        </div>
                    </div>
                </div>
            </div>

            <?php } ?>
      </div>
        <div class="item">
            <?php
                $sql = "SELECT * FROM noticias WHERE id=14";  // mejorar query falta nombre del que subio la noticia
                $resultado = mysqli_query($conexion, $sql);
                                                
                while ($mostrar = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

                    if (strlen($mostrar['descripcion']) > 250 ){
                    $mostrar['descripcion'] = substr($mostrar['descripcion'],0, 250)."...";
                }  
            ?>
            <div class="contenedor-noticia">
                <div class="single-blog mt-60">
                    <div class="blog-img" id="cont-img">
                        <img  path="*.woff" src=<?php echo fromroot($file, $mostrar["img_path"]); ?>>
                    </div>
                    <div class="blog-content">
                        <div class="blog-top">
                            <p>Escrito por <?php echo $mostrar['correo']; ?> / <?php echo $mostrar['fecha']; ?></p>
                        </div>
                        <div class="info_not">
                            <h4><?php echo '<a id="titulonot" href="noticia.php?id=14">' . utf8_encode($mostrar['titulo']) . '</a>'; ?></h4>
                            <!-- Ojos con el error de index del while si existen noticias -->
                            <span id="vermas"><?php echo '<a id="vermas" href="noticia.php?id=14" >Leer más...</a>'; ?><span>
                        </div>
                    </div>
                </div>
            </div>

            <?php } ?>
        </div>
        <div class="item">
            <div class="contenedor-noticia">
                <div class="single-blog mt-60">
                    <div class="blog-img" id="cont-png">
                        <img path="*.woff" src="img/dpto/about1.png" alt="...">
                    </div>
                    <div class="blog-content">
                        <div class="info_not">
                            <h2><a id="titulonot" href="noticias.php">Ver mas noticias...</a></h2>
                            <!-- Ojos con el error de index del while si existen noticias -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" ></span>
      <span class="sr-only"></span>
    </a>
    <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">siguiente</span>
    </a>
  </div>
</section>