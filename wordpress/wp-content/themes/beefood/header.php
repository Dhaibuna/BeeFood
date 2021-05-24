<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?> ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body <?php body_class("header-collapse"); ?> >

<?php do_action('after_body_open_tag'); ?>
    
<header class="header-container">
    <div>
        <h3>Beefood</h3>
    
        <nav class="main-navigation">
            <?php wp_nav_menu(array('theme_location' => 'header_menu'));?>
        </nav>
    </div>
    <div>
        <p>For happy day</p> 
        <h1><?php the_title() ?></h1>
    </div>
</header>
