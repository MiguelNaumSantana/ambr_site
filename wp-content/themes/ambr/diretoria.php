<?php
/*
Template Name: diretoria
*/	

get_header();
?>
<div class="push-content">

<div class="section-block">
    <div class="container">
        <div class="section-heading center-holder"><h2 class="extra-light">Diretoria Executiva</h2><div class="section-heading-line"></div></div>
        <div class="row mt-40">
            
             <?php $diretores = new WP_Query(array('post_type'=>'diretoria'));
         
            while($diretores->have_posts()):$diretores->the_post();
            
            
            ?>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="team-circle">
                    <div class="team-circle-img"> <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"> </div>
                    <div class="team-circle-text">
                        <h4><a href="elements-team.html#"><?php the_title();?></a></h4>
                        <h5 class="italic libre-baskerville"><?php the_field('cargo');?></h5>
                        <ul class="team-circle-social">
                            <li> <a href="elements-team.html#"><i class="fab fa-facebook-f"></i></a></li>
                            <li> <a href="elements-team.html#"><i class="fab fa-twitter"></i></a></li>
                            <li> <a href="elements-team.html#"><i class="fab fa-skype"></i></a></li>
                            <li> <a href="elements-team.html#"><i class="fab fa-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
           
            
        </div>
    </div>
    <hr>
</div>


<div class="section-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-12 ">
                <div class="small-heading center-holder mb-30"><span class="uppercase"><h3>Conselho Fiscal</h3></span></div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-12">
                        <h4>Titulares</h4>
                        <ul class="primary-list">
                            <li><i class="fa fa-check-square"></i>Dr. Frederico Pohl</li>
                            <li><i class="fa fa-check-square"></i>Dr. José Luiz Dantas Mestrinho</li>
                            <li><i class="fa fa-check-square"></i>Dr. Jaldo Aguiar Barbosa</li>
                            
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12">
                        <h4>Suplentes</h4>
                 


                        <ul class="primary-list">
                            <li><i class="fa fa-check-circle"></i>   Dr. Dennis Burns</li>
                            <li><i class="fa fa-check-circle"></i>Dra. Sônia Gadelha</li>
                            <li><i class="fa fa-check-circle"></i>Dr. Francisco Machado</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-12 ">
                <div class="small-heading center-holder mb-30"><span class="uppercase"><h3>Delegados</h3></span></div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-12">
                        <h4>Efetivos</h4>



                        <ul class="primary-list">
                            <li><i class="fa fa-check-square"></i> Dra. Olimpia Lima</li>
                            <li><i class="fa fa-check-square"></i>Dr. Alberto Barbosa</li>
                            <li><i class="fa fa-check-square"></i>Dr. José Nava</li>
                            <li><i class="fa fa-check-square"></i>Dr. Ivan Malheiros</li>
                            <li><i class="fa fa-check-square"></i>Dr. Humberto Barbosa</li>
                            <li><i class="fa fa-check-square"></i>Dr. Ulysses Rodrigues de Castro</li>
                            
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12">
                        <h4>Suplentes</h4>
                 


                        <ul class="primary-list">
                            <li><i class="fa fa-check-circle"></i>  Dr. Roberto Rodrigues</li>
                            <li><i class="fa fa-check-circle"></i>Dr. Volnei Paulino</li>
                            <li><i class="fa fa-check-circle"></i>Dr. Tulio Marcos</li>
                            <li><i class="fa fa-check-circle"></i>Dr. Andre Aquino</li>
                            <li><i class="fa fa-check-circle"></i>Dra. Dóris Daher</li>
                            <li><i class="fa fa-check-circle"></i>Dr. Lásaro Melo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>


<?php get_footer();?>