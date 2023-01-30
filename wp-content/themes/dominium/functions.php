<?php

require_once( get_template_directory() . '/inc/class-nav-bootstrap-walker.php');

add_action('after_setup_theme', 'dominium_setup');
function dominium_setup(){
    add_theme_support("post-thumbnails"); //Adicionando imagem destacada para posts
    add_theme_support("title-tag"); // Adicionando tag title do html 

    register_nav_menus( 
        array(
            'primary' => 'Primary'
        )
    );

// Função para carregar bootstrap
add_action('wp_enqueue_scripts', 'dominium_scripts');
function dominium_scripts(){
    wp_enqueue_style('dominium-global', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('dominium-header', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('dominium-footer', get_template_directory_uri() . '/assets/css/header.css');
    
    wp_enqueue_style('font', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;500&display=swap');
}

function theme_image( $image ) {
    return get_theme_file_uri( '/assets/imagens/' . $image );
  }

}