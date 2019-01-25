<?php get_header();?>


<div class="page-title jarallax black-overlay-20" data-jarallax data-speed="0.6" style="background-image: url('img/content/bgs/bg1.jpg');">
        <div class="container">
            <h1>Blog post video</h1>
            <ul>
                <li><a href="blog-post-video.html#">Home</a></li>
                <li><a href="blog-post-video.html#">Blog</a></li>
                <li><a href="blog-post-video.html#">Blog post video</a></li>
            </ul>
        </div>
    </div>
  <div class="section-block">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="blog-post">
                        
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        
                        <img src='<?php echo get_the_post_thumbnail_url()?>'?>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                       <h1><?php the_title();?></h1>
                       
                       <?php the_content();?>
                        <!--<ul class="blog-post-info">-->
                        <!--    <li><i class="far fa-user"></i><span>Admin</span></li>-->
                        <!--    <li><i class="far fa-calendar-alt"></i><span>May 13 2018</span></li>-->
                        <!--</ul>-->
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.-->
                        <!--    Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->
                        <!--<blockquote>-->
                        <!--    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make-->
                        <!--        a type specimen book.</p>-->
                        <!--</blockquote>-->
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.-->
                        <!--    Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum-->
                        <!--    dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis-->
                        <!--    aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->
                   
                       <?php endwhile; ?>
<?php endif;wp_reset_query();  ?>
                   
                    </div>
                    
                </div>
               <?php include 'sidebar.php';?>
            </div>
        </div>
    </div>
  
  
  
  
  
    
    
    <?php get_footer(); ?>