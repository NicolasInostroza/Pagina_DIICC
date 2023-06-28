<!doctype html>
<html class="no-js" lang="en">
<?php
session_start();
$file = __FILE__;
$pagetitle = "Ingeniería Civil en Computación e Informática - DIICC UDA";
include_once "../include/functions.php";
include_once "../config/config.php";
include_once "../include/head.php";
echo '<script src="../js/malla.js"></script>';
?>

<body>
    <!-- HEADER -->
    <?php include_once "../include/header.php"; ?>
    <!-- HEADER -->
    

    <!-- FOOTER -->
    <?php include_once "../include/footer.php"; ?>
    <!-- FOOTER -->

    <div class="modal" id="malla-modal" tabindex="-1" role="dialog">
        <div id="malla-dialog" class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Malla Curricular 2018</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php include_once fromroot($file, "include/mallas/2018.php", true); ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>