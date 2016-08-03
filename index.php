<?php get_header(); ?>

<!--Slider Area Start-->
<?php if (have_rows('banner', 'options')) { ?>


<div class="slider-area home-two-slider">
    <div class="preview-2">
        <div id="nivoslider" class="slides">
            <?php $c = 0;
            while (have_rows('banner', 'options')) { the_row();
                $c++; ?>
                <a href="#">
                    <?php 
                    $banner= get_sub_field('imagen');
                    $image= wp_get_attachment_image_src($banner, 'banner');
                    ?>  
                    <img src="<?php echo $image[0]; ?>" alt=" " title="#slider-<?php echo $c; ?>-caption<?php echo $c; ?>">
                </a> 
                <?php } ?>

            </div> 



            <?php $c = 0;
            while (have_rows('banner', 'options')) { the_row();
                $c++; ?>
                <div id="slider-<?php echo $c; ?>-caption<?php echo $c; ?>" class="nivo-html-caption nivo-caption">
                    <div class="banner-content slider-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-content">
                                        <h1 class="title1"><?php the_sub_field('titulo') ?></h1>
                                        
                                        <h2 class="sub-title"><span><?php the_sub_field('descripcion') ?></span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	
                <?php } ?>




            </div>
        </div>
   <?php } ?>
    <!--End of Slider Area-->
    <!--Service About Area Start-->
    
        <div class="service-about-area text-center hidden-xs" style="background-image: url('<?php the_field('imagen_introduccion' , 'options') ?>');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="single-service-two">
                            <div class="row">
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="about-container section-padding">
                            <div class="section-title title-two">
                                <div class="title-border">
                                    <h1><span><?php the_field('titulo_introduccion' , 'options') ?></span></h1>
                                </div>
                            </div>
                            <div class="about-text">     
                                <p><?php the_field('texto_introduccion' , 'options') ?></p>
                                <a href="#" class="button-yellow">Why Trtavel with Adventures?</a>
                            </div>     
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <!--End of Service About Area-->
    <!--Portfolio Area Start-->
    <div class="portfolio-area portfolio-two">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
            <div class="row">
              <?php
              $args = array(
                'post_type' => 'tour',
                'post_per_page' => 4
                );
              $query = new WP_Query($args);
              if ($query -> have_posts()) {
                while ($query->have_posts()){ $query->the_post(); ?>
                <div class="col-md-3 col-sm-4">
                    <div class="single-portfolio">
                        <a href="#"><?php the_post_thumbnail("tour"); ?></a>
                        <div class="portfolio-text effect-bottom">
                            <h4><a src="#"><?php the_title(); ?></a></h4>
                            <p><?php the_excerpt(); ?></p>
                            <div class="portfolio-link">
                                <?php comments_number('0 comentarios', '1 comentario', '%comentarios'); ?>   
                            </div>
                        </div>
                    </div>
                </div>
                <?php }
            } ?>
        </div>


    </div>
