<?php 


function beefood_init()
{
    // faire en sorte que wp enregistre le menu dans le dashborad, au niveau de l'apparence

    register_nav_menu('header-container', 'header-container');

}

function add_styles()
{
    
    wp_register_style('style', get_template_directory_uri() . "/style.css", array(), false, "all");
    wp_enqueue_style('style');

}

// Hooks

add_action('wp_enqueue_scripts', 'add_styles');
add_action('init', 'beefood_init');
