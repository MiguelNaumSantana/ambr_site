 <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="blog-post-right">
                       
                        
                        <h4>Ultimas Notícias</h4>
                        <div class="recent-post mt-20">
                            
                             <?php $args = array('post_type' => 'post','posts_per_page'=> 4 );$the_query = new WP_Query( $args );?>
                <?php if( $the_query->have_posts()): ?>
                <?php while ( $the_query->have_posts() ): $the_query->the_post();?>
                
                
                            <div class="recent-post-info">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-12 pr-0"> <img style="max-width:82.5px;max-heght:82.5px;" src="<?php echo get_the_post_thumbnail_url()?>" alt="img"> </div>
                                    <div class="col-md-8 col-sm-8 col-12">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <?php endwhile;endif;?>
                            
                        </div>
                       
                        
                        
                    </div>
                </div>