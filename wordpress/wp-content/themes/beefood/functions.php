<?php 


function beefood_init()
{
    // faire en sorte que wp enregistre le menu dans le dashborad, au niveau de l'apparence

    register_nav_menu('header', 'header');

}

function add_styles()
{
    // wp_register('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    // wp_enqueue_style('bootstrap');

    wp_register_style(


        'bootstrap_v5',
        get_template_directory_uri() . '/css/bootstrap.min.css',
        [],
        false,
        'all'
    );
    wp_enqueue_style('bootstrap_v5'); 


    wp_register_style('style', get_template_directory_uri() . "/style.css", array(), false, "all");
    wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'add_styles');
// Hooks

add_action('wp_enqueue_scripts', 'add_styles');
add_action('init', 'beefood_init');

add_theme_support('title-tag');// affiche le nom de la page dans l'onglet



//Remove Gutenberg
// for posts
add_filter('use_block_editor_for_post', '__return_false', 10);
// for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);