<!doctype html>
<html class="no-js" lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

 <meta charset="UTF-8">
<!-- Modal -->
    <div class="modal fade" id="myModal<?php echo $m['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
    <?php
        $sql = "SELECT * FROM eventos WHERE id = " . $m['id'];// mejorar query falta nombre del que subio la noticia
        $resultado1 = mysqli_query($conexion, $sql);
    ?>        
    <div class="modal-dialog" role="document" >
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"> <h4><?php echo(($m['nombre'])) ?></h4></h4>
                </div>
                <div class="modal-body">
                    ...
                    <div class="event-date" style="height:100px;">
                        <h3 style="padding: 5px 18px 11px;"><a><?php echo(strftime('%d',strtotime ($m['fecha'])))?><span><?php echo( strftime('%B',strtotime($m['fecha'])))?></span></a></h3>
                    </div>
                    <p><?php echo(($m['descripcion'])) ?></p>
                    <div class="event-content text-left">
                        <div class="event-content-left">
                            <h4><a href="" data-toggle="modal" data-target="#myModal<?php echo($m['id'])?>"><?php echo(($m['nombre'])) ?></a ></h4>
                            <ul>
                                <li><i class="bi bi-clock-fill"></i><?php echo( $m['hora_inicio']->format('H:i'))?> - <?php echo( $m['hora_termino']->format('H:i')) ?></li>
                                <li><i class="bi bi-pin-map-fill"></i><?php echo( ($m['lugar'])) ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    
                </div>
                </div>
            </div>
    </div>
</html>