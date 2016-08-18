<?php get_header(); ?>
<!--Banner Area Start-->
<?php while(have_posts()) { the_post(); ?>
    <div class="banner-area details-one" style="background-image: url('<?php the_field('imagen') ?>');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <div class="title-border">
                            <h1><span><?php the_title(); ?></span></h1>
                        </div>  
                        <p class="text-white">The right tour for the right traveller</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li>Tour</li>
                        <!--// falta el q lleva al tour-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <!--End of Banner Area-->
    <div class="blog-post-area section-padding">
        <div class="container">
            <div class="row">
                <?php while(have_posts()) { the_post(); ?>
                    <div class="col-md-12">
                        <div class="single-blog-post blog-post-details">
                            <div class="single-blog-post-img">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('single') ?></a>
                            </div>
                            <div class="single-blog-post-text">
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_content(); ?></p>
                                
                            </div>
                            <div class="blog-button-links">
                                <div class="blog-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-rss"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>         
                </div>
            </div>
        </div>
        <!--End of Trip Information-->
        <!--Trip Inclution Start-->
        <div class="trip-inclution">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <div class="title-border">
                                <h1>Trip <span>Inclutions</span></h1>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui<br> id, convallis iaculis eros. Praesent porta lacinia elementum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="accordion">
         <h3>    
            <i class="fa fa-cutlery"></i> &nbsp Meals
        </h3>
        <div>
            <div class="include-item">
                <div class="include-text">
                    <h4>Meals</h4>
                    <p><?php the_field('meals_information', 'options'); ?></p>
                </div>
            </div>
        </div>
        <h3>
            <i class="fa fa-car"></i> &nbsp Transport
        </h3>
        <div>
            <div class="include-item">
                <div class="include-text">
                    <h4>Transport</h4>
                    <p><?php the_field('transport_information', 'options'); ?></p>
                </div>
            </div>
        </div>
        <h3>
            <i class="fa fa-bicycle"></i> &nbsp Activities
        </h3>
        <div>
            <div class="include-item no-margin">    
                <div class="include-text">
                    <h4>Accommodation</h4>
                    <p><?php the_field('activities_information', 'options'); ?></p>
                </div>
            </div>
        </div>
    </div>
    <!--End of Trip Inclution-->
    <div class="text-center"><button class="booking-button-two"><a href="https://www.peruhop.com" target="_blank" onClick="_gaq.push(['_trackEvent', 'book_now', 'link', 'click', 'click']);">Book now</a></button></div>
    <?php get_footer(); ?>