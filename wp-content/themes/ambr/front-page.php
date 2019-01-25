<?php get_header();?>
    
    <div class="push-content">
        
        <div class="section-block">
    <div class="container">
        
        <div class="row mt-30">
            <div class="col-md-6 col-sm-12 col-12">
                <div class="blog-news">
                    <div class="blog-news-img">
                        
                        
                        
                        
                        
                       <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                         <?php query_posts('cat=2'); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                           
                           
                           
                            <div class="carousel-item <?php the_field('active');?>">
                              <a href="<?php the_permalink(); ?>">  <img style="max-height:300px;" class="d-block w-100" src="<?php echo get_the_post_thumbnail_url()?>" alt="First slide"></a>
                              <div class="blog-news-text ">
                        <h4><a href="home-marketing-agency.html#"><?php the_title(); ?></a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation</p>
                        <div class="blog-news-comment">
                            <p>Posted </p><span>17 April 2018</span></div>
                    </div>
                            </div>
                            
                            
                            
                        <?php endwhile; else : ?>
	                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; wp_reset_query(); ?>    
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                    </div>
            
                    
                    
                    
                    
                    
                    
                    
                    </div>
                    
                    
                    
                    
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-12">
                <div class="blog-news">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-12">
                            <div class="blog-news-left-img"><img src="img/content/blog/blog-news-2.jpg" alt="img"></div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-12">
                            <div class="blog-news-left-text">
                                <h4><a href="home-marketing-agency.html#">7 Tops To Move YourProject More Forvard.</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et.</p>
                                <div class="blog-news-comment">
                                    <p>Posted </p><span>17 April 2018</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-news mt-30">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-12">
                            <div class="blog-news-left-img"><img src="img/content/blog/blog-news-3.jpg" alt="img"></div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-12">
                            <div class="blog-news-left-text">
                                <h4><a href="home-marketing-agency.html#">Markets edge higher on hopes ...</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="blog-news-comment">
                                    <p>Posted </p><span>17 April 2018</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



        
        <div class="section-block" style="padding:50px;">
    <div class="container" >
        
        
    
        
        
        
        
        
        
        
        
        
        
        
        
        <!--<div class="section-heading center-holder">-->
        <!--    <h3 class="bold">Read Our <span class="italic libre-baskerville primary-color">Latest Articles</span></h3>-->
        <!--    <div class="section-heading-line"></div>-->
        <!--    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua.</p>-->
        <!--</div>-->
        <div class="row mt-30">
            
            
            
            <div class="col-md-10 col-sm-12 ">
    <div class="blog-news">
        <div class="blog-news-img">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                         <?php query_posts('cat=2'); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                           
                           
                           
                            <div class="carousel-item <?php the_field('active');?>">
                              <a href="<?php the_permalink(); ?>">  <img style="max-height:300px;" class="d-block w-100" src="<?php echo get_the_post_thumbnail_url()?>" alt="First slide"></a>
                            </div>
                            
                            
                            
                        <?php endwhile; else : ?>
	                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; wp_reset_query(); ?>    
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                    </div>
            
            
            <!--<img src="https://ambr-miguelsantana.c9users.io/tema3/specthemes.com/webmaker/webmaker-demo/img/content/blog/blog-news-1.jpg" alt="img">-->
        
        
        </div>
        <!--<div class="blog-news-text">-->
        <!--    <h4><a href="home-marketing-agency.html#">What palanning Process Needs?</a></h4>-->
        <!--    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation</p>-->
        <!--    <div class="blog-news-comment">-->
        <!--        <p>Posted </p><span>17 April 2018</span></div>-->
        <!--</div>-->
    </div>
</div>

