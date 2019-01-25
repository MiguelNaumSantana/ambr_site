<?php 
/*
    Template Name: Galeria
*/

get_header();





$galeria = new WP_Query(array('post_type'=>'galeria'));
?>


<div class="push-content">
    
    <div class="page-title jarallax black-overlay-60" data-jarallax data-speed="0.6" style="background-image: url('http://www.ambr.org.br/images/hh1.jpg');">
        <div class="container">
            
            <div class="section-heading center-holder wow fadeIn   animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
            <h1 style="color:#fff;text-shadow:2px 2px #333;" color="white">Galeria  de <span class="italic libre-baskerville primary-color">Imagens</span></h1>
            <div class="section-heading-line"></div>

        </div>
        </div>
    </div>




<div class="section-block">
    <div class="container">
        
        <div class="row mt-60">
             <?php while($galeria->have_posts()): $galeria->the_post(); ?>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="service-block-image"><a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="img"></a>
                    
                <div class="service-block-2-inner"><h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt.</p></div>
            </div>
            
            
            
            
        </div>
        <?php endwhile?>
    </div>
</div>

























<?php get_footer();?>