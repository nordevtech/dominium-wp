<?php

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
}

}