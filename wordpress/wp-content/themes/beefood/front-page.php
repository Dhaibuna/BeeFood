<?php get_header(); ?>


<?php
//Je vais récuépérer les données avec get_field, et je les affiche dans une variable
    $background_image = get_field("background_image");
    $background_image_url = $background_image["url"];
?>

<section class= "style='background-image:url(<?php echo $background_image_url ?>)'">
    <?php
    echo '<pre>';
    var_dump($background_image_url);
    echo '</pre>';

    ?>
    <div>
        <h1>
            <?php the_field("subtitle"); ?> </br>
            <?php the_field("main_title"); ?>
        <h1>
    </div>
</section>

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