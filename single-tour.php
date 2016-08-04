<?php get_header(); ?>

<!--Banner Area Start-->
<div class="banner-area details-one" style="background-image: url('<?php the_field('imagen_introduccion' , 'options') ?>'">

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
<!--End of Banner Area-->
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
                                
                            </div>     
                        </div>    
                    </div>
                </div>
            </div>
        </div>
<!--Trip Inclution Start-->
<div class="trip-inclution section-padding">
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
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="include-item">
                    <div class="include-icon">
                        <i class="fa fa-cutlery"></i>
                    </div>
                    <div class="include-text">
                        <h4>Meals</h4>
                        <p>8 breakfasts, 3 lunches, 2 dinners</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="include-item">
                    <div class="include-icon">
                        <i class="fa fa-truck"></i>
                    </div>
                    <div class="include-text">
                        <h4>Transport</h4>
                        <p>Bus, Minibus, Raft, Bus, Minibus</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 hidden-sm">
                <div class="include-item no-margin">
                    <div class="include-icon">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="include-text">
                        <h4>Accommodation</h4>
                        <p>Camping (with basic facilities) (1 night), Guesthouse (5 nights), Hotel (3 nights)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Trip Inclution-->
<?php get_footer(); ?>



