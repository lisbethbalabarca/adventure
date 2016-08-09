<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Yungas Road</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- favicon
        ============================================ -->        
        <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url') ?>/img/favicon.png">
        
        <!-- Google Fonts
        ============================================ -->        
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800' rel='stylesheet' type='text/css'>
        <!-- WP header
        ============================================ --> 
        <?php wp_head(); ?>


        <!-- Bootstrap CSS
        ============================================ -->        
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css">
        
        <!-- Fontawsome CSS
        ============================================ -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/font-awesome.min.css">
        
        <!-- owl.carousel CSS
        ============================================ -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/owl.carousel.css">
        
        <!-- for map
        ============================================ -->
        <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyCdDVULAeX1xZcM1Gf885JpxZCSd0LqGjQ">
    </script>

        <!-- jquery-ui CSS
        ============================================ -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/jquery-ui.css">
        
        <!-- meanmenu CSS
        ============================================ -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/meanmenu.min.css">
        
        <!-- animate CSS
        ============================================ -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/animate.css">
        
        <!-- nivo slider CSS
        ============================================ -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/lib/nivo-slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/lib/nivo-slider/css/preview.css" type="text/css" media="screen" />
        
        <!-- style CSS
        ============================================ -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">

        <!-- responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/responsive.css">

        <!--custom css
        ============================================ -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/custom.css">
        
        <!-- modernizr JS
        ============================================ -->        
        <script src="<?php bloginfo('template_url') ?>/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            
            <!--Header Area Start-->
            <header class="header-two">
                <div class="header-logo-menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="logo-menu-bg">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="logo">
                                                <a href="index.html"><img src="<?php bloginfo('template_url') ?>/img/logo/logo.png" alt="ADVENTURES"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 hidden-sm hidden-xs">
                                            <div class="mainmenu">
                                                <nav>
                                                    <?php wp_nav_menu(array(
                                                        'theme_location' => 'Principal',
                                                        'container' => '',
                                                        'container_class' => 'pull-right',
                                                        'menu_id' => 'nav'
                                                        ));
                                                        ?>
                                                    </nav>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <!--End of Logo Mainmenu-->
                    <!-- Mobile Menu Area start -->
                    <div class="mobile-menu-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="mobile-menu">
                                        <nav id="dropdown">
                                            <ul>
                                                <li><a href="<?php echo home_url(); ?>">Inicio</a>
                                                </li>
                                                <li><a href="<?php echo home_url('blog'); ?>">Blog</a>
                                                </li>
                                                <li><a href="<?php echo home_url('contact'); ?>">Contact Us</a>
                                                </li>
                                                <li><a href="<?php echo home_url('about'); ?>">About Us</a>
                                                    <li><a href="<?php echo home_url('tour'); ?>">Tour</a></li>
                                                </ul>
                                            </nav>
                                        </div>                  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu Area end --> 
                    </header>
        <!--End of Header Area-->