<?php
/*
Template Name: sociedade
*/	

get_header();
?>
<div class="push-content">
<div class="section-block">
    <div class="container">
        <div class="section-heading center-holder">
            <h3 class="bold">Sociedades de Especialidade</h3>
            <div class="section-heading-line"></div>
            <p>As Sociedades de Especialidade Médica são parte integrante da AMBr e mais da metade das atuantes no Distrito Federal estão lotadas em nossa sede.</p>
        </div>
        <div class="row mt-40">
            
            <?php $sociedade = new WP_Query(array('post_type'=>'sociedades'));
            
            while($sociedade->have_posts()):$sociedade->the_post();
            ?>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="blog-grid-simple">
                    <h4><a href="home-creative-agency.html#"><?php the_title(); ?></a></h4>
                    <p><?php the_field('nome') ?></p>
                    <div class="blog-grid-simple-content">
                        <div class="blog-grid-simple-date">
                            <div class="row">
                               
                                
                                <ul>
                            
                            <li><i class="fas fa-phone"></i> <?php the_field('telefone') ?></li>
                            </br>
                            <li><i class="fas fa-envelope-open"></i> <?php the_field('email') ?></li>
                            
                        </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php endwhile; ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>