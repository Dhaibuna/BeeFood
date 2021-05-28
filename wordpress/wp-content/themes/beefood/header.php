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
    
<nav class="header-container navbar-expand-lg">
    <a class="navbar-brand restaurant-name text-white" href="#"><?php bloginfo('name') ?></a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-5 navigation">
        <?php wp_nav_menu(array('theme_location' => 'header'));?>
        </div>
    </div>
</nav>