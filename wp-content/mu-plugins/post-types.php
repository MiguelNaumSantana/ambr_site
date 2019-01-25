<?php 


add_theme_support('post-thumbnails');





function post_types(){
    register_post_type('galeria',array(
        'supports'=> array('title','editor','thumbnail','cathegory'),
        'rewwrite'=>array('slug'=>'eventos'),
        'has_archive'=>true,
        'public'=>true,
        'labels'=>array(
            'name'=>'Galeria',
            'new_item'=>'Nova galeria',
            'add_new_item'=>'Adicionar nova galeria',
            'edit_item'=>'Editar imagens',
            'all_items'=>'Todos as galerias',
            'singular_name'=>'Galeria',
             ),
        'menu_icon'=>'dashicons-calendar',
        ));
    register_post_type('brasilia-medica',array(
        'supports'=> array('title','editor','thumbnail','cathegory'),
        'rewwrite'=>array('slug'=>'eventos'),
        'has_archive'=>true,
        'public'=>true,
        'labels'=>array(
            'name'=>'Brasília medica',
            'new_item'=>'Nova revista',
            'add_new_item'=>'Adicionar nova revista',
            'edit_item'=>'Editar revista',
            'all_items'=>'Todos as revistas',
            'singular_name'=>'Revista',
             ),
        'menu_icon'=>'dashicons-calendar',
        ));
    register_post_type('medico-em-dia',array(
        'supports'=> array('title','editor','thumbnail','cathegory'),
        'rewwrite'=>array('slug'=>'eventos'),
        'has_archive'=>true,
        'public'=>true,
        'labels'=>array(
            'name'=>'Médico em dia',
            'new_item'=>'Nova revista',
            'add_new_item'=>'Adicionar nova revista',
            'edit_item'=>'Editar revista',
            'all_items'=>'Todos as revistas',
            'singular_name'=>'Revista',
             ),
        'menu_icon'=>'dashicons-calendar',
        ));
            register_post_type('Sociedades',array(
        'supports'=> array('title','editor','thumbnail'),
        'taxonomies' => array('category'),
        'rewwrite'=>array('slug'=>'Sociedades'),
        'has_archive'=>true,
        'public'=>true,
        'labels'=>array(
            'name'=>'Sociedades',
            'new_item'=>'Novo',
            'add_new_item'=>'Adicionar novo ',
            'edit_item'=>'Editar ',
            'all_items'=>'Todos ',
            'singular_name'=>'dociedade',
             ),
        'menu_icon'=>'dashicons-thumbs-up',
        ));
            register_post_type('diretoria',array(
        'supports'=> array('title','editor','thumbnail'),
        'taxonomies' => array('category'),
        'rewwrite'=>array('slug'=>'diretorias'),
        'has_archive'=>true,
        'public'=>true,
        'labels'=>array(
            'name'=>'Diretorias',
            'new_item'=>'Novo',
            'add_new_item'=>'Adicionar novo ',
            'edit_item'=>'Editar ',
            'all_items'=>'Todos ',
            'singular_name'=>'diretoria',
             ),
        'menu_icon'=>'dashicons-thumbs-up',
        ));
        
        


        
}

add_action('init','post_types');