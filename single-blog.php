
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
    <div class="blog-post-area section-padding" style="background-image: url('<?php the_post_thumbnail("medium"); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-blog-post blog-post-details">
                        <div class="single-blog-post-img">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("single"); ?></a>
                            <div class="date-time">
                                <span class="date"><?php the_time('d') ?></span>
                                <span class="month"><?php the_time('M') ?></span>
                            </div>
                        </div>
                        <div class="single-blog-post-text">
                            <h4><?php the_title(); ?></h4>
                            <div class="author-comments">
                                <span><i class="fa fa-user"></i><?php the_author(); ?></span>
                                <span><i class="fa fa-comment"></i><?php comments_number('0 comentarios','1 comentario','% comentarios'); ?></span>
                            </div>
                            <p><?php the_content(); ?></p>
                            <?php comments_template(); ?>
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

            </div>
        </div>
    </div>
    <!--End of Trip Information-->
    <!--Trip Inclution Start-->
    
    <!--End of Trip Inclution-->
    <?php get_footer(); ?>