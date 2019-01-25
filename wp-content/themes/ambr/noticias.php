<?php

/*
Template Name: noticias

*/

get_header();
?>





<?php
/*
Template Name: Historia
*/	

get_header();
?>


<div class="push-content">


<div class="page-title jarallax black-overlay-60" data-jarallax data-speed="0.6" style="background-image: url('http://www.ambr.org.br/images/hh1.jpg');">
        <div class="container">
            
            <div class="section-heading center-holder wow fadeIn   animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
            <h1 style="color:#fff;text-shadow:2px 2px #333;" color="white">Notícias</h1>
            <div class="section-heading-line"></div>

        </div>
        </div>
    </div>
    
    
    <div class="section-block">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    
                    
                    
                <?php $args = array('post_type' => 'post','posts_per_page'=> 5 );$the_query = new WP_Query( $args );?>
                <?php if( $the_query->have_posts()): ?>
                <?php while ( $the_query->have_posts() ): $the_query->the_post();?>
                    
                    
                    
                    <div class="blog-list"><img style="max-width:847px;max-height:429px;" src="<?php echo get_the_post_thumbnail_url()?>" alt="img">
                        <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                        <!--<ul class="blog-list-info">-->
                        <!--    <li><i class="far fa-user"></i><span>Admin</span></li>-->
                        <!--    <li><i class="far fa-calendar-alt"></i><span>May 13 2018</span></li>-->
                        <!--</ul>-->
                        <p class="mt-25"><?php the_excerpt();?></p>
                        <div class="mt-20">
                        <a href="<?php the_permalink();?>" class="button-md primary-button">Leia mais</a></div>
                    </div>
                    <?php endwhile;endif;wp_reset_query(); ?>
                    
                    
                    
                    
                    
                </div>
                <?php include 'sidebar.php';?>
            </div>
        </div>
    </div>
     

    <?php get_footer();?>