<?php query_posts('cat=4'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
<div class="col-md-4 col-sm-12 col-12">
    <div class="blog-news">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-12">
                <div class="blog-news-left-img">
                     <a href="<?php the_permalink(); ?>"> <img style="width:213px;height:210px;" src="<?php echo get_the_post_thumbnail_url();?>" alt="img"></a></div>
            </div>
            <div class="col-md-7 col-sm-7 col-12">
                <div class="blog-news-left-text">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                    <p><?php echo excerpt(30);?></p>
                    <!--<div class="blog-news-comment">-->
                    <!--    <p>Posted </p><span>17 April 2018</span></div>-->
                </div>
            </div>
        </div>
    </div>
    
</div>

<?php endwhile; else : ?>
	                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; wp_reset_query(); ?> 
                    
                    
                    


            
            
         </div>    
    </div>
</div>
        
       
    
    
    <div class="section-block-bg right-position white-overlay-80 section-block-parallax " style="background-image: url('http://www.ambr.org.br/images/quem01.jpg');">
        <div class="section-heading center-holder wow fadeIn  animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
            <h2 color="white">Quem <span class="italic libre-baskerville primary-color">Somos</span></h2>
            <div class="section-heading-line"></div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-10 col-12 ">
                    <div class="section-heading left-holder wow fadeIn animated" data-wow-delay=".1s">
                        <h3 class="bold text-center">A AMBr é uma casa de médicos <span class="italic libre-baskerville primary-color">para médicos!</span></h3>
                        <div class="section-heading-line"></div>
                    </div>
                    <div class="text-content-big mt-10 wow fadeIn animated" data-wow-delay=".15s">
                        <p class="bold" style="color:#333;">

                            Somos uma entidade de classe sem fins lucrativos, federada da Associação Médica Brasileira - AMB, criada para zelar pela qualidade do exercício da Medicina e pela valorização da classe médica do Distrito Federal. Aqui defendemos as especialidades médicas,
                            as conquistas de nossa classe profissional e a boa prática da Medicina com ações políticas, científicas, associativistas, de promoção da saúde e de educação continuada de estudantes, médicos residentes e especialistas. Outro
                            foco importante de nossa Associação é a integração da classe médica e das famílias dos associados, com a ampla oferta de atividades de lazer, cultura e esportes, por meio de nossa completa área de lazer e dos eventos tradicionais
                            que promovemos, como o Arraiá do Dotô, o Carnaval Infantil e a Festa do Médico, em homenagem ao seu dia, comemorado em 18 de outubro..</p>
                    </div>
                    <div class="mt-25 wow fadeIn animated" data-wow-delay=".2s">
                        <ul class="primary-list">
                            <li><i class="fa fa-check-square"></i>A defesa dos interesses da classe médica;</li>
                            <li><i class="fa fa-check-square"></i>O fomento à qualificação continuada de estudantes, médicos residentes e especialistas;</li>
                            <li><i class="fa fa-check-square"></i>A promoção da integração da família médica;</li>
                            <li><i class="fa fa-check-square"></i>A oferta de lazer, saúde e cultura a seus associados.</li>
                        </ul>
                    </div>
                    <div class="mt-30"><a href="index.html#" class="primary-button  wow fadeIn animated button-lg" data-wow-delay=".25s">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="section-block-grey">

        <div class="section-heading center-holder wow fadeIn  animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
            <h2 color="white">Seja um <span class="italic libre-baskerville primary-color">associado</span></h2>
            <div class="section-heading-line"></div>

        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="feature-block-3 center-holder"><i class="icon-startup2"></i>
                        <h4>PEQUENO INVESTIMENTO, GRANDES BENEFÍCIOS</h4>
                        <p>Mediante uma pequena mensalidade, os associados e seus dependentes têm acesso a uma completa área de lazer e desportos; descontos especiais para alugar espaços de eventos, participar dos cursos de educação continuada e adquirir
                            convites para as renomadas festas promovidas pela AMBr. Desfrute de momentos especiais com sua família e convidados!</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="feature-block-3 center-holder"><i class="icon-light-bulb"></i>
                        <h4>PEQUENO INVESTIMENTO, GRANDES BENEFÍCIOS</h4>
                        <p>Somente associados e seus dependentes podem aderir aos grupos de planos de saúde geridos pela AMBr. As vantagens são muitas: rede credenciada diferenciada, melhor negociação de reajustes do mercado e um serviço de concierge que
                            resolve tudo junto aos planos, facilitando a vida dos segurados e garantindo a qualidade do atendimento. Um diferencial único em Brasília!</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="feature-block-3 center-holder"><i class="icon-humanpictos"></i>
                        <h4>PLANOS DE SAÚDE E CONCIERGE EXCLUSIVOS</h4>
                        <p>Na AMBr você fica sempre antenado e bem preparado para os desafios da profissão. Em parceria com as Sociedades de Especialidade ou por iniciativa própria, a Associação oferece ou atrai para seus espaços programas, cursos, palestras,
                            congressos, reuniões científicas sobre diversos temas de interesse de nossa classe profissional.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="feature-block-3 center-holder"><i class="icon-target"></i>
                        <h4>FOMENTO À QUALIFICAÇÃO CONTINUADA</h4>
                        <p>Na AMBr reúnem-se e congregam estudantes, residentes e especialistas, os quais encontram nos espaços e atividades da sua Associação um motivo para debater temas importantes, atualizar conhecimentos, reunir as famílias e fortalecer
                            a classe médica na defesa de seus interesses. A AMBr é a Casa do Médico. Venha participar!</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid pl-0 pr-0">
        <div class="row no-gutters">
            <div class="col-md-8 col-sm-6 col-12">
                <div class="full-background min-350" style="background-image: url(http://www.ambr.org.br/images/h1.jpg);"></div>
            </div>


            <div class="col-md-4 col-sm-6 col-12">
                <div class="padding-10-perc">
                    <div class="section-heading">
                        
                        
                        <h3 class="bold text-center">Espaço para  <span class="italic libre-baskerville primary-color">eventos</span></h3>
                        <p>Espaços diferenciados para a realização de festas, casamentos, shows e outros eventos, além de um versátil Centro de Convenções para promoção de congressos, feiras, cursos, workshops e palestras. Tudo isso num cenário deslumbrante,
                            muito bem localizado, com amplo estacionamento e serviços de apoio</p>

                        <div class="mt-30"><a href="index.html#" class="primary-button button-sm wow fadeIn animated" data-wow-delay=".25s">Contact Us</a><a href="index.html#" class="dark-button button-sm wow fadeIn animated" data-wow-delay=".3s">Become a Client</a></div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <div class="section-block pt-0 pb-0 mt-10 mb-10">
        <div class="container-fluid">
            <div class="grid-gallery-5col gallery-style-4 clearfix">
                <div class="gallery-item"><img src="http://www.ambr.org.br/storage/album/photos/noI5aDds8CIBvBBF1O3TWmrsmPLLjs13X1KzR0sm.jpeg" title="image" alt="img">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <div class="gallery-content-inner"><a class="image-popup-gallery" href="img/content/gallery/g-19.jpg"><i class="ti-zoom-in"></i></a><a href="gallery-hover-style-4.html#"><i class="ti-gallery"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="gallery-item"><img src="http://www.ambr.org.br/storage/album/photos/wEkvE75wWbM09NHGTTwVvPd3QU2iCRcY6z6omO24.jpeg" title="image" alt="img">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <div class="gallery-content-inner"><a class="image-popup-gallery" href="img/content/gallery/g-20.jpg"><i class="ti-zoom-in"></i></a><a href="gallery-hover-style-4.html#"><i class="ti-gallery"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="gallery-item"><img src="http://www.ambr.org.br/storage/album/photos/ZBOabKaRFb9KRRl0nkxcfgIq1SgUHLRLPpdTAm4z.jpeg" title="image" alt="img">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <div class="gallery-content-inner"><a class="image-popup-gallery" href="img/content/gallery/g-21.jpg"><i class="ti-zoom-in"></i></a><a href="gallery-hover-style-4.html#"><i class="ti-gallery"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="gallery-item"><img src="http://www.ambr.org.br/storage/album/photos/WpPb7BZmBWTyUygumRICbwOXX1LAByE5d14lyU8F.jpeg" title="image" alt="img">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <div class="gallery-content-inner"><a class="image-popup-gallery" href="img/content/gallery/g-22.jpg"><i class="ti-zoom-in"></i></a><a href="gallery-hover-style-4.html#"><i class="ti-gallery"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="gallery-item"><img src="http://www.ambr.org.br/storage/album/photos/noI5aDds8CIBvBBF1O3TWmrsmPLLjs13X1KzR0sm.jpeg" title="image" alt="img">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <div class="gallery-content-inner"><a class="image-popup-gallery" href="img/content/gallery/g-23.jpg"><i class="ti-zoom-in"></i></a><a href="gallery-hover-style-4.html#"><i class="ti-gallery"></i></a></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
        
        
        
        
        
        
        
    <div class="action-box action-box-md white-bg center-holder-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-12">
                    <h3 class="bold">Associe-se a AMBr!</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                </div>
                <div class="col-md-2 col-sm-2 col-12 right-holder center-holder-xs"><a href="elements-action-boxes.html#" class="button-md primary-button">Formulário de inscrição</a></div>
            </div>
        </div>
    </div>    
        
        
    <div class="section-block">
        <div class="section-heading center-holder wow fadeIn  animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
            
            <h2 style="color:#333;" color="white">Entre em  <span class="italic libre-baskerville primary-color">contato</span></span></h2>
            <div class="section-heading-line"></div>

        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="contact-box-place-office"><i class="icon-building-1"></i>
                        <h4>AMBr</h4>
                        <h6>Str. Charenc France / 109</h6>
                        <p>There are many variations of passages of Lorem load Ipsum available.</p>
                        <ul>
                            <li><i class="fas fa-envelope-open"></i>specthemes@mail.com</li>
                            <li><i class="fas fa-phone"></i>(+123) 123-456-789</li>
                            <li><i class="fas fa-fax"></i>(+123) 456-789</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-12">
                    <div class="contact-box-4">
                        <div class="section-heading left-holder mt-15">
                            <h5 class="bold">Enviar mensagem</h5>
                            <div class="section-heading-line"></div>
                        </div>
                        <form class="primary-form mt-20">
                            <div class="row">
                                <div class="col-md-12"><textarea name="message" placeholder="Message"></textarea></div>
                                <div class="col-md-4 col-sm-4 col-xs-12"><input type="text" name="name" placeholder="Name"></div>
                                <div class="col-md-4 col-sm-4 col-xs-12"><input type="email" name="email" placeholder="E-mail"></div>
                                <div class="col-md-4 col-sm-4 col-xs-12"><input type="email" name="email" placeholder="Phone"></div>
                                <div class="col-md-12 mt-10 mb-30"><button type="submit" class="primary-button button-sm semi-rounded">Send Message</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
        
        
        
        
        
        
        
        
        
        
<?php get_footer();?>