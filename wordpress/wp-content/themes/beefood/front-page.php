<?php
//Je vais récuépérer les données avec get_field pour les images, et je les affiche dans une variable
$background_image = get_field("background_image");
?>

<section class="banner-top" style="background-image: url('<?php echo $background_image['url']; ?>');">
    <?php get_header(); ?>
        <div>
            <h1>
    </div>

    <!-- Icon cards -->
    <div class="row">
        <div class="col">
            <div class="card" style="width: 15rem; height: 15rem;">
                <img class="card-img-left" src="http://localhost/wp-content/uploads/2021/05/quality-food.svg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php the_field("icon_title_one"); ?></h5>
                    <p class="card-text"><?php the_field("icon_text_1"); ?></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 15rem; height: 15rem; ">
                <img class="card-img-middle" src="http://localhost/wp-content/uploads/2021/05/fastest-delivery.svg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php the_field("icon_title_two"); ?></h5>
                    <p class="card-text"><?php the_field("icon_text_two"); ?></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 15rem; height: 15rem;">
                <img class="card-img-right" src="http://localhost/wp-content/uploads/2021/05/original-recipes.svg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php the_field("icon_title_three"); ?></h5>
                    <p class="card-text"><?php the_field("icon_text_three"); ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Icon cards -->

</section>


<!--Intro cf-->
<section class="container">
    <div class="row">
        <div class="col-6"> <img src=<?php echo get_field('left_image')['sizes']['medium']; ?> /></div>
        <div class="card-body">
            <h5 class="card-title"><?php the_field("right_title"); ?></h5>
            <p class="card-subtitle"><?php the_field("right_subtitle"); ?></p>
            <p class="card-text"><?php the_field("right_text"); ?></p>
            <p class="card-signature"><?php the_field("right_signature"); ?></p>
        </div>
    </div>
</section>

<!-- 3 Restauraunts cf-->
<section class="container"> 
    <div>   
        <h5><?php the_field('see_the_posts_restaurants'); ?></h5>
    </div>
</section>


<!--Our Menu-->
<?php if (have_posts()) : ?>

    <ul>
        <?php while (have_posts()) : the_post(); ?>
            <li></li>
        <?php endwhile ?>
    </ul>


<?php else : ?>
    <h1>Pas d'article</h1>

<?php endif; ?>


<?php get_footer(); ?>