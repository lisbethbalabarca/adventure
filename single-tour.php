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
<<<<<<< HEAD
        <div class="trip-inclution">
=======
        <div class="trip-inclution ">
>>>>>>> be1085fa503a34f7a3d63692d90f6c058a49972f
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
<<<<<<< HEAD
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
=======
        <div class="container">
            <div class="row">
                <div id="accordion" class="col-md-12">
            <h3>Section 1</h3>
            <div>
                <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>
            </div>
            <h3>Section 2</h3>
            <div>
                <p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In suscipit faucibus urna. </p>
            </div>
            <h3>Section 3</h3>
            <div>
                <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui. </p>
                <ul>
                    <li>List item one</li>
                    <li>List item two</li>
                    <li>List item three</li>
                </ul>
>>>>>>> be1085fa503a34f7a3d63692d90f6c058a49972f
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
<<<<<<< HEAD
        <h3>
            <i class="fa fa-bicycle"></i> &nbsp Activities
        </h3>
        <div>
            <div class="include-item no-margin">    
                <div class="include-text">
                    <h4>Accommodation</h4>
                    <p><?php the_field('activities_information', 'options'); ?></p>
                </div>
=======
>>>>>>> be1085fa503a34f7a3d63692d90f6c058a49972f
            </div>
        </div>
    </div>
    <!--End of Trip Inclution-->
    <div class="text-center"><button class="booking-button-two"><a href="https://www.peruhop.com" target="_blank" onClick="_gaq.push(['_trackEvent', 'book_now', 'link', 'click', 'click']);">Book now</a></button></div>
    <?php get_footer(); ?>