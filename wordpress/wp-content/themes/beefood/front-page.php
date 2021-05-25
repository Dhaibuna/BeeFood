<?php
//Je vais récuépérer les données avec get_field, et je les affiche dans une variable
    $background_image = get_field("background_image");
?>

<section style="background-image: url('<?php echo $background_image['url']; ?>')">
<?php get_header(); ?>

<!--<img href="http://localhost/wp-content/uploads/2021/05/banner-top.jpg"/> -->
    <div>
        <h1>
            <?php the_field("subtitle"); ?> </br>
            <?php the_field("main_title"); ?>
        <h1>
    </div>
    <!-- Faire 3 cards ici pour inclure les champs des icones remplies dans le dashboard --> 
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
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