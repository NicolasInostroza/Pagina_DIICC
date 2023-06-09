<!doctype html>
<html class="no-js" lang="en">
    <?php
        session_start();
        $file = __FILE__;
        $pagetitle = "Malla - DIICC UDA";
        include_once "config/config.php";
        include_once "include/functions.php";
        include_once "include/head.php";
    ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Malla 2018 - DIICC UDA</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/et-line-icon.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/malla.js"></script>
    </head>
    <body>
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
                                    <h2>Malla 2018</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin Banner -->
        <div style="height: 100px;"></div>
        <!-- Header Area Start -->
		<!--<div class="container">
			<div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <h2>MALLA 2018</h2>
                    </div>
                </div>
            </div>
		</div>-->
        <!-- Course Start??? -->
        <?php include_once 'include/mallas/2018.php';?>       
        <!-- Course End -->
        
      <?php include_once "include/footer.php"; ?>
      <!-- FOOTER -->
    </body>
</html>
