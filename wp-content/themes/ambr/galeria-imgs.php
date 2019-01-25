<?php
/*
Template Name: galeria img
Template Post Type: Galeria
*/

get_header();




$attachments = grab_ids_from_gallery();





?>

    <div class="push-content">
        
        
        <div class="page-title jarallax black-overlay-60" data-jarallax data-speed="0.6" style="background-image: url('http://www.ambr.org.br/images/hh1.jpg');">
        <div class="container">
            
            <div class="section-heading center-holder wow fadeIn   animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
            <h1 style="color:#fff;text-shadow:2px 2px #333;" color="white"><?php the_title(); ?></span></h1>
            <div class="section-heading-line"></div>

        </div>
        </div>
    </div>


<div class="section-block pt-0 pb-0 mt-10 mb-10">
        <div class="container-fluid">
            <div class="grid-gallery-5col gallery-style-4 clearfix">
                <?php foreach($attachments as $att_id => $attachment) { $full_img_url = wp_get_attachment_url($attachment); ?>
                <div class="gallery-item"><img src="<?php  echo $full_img_url; ?>" title="image" alt="img" style="width: 300px; height: 250px;">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <div class="gallery-content-inner"><a class="image-popup-gallery" href="<?php  echo $full_img_url;?>"><i class="ti-zoom-in"></i></a>
                            <a href="gallery-hover-style-4.html#"><i class="ti-gallery"></i></a></div>
                        </div>
                    </div>
                    
                </div>
                <?php }?>
           </div>
        </div>
    </div>








<?php get_footer(); ?>
