<?php 

/*
Template Name: brasilia-medica




*/
get_header();

$revistas = new WP_Query(array('post_type'=>'brasilia-medica'));
?>




<div class="push-content">
    
    <div class="page-title jarallax black-overlay-60" data-jarallax data-speed="0.6" style="background-image: url('http://www.ambr.org.br/images/hh1.jpg');">
        <div class="container">
            
            <div class="section-heading center-holder wow fadeIn   animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
            <h1 style="color:#fff;text-shadow:2px 2px #333;" color="white">Brasília <span class="italic libre-baskerville primary-color">Médica</span></h1>
            <div class="section-heading-line"></div>

        </div>
        </div>
    </div>
<div class="section-block">
    <div class="container">
        <div class="grid-gallery-4col gallery-style-1 clearfix">
            
            <?php while($revistas->have_posts()): $revistas->the_post(); ?>
            <div class="gallery-item"><img src="<?php the_post_thumbnail_url(); ?>" title="image" alt="img">
            <a href="<?php the_field('link_pdf') ?>" target="_blank"><h5><?php the_title();?></h5></a>
                <div class="gallery-overlay">
                    <div class="gallery-content">
                        
                        <div class="gallery-content-inner"><a class="image-popup-gallery" href="<?php the_post_thumbnail_url(); ?>"><i class="ti-zoom-in"></i></a>
                        <a href="gallery-grid-4.html#"><i class="ti-gallery"></i></a></div>
                    </div>
                </div>
            </div>
            <?php endwhile?>
        </div>
    </div>
    
</div>    



































<?php get_footer(); ?>