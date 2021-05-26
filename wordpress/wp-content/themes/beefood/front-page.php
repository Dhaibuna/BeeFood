<?php get_header(); ?>


<?php
//Je vais récuépérer les données avec get_field, et je les affiche dans une variable
    $background_image = get_field("background_image");
    
?>

<section class="banner-top" style="background-image: url('<?php echo $background_image['url']; ?>')">
<!--<img href="http://localhost/wp-content/uploads/2021/05/banner-top.jpg"/> -->
    <div>
        <h1>
            <?php the_field("subtitle"); ?> </br>
            <?php the_field("main_title"); ?>
        <h1>
    </div>
    <!-- Faire 3 cards ici pour inclure les champs des icones remplies dans le dashboard -->
    
</div>
    
</section>


<?php if(have_posts()): ?>

    <ul>
        <?php while(have_posts()): the_post(); ?>
            <li></li>
        <?php endwhile ?>
    </ul>
    

<?php else: ?>
    <h1>Pas d'article</h1>

<?php endif; ?>    


<?php get_footer(); ?>