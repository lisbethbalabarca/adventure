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
        <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url') ?>/img/favicon.ico">
        
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
                                                <ul id="nav">
                                                    <?php wp_nav_menu(array(
                                                        'theme_location' => 'Principal',
                                                        'container' => '',
                                                        'container_class' => 'pull-right',
                                                        'menu_id' => 'nav'
                                                    ));
                                                    ?>
                                                </ul>
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
                                        <li><a href="index.html">HOME</a>
                                            <ul>
                                                <li><a href="index-2.html">Home 2</a></li>
                                                <li><a href="index-3.html">Home 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Shop</a>
                                            <ul>
                                                <li><a href="shop-grid-no-sidebar.html">Shop No Sidebar</a></li>
                                                <li><a href="shop-grid-with-sidebar.html">Shop with Sidebar</a></li>
                                                <li><a href="shop-list.html">Shop List</a></li>
                                                <li><a href="product-details.html">Product Details 1</a></li>
                                                <li><a href="product-details-2.html">Product Details 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog-1.html">Blog</a>
                                            <ul>
                                                <li><a href="blog-2.html">Blog Page 2</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">ABOUT</a>
                                        <li><a href="#">PAGES</a>
                                            <ul>
                                                <li><a href="signin.html">Sign in</a></li>
                                                <li><a href="404.html">404 error</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">CONTACT</a></li>
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