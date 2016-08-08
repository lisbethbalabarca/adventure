
       <?php get_header(); ?>
        <!--Banner Area Start-->
        <div class="banner-area contact-banner" style="background-image: url('<?php the_field('hero_image_contact') ?>');">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <div class="title-border">
                                <h1>Contact <span>Us</span></h1>
                            </div>    
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui<br> id, convallis iaculis eros. Praesent porta lacinia elementum.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Banner Area-->
        <!--Contact Information Area Start-->
        <div class="contact-information-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <div class="title-border">
                                <h1>Contact <span>Information</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="contact-info text-center">
                            <div class="contact-image">
                                <div class="contact-icon">
                                    <div class="icon-table-cell">
                                        <img class="primary-img" src="<?php bloginfo('template_url') ?>/img/icon/contact-1.png" alt="">
                                        <img class="secondary-img" src="<?php bloginfo('template_url') ?>/img/icon/contact-1-hover.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="contact-text">
                                <h4>Address</h4>
                                <p>Westminster Corporate Center<br>
                                30A Vreeland Road<br>
                                P.O. Box 6</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="contact-info text-center">
                            <div class="contact-image">
                                <div class="contact-icon">
                                    <div class="icon-table-cell">
                                        <img class="primary-img" src="<?php bloginfo('template_url') ?>/img/icon/contact-2.png" alt="">
                                        <img class="secondary-img" src="<?php bloginfo('template_url') ?>/img/icon/contact-2-hover.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="contact-text">
                                <h4>Phone</h4>
                                <p>+123 456 7890<br>
                                +123 456 7890</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="contact-info text-center">
                            <div class="contact-image">
                                <div class="contact-icon">
                                    <div class="icon-table-cell">
                                        <img class="primary-img" src="<?php bloginfo('template_url') ?>/img/icon/contact-3.png" alt="">
                                        <img class="secondary-img" src="<?php bloginfo('template_url') ?>/img/icon/contact-3-hover.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="contact-text">
                                <h4>Fax</h4>
                                <p>(973) 377-5077<br>
                                (001) 254-7359</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm">
                        <div class="contact-info text-center">
                            <div class="contact-image">
                                <div class="contact-icon">
                                    <div class="icon-table-cell">
                                        <img class="primary-img" src="<?php bloginfo('template_url') ?>/img/icon/contact-4.png" alt="">
                                        <img class="secondary-img" src="<?php bloginfo('template_url') ?>/img/icon/contact-4-hover.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="contact-text">
                                <h4>Email</h4>
                                <p>admin@power-boosts<br>
                                admin@power-boosts.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Contact Information Area-->
        <!--Contact Form Start-->
        <div class="contact-form">
            <!-- google-map-area start -->
            <div class="google-map-area">
                <!--  Map Section -->
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1599.7763043130708!2d-67.74758867561498!3d-16.203611991143955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f7327594f689d%3A0x68f03e31ff8b6765!2sYungas+Road!5e1!3m2!1ses!2spe!4v1470697062591" width="100%" height="750" frameborder="0" style="border:0;position: relative;left: 371px;" allowfullscreen></iframe>
                </div>
            </div>
            <div class="google-map-area">
                <!--  Map Section -->
                <div id="contacts" class="map-area">
                    
                </div>
            </div>
            <!-- google-map-area end -->
                        <div class="contact-us-form-wrapper">
                <div class="contact-container">
                    <div class="contact-us-form section-padding">
                        <div class="contact-row">
                            <div class="contact-column">
                                <div class="section-title text-center">
                                    <div class="title-border">
                                        <h1>Contact <span>US</span></h1>
                                    </div>
                                </div>
                            </div>
                        </div>               
                        <div class="contact-row">
                            <?php echo do_shortcode('[contact-form-7 id="109" title="Contact form 1"]'); ?>
                            
                        </div>
                    </div>       
                </div>
            </div>
        </div>
        <!--End of Contact Form-->
        
        <?php get_footer(); ?>