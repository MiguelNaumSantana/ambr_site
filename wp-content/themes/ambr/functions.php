<?php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

function css_pec() {
  
 
  wp_enqueue_style('style1', get_theme_file_uri("css/bootstrap.min.css"));
  wp_enqueue_style('style2', get_theme_file_uri("css/themify-icons.css"));
  wp_enqueue_style('style3', get_theme_file_uri("css/fontawesome-all.css"));
  wp_enqueue_style('style4', get_theme_file_uri("css/icomoon.css"));
  wp_enqueue_style('style5', get_theme_file_uri("css/plugins.css"));
  wp_enqueue_style('style6', get_theme_file_uri("css/animate.css"));
  wp_enqueue_style('style7', get_theme_file_uri("css/owl.carousel.css"));
  wp_enqueue_style('style8', get_theme_file_uri("css/slider.css"));
  wp_enqueue_style('style9', get_theme_file_uri("css/navigation.css"));
  wp_enqueue_style('style10', get_theme_file_uri("css/default.css"));
  wp_enqueue_style('style11', get_theme_file_uri("css/styles.css"));
  
}

add_action('wp_enqueue_scripts', 'css_pec');

function scripts_pec(){
   
  wp_enqueue_script('jquery1', get_theme_file_uri('js/jquery.min.js'), NULL, '2.1.4',true);
  wp_enqueue_script('bm', get_theme_file_uri('js/plugins.js'), NULL, '1.0', true);
  wp_enqueue_script('validate', get_theme_file_uri('js/navigation.js'), NULL, '1.0', true);
  wp_enqueue_script('toastr', get_theme_file_uri('js/navigation.fixed.js'), NULL, '1.0', true);
  wp_enqueue_script('wp', get_theme_file_uri('js/map.js'), NULL, '1.0', true);
  wp_enqueue_script('jqueryapp', get_theme_file_uri('js/main.js'), NULL, '1.0', true);
 
  
  
    
    
}


add_action('wp_footer','scripts_pec');


function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}


function grab_ids_from_gallery() {

global $post;
$attachment_ids = array();
$pattern = get_shortcode_regex();
$ids = array();

if (preg_match_all( '/'. $pattern .'/s', $post->post_content, $matches ) ) {   //finds the     "gallery" shortcode and puts the image ids in an associative array at $matches[3]
$count=count($matches[3]);      //in case there is more than one gallery in the post.
for ($i = 0; $i < $count; $i++){
    $atts = shortcode_parse_atts( $matches[3][$i] );
    if ( isset( $atts['ids'] ) ){
    $attachment_ids = explode( ',', $atts['ids'] );
    $ids = array_merge($ids, $attachment_ids);
    }
}
}
  return $ids;

 }
add_action( 'wp', 'grab_ids_from_gallery' );
