<?php get_header(); ?>
        <!--Banner Area Start-->
        <div class="banner-area blog-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <div class="title-border">
                                <h1><span><?php the_title(); ?></span></h1>
                            </div>    
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Banner Area-->
        <!--Blog Post Area Start-->
        <div class="blog-post-area section-padding" style="background-image: url('<?php the_post_thumbnail("medium"); ?>'">
            <div class="container">
                <div class="row">
                    <?php 
                    $args= array(
                        'post_type' => 'blog',
                        'posts_per_page' => 1
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) {
                        while ($query->have_posts()){ $query->the_post(); ?>
                    <div class="col-md-12">
                        <div class="single-blog-post blog-post-details">
                            <div class="single-blog-post-img">
                                <a href="#"><img src="img/blog/large-1.jpg" alt=""></a>
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
                                
                            </div>
                            <div class="blog-button-links">
                                <span class="blog-tags">Tags: <a href="#">Store,</a> <a href="#">Women,</a> <a href="#">Dress,</a> <a href="#">Fashion</a></span>
                                <div class="blog-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-rss"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-comments">
                            <h4 class="blog-title">User <span>Comments</span></h4>
                            <div class="single-comment">
                                <div class="author-image">
                                    <img src="img/blog/author-1.jpg" alt="">
                                </div>
                                <div class="comment-text">
                                    <div class="author-info">
                                        <h4><a href="#">Watson</a></h4>
                                        <span class="reply"><a href="#"><i class="fa fa-reply"></i>Reply</a></span>
                                        <span class="comment-time">45 Minutes Ago</span>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                                </div>
                            </div>
                            <div class="single-comment comment-reply">
                                <div class="author-image">
                                    <img src="img/blog/author-2.jpg" alt="">
                                </div>
                                <div class="comment-text">
                                    <div class="author-info">
                                        <h4><a href="#">Maria</a></h4>
                                        <span class="reply"><a href="#"><i class="fa fa-reply"></i>Reply</a></span>
                                        <span class="comment-time">8 Minutes Ago</span>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                                </div>
                            </div>
                            <div class="single-comment">
                                <div class="author-image">
                                    <img src="img/blog/author-1.jpg" alt="">
                                </div>
                                <div class="comment-text">
                                    <div class="author-info">
                                        <h4><a href="#">Watson</a></h4>
                                        <span class="reply"><a href="#"><i class="fa fa-reply"></i>Reply</a></span>
                                        <span class="comment-time">10 Minutes Ago</span>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled .</p>
                                </div>
                            </div>
                        </div>
                        <div class="leave-comment">
                            <h4 class="blog-title">Leave A <span>Comment</span></h4>
                            <form action="#" method="post" id="comment">
                                <div class="comment-form">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label class="required">name</label>
                                            <input type="text" name="name" value="">
                                            <label class="required">Email</label>
                                            <input type="email" name="email" value="">
                                            <label>Subject</label>
                                            <input type="text" name="subject" value="">
                                        </div>
                                        <div class="col-md-7">
                                            <label>Your Comments</label>
                                            <textarea rows="12" name="enquiry"></textarea>
                                        </div>
                                    </div>
                                    <input type="submit" class="comment-btn" value="Submit comment">
                                </div>
                            </form>
                        </div>
                    </div>
                <?php }
                } ?>         
                </div>
            </div>
        </div>
        <!--End of Blog Post Area -->
        <?php get_footer(); ?>