</div>
</div>
<!--End of Portfolio Area-->
<!--Fun Factor Area Start-->
<div class="fun-factor-area fun-factor-two text-center hidden-xs">
    <div class="container">                
        <div class="row">
            <div class="col-md-12">
                <div class="section-title title-two">
                    <div class="title-border">
                        <h1 class="text-white">SOME <span>FUN INFO</span></h1>
                    </div>    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-3">
                <div class="single-fun-wrapper">
                    <div class="single-fun-factor">
                        <div class="fun-border-left"></div>
                        <img src="<?php bloginfo('template_url') ?>/img/icon/7.png" class="primary-img" alt="">
                        <img src="<?php bloginfo('template_url') ?>/img/icon/7-hover.png" class="secondary-img" alt="">
                        <h4><span class="counter">5670</span> M</h4>
                        <h5>Cyliing Track</h5>
                        <div class="fun-border-right"></div>
                    </div>
                </div>    
            </div>
            <div class="col-md-2 col-sm-3">
                <div class="single-fun-wrapper">
                    <div class="single-fun-factor">
                        <div class="fun-border-left"></div>
                        <img src="<?php bloginfo('template_url') ?>/img/icon/8.png" class="primary-img" alt="">
                        <img src="<?php bloginfo('template_url') ?>/img/icon/8-hover.png" class="secondary-img" alt="">
                        <h4><span class="counter">480</span> M</h4>
                        <h5>Distance Coverd</h5>
                        <div class="fun-border-right"></div>
                    </div>
                </div>    
            </div>
            <div class="col-md-2 col-sm-3">
                <div class="single-fun-wrapper">
                    <div class="single-fun-factor">
                        <div class="fun-border-left"></div>
                        <img src="<?php bloginfo('template_url') ?>/img/icon/9.png" class="primary-img" alt="">
                        <img src="<?php bloginfo('template_url') ?>/img/icon/9-hover.png" class="secondary-img" alt="">
                        <h4><span class="counter">5670</span> M</h4>
                        <h5>Altitude Hiked</h5>
                        <div class="fun-border-right"></div>
                    </div>
                </div>    
            </div>
            <div class="col-md-2 col-sm-3">
                <div class="single-fun-wrapper">
                    <div class="single-fun-factor">
                        <div class="fun-border-left"></div>
                        <img src="<?php bloginfo('template_url') ?>/img/icon/10.png" class="primary-img" alt="">
                        <img src="<?php bloginfo('template_url') ?>/img/icon/10-hover.png" class="secondary-img" alt="">
                        <h4><span class="counter">180</span> KM</h4>
                        <h5>Sailing Distance</h5>
                        <div class="fun-border-right"></div>
                    </div>
                </div>    
            </div>
            <div class="col-md-2 hidden-sm">
                <div class="single-fun-wrapper">
                    <div class="single-fun-factor">
                        <div class="fun-border-left"></div>
                        <img src="<?php bloginfo('template_url') ?>/img/icon/11.png" class="primary-img" alt="">
                        <img src="<?php bloginfo('template_url') ?>/img/icon/11-hover.png" class="secondary-img" alt="">
                        <h4><span class="counter">570</span> Days</h4>
                        <h5>Spent Adventure</h5>
                        <div class="fun-border-right"></div>
                    </div>
                </div>    
            </div>
            <div class="col-md-2 hidden-sm">
                <div class="single-fun-wrapper">
                    <div class="single-fun-factor">
                        <div class="fun-border-left"></div>
                        <img src="<?php bloginfo('template_url') ?>/img/icon/12.png" class="primary-img" alt="">
                        <img src="<?php bloginfo('template_url') ?>/img/icon/12-hover.png" class="secondary-img" alt="">
                        <h4><span class="counter">567</span> M</h4>
                        <h5>Jugle Distance</h5>
                        <div class="fun-border-right"></div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
