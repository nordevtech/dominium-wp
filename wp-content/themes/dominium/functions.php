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
    wp_enqueue_style('dominium-bs', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

    wp_enqueue_script('popper,', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('dominium-bs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('popper'), '1.0', true);
}

}