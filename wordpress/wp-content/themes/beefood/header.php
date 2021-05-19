<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body <?php body_class("header-collapse"); ?> >

<?php do_action('after_body_open_tag'); ?>
    
<header>
    <nav class="main-navigation">
        <?php wp_nav_menu(array('theme_location' => 'header_menu'));?>
    </nav>    
</header>