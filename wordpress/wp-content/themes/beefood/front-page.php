<?php get_header(); ?>

<?php

    if( have_posts() ){

        while( have_posts() ){
         // Will execute this as lon as there is a post
            the_post();
            the_content();
        }
    }

?>

<?php get_footer(); ?>