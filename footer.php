<!--Footer Widget Area Start-->
        <div class="footer-widget-area footer-widget-two" style="background-image: url('<?php the_field('footer_image', 'options') ?>');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <div class="single-footer-widget contact-text-info">
                            <h4>Contact Us</h4>
                            <div class="footer-widget-list">
                                <ul>
                                    <li class="icon envelope"><?php the_field('email', 'options'); ?></li>
                                    <li class="icon phone"><?php the_field('telefono', 'options'); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="footer-link">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-rss"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="payment-image">
                            <img src="img/payment.png" alt="">
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <!--End of Footer Widget Area-->
        <!--Footer Area Start-->
        <div class="footer-area footer-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <span>Copyright © 2016 <a href="#">Power-Boosts</a>. All rights reserved.</span>
                    </div>
                   
                </div>
            </div>
        </div>
        <!--End of Footer Area-->
        

        
        <!-- jquery
        ============================================ -->        
        <script src="<?php bloginfo('template_url') ?>/js/vendor/jquery-1.12.3.min.js"></script>
        
        <!-- bootstrap JS
        ============================================ -->        
        <script src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
        
        <!-- nivo slider js
        ============================================ -->       
        <script src="<?php bloginfo('template_url') ?>/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_url') ?>/lib/nivo-slider/home.js" type="text/javascript"></script>
        
        <!-- wow JS
        ============================================ -->        
        <script src="<?php bloginfo('template_url') ?>/js/wow.min.js"></script>
        
        <!-- meanmenu JS
        ============================================ -->        
        <script src="<?php bloginfo('template_url') ?>/js/jquery.meanmenu.js"></script>
        
        <!-- owl.carousel JS
        ============================================ -->        
        <script src="<?php bloginfo('template_url') ?>/js/owl.carousel.min.js"></script>
        
        <!-- price-slider JS
        ============================================ -->        
        <script src="<?php bloginfo('template_url') ?>/js/jquery-price-slider.js"></script>
        
        <!-- scrollUp JS
        ============================================ -->        
        <script src="<?php bloginfo('template_url') ?>/js/jquery.scrollUp.min.js"></script>
        
        <!-- Waypoints JS
        ============================================ -->        
        <script src="<?php bloginfo('template_url') ?>/js/waypoints.min.js"></script>
        
        <!-- Counter Up JS
        ============================================ -->        
        <script src="<?php bloginfo('template_url') ?>/js/jquery.counterup.min.js"></script>
        
        <!-- plugins JS
        ============================================ -->        
        <script src="<?php bloginfo('template_url') ?>/js/plugins.js"></script>
        
        <!-- main JS
        ============================================ -->        
        <script src="<?php bloginfo('template_url') ?>/js/main.js"></script>

        <!-- WP footer
        ============================================ --> 
    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WJC8WS"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WJC8WS');</script>
    <!-- End Google Tag Manager -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-82276488-1', 'auto');
      ga('send', 'pageview');

    </script>

        <?php wp_footer(); ?>

    </body>
</html>