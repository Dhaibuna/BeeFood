<?php get_header(); ?>

<div>
<h1>
    <?php the_field("subtitle") ?> </br>
    <?php the_field("main_title") ?>
<h1>

</div>

<?php

   /* if( have_posts() ){

        while( have_posts() ){
         // Will execute this as lon as there is a post
            the_post();
            the_content();
        }
    } */

?>

<?php get_footer(); ?>