<!--End of Fun Factor Area-->
<!--Best Sell Area Start-->
<div class="best-sell-area section-padding best-sell-two">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title title-two text-center">
                    <div class="title-border">
                        <h1>Best <span>Selling Trips</span></h1>
                    </div>    
                    <p>Not sure what you’re looking for and need a little inspiration? We can help. Check out our handpicked <br>lists of topical trips you can take right now.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="sell-text-container">
                    <div class="title-container">
                        <h3>Day hike</h3>
                        <div class="best-sell-link">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-rss"></i></a>
                        </div>
                    </div>
                    <P>Get closer to nature. From the jungles of India to the African bush, our small group tours take you to the heart of nature. From elephants silhouetted against an Africa sunset to orangutans swinging in the treetops.....</P>
                    <a href="#" class="button-one button-yellow">VIew trip</a>
                </div>
                <div class="row">
                    <div class="best-sell-slider carousel-style-one">
                        <div class="col-md-3">
                            <div class="hover-effect">
                                <div class="box-hover">   
                                    <a href="#">
                                        <img src="<?php bloginfo('template_url') ?>/img/sell/6.jpg" alt="">
                                        <span>Adventure camping</span>
                                    </a>
                                </div>
                            </div>
                            <div class="hover-effect">
                                <div class="box-hover">       
                                    <a href="#" class="no-margin">
                                        <img src="<?php bloginfo('template_url') ?>/img/sell/8.jpg" alt="">
                                        <span>Winter camping</span>
                                    </a>
                                </div>
                            </div>    
                        </div>
                        <div class="col-md-3">
                            <div class="hover-effect">
                                <div class="box-hover">   
                                    <a href="#">
                                        <img src="<?php bloginfo('template_url') ?>/img/sell/7.jpg" alt="">
                                        <span>Hiking trails</span>
                                    </a>
                                </div>
                            </div>
                            <div class="hover-effect">
                                <div class="box-hover">           
                                    <a href="#" class="no-margin">
                                        <img src="<?php bloginfo('template_url') ?>/img/sell/9.jpg" alt="">
                                        <span>Mountyain huts</span>
                                    </a>
                                </div>
                            </div>        
                        </div>
                        <div class="col-md-3">
                            <div class="hover-effect">
                                <div class="box-hover">   
                                    <a href="#">
                                        <img src="<?php bloginfo('template_url') ?>/img/sell/8.jpg" alt="">
                                        <span>Winter camping</span>
                                    </a>
                                </div>
                            </div>
                            <div class="hover-effect">
                                <div class="box-hover">           
                                    <a href="#" class="no-margin">
                                        <img src="<?php bloginfo('template_url') ?>/img/sell/1.jpg" alt="">
                                        <span>Rail trip</span>
                                    </a>
                                </div>
                            </div>        
                        </div> 
                        <div class="col-md-3">
                            <div class="hover-effect">
                                <div class="box-hover">   
                                    <a href="#">
                                        <img src="<?php bloginfo('template_url') ?>/img/sell/9.jpg" alt="">
                                        <span>Mountain huts</span>
                                    </a>
                                </div>
                            </div>  
                            <div class="hover-effect">
                                <div class="box-hover">   
                                    <a href="#" class="no-margin">
                                        <img src="<?php bloginfo('template_url') ?>/img/sell/2.jpg" alt="">
                                        <span>Brazil trip</span>
                                    </a>
                                </div>
                            </div>        
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-md-6 hidden-sm">
                <img src="<?php bloginfo('template_url') ?>/img/sell/10.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!--End of Best Sell Area-->

<!--Blog Area Start-->
<div class="blog-area section-padding blog-two-area">
    <div class="container">              
        <div class="row">
            <div class="col-md-12">
                <div class="section-title title-two text-center">
                    <div class="title-border">
                            <h1>Latest <span>Blog Posts</span></h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui<br> id, convallis iaculis eros. Praesent porta lacinia elementum.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-carousel">
                <?php
                  $args = array(
                    'post_type' => 'blog',
                    'post_per_page' => 2,
                    );
                  $query = new WP_Query($args);
                  if ($query ->have_posts()) {
                    while ($query->have_posts()){ $query->the_post(); ?>
                    <div class="col-md-6">
                        <div class="single-blog hover-effect">

                            <div class="row">
                                
                                <div class="col-md-6 col-sm-6">
                                    <div class="blog-image box-hover">
                                        <a href="#"><?php the_post_thumbnail("blog"); ?></a>
                                        <div class="date-time">
                                            <span class="date">10</span>
                                            <span class="month">AUG</span>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 margin-left">
                                    <div class="blog-text">
                                        <h4><a src="#"><?php the_title(); ?></a></h4>
                                        <p><?php the_excerpt(); ?></p>
                                        <a href="blog-details.html" class="button-one button-yellow">Learn More</a>
                                        <div class="blog-link">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa-rss"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <?php } ?>
                <?php } ?>
                    
                </div>
            </div>
        </div>
    </div>
    ?>
    <!--End of Blog Area-->

    <?php get_footer(); ?>