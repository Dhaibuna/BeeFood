<?php
//Je vais récuépérer les données avec get_field pour les images, et je les affiche dans une variable
$background_bannertop_image = get_field("background_image")['url'];
//var_dump(get_field("black_hatching"));
$background_grey_hatching = get_field("grey_hatching")['url'];
//var_dump(get_field("icon_one"));
$quality_food_svg = get_field('icon_one')['url'];

?>

<div class="container-fluid banner-top" style="background-image: url('<?php echo $background_bannertop_image?>');">
    <div class="row">
        <?php get_header(); ?>
            <div class="row pt-5 pb-5 text-white">
                <p><?php the_field("subtitle"); ?> </p>
                <p><?php the_field("main_title"); ?></p>
            </div>
    </div>
</div>

<!-- Icon cards -->
  <div class="container-fluid cards-box"> 
    <div class="row icon-cards" style="background-image:url('<?php echo $background_grey_hatching ?>');">
    
        <div class="col">
            <div class="card shadow rounded-lg mx-auto" style="width: 15rem; height: 15rem;">
                <img class="card-img-left" src="<?php echo $quality_food_svg ?>" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title"><?php the_field("icon_title_one"); ?></h5>
                    <p class="card-text"><?php the_field("icon_text_1"); ?></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card  shadow rounded-lg mx-auto" style="width: 15rem; height: 15rem; ">
                <img class="card-img-middle" src="http://localhost/wp-content/uploads/2021/05/fastest-delivery.svg" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title"><?php the_field("icon_title_two"); ?></h5>
                    <p class="card-text"><?php the_field("icon_text_two"); ?></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow rounded-lg mx-auto" style="width: 15rem; height: 15rem;">
                <img class="card-img-right" src="http://localhost/wp-content/uploads/2021/05/original-recipes.svg" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title"><?php the_field("icon_title_three"); ?></h5>
                    <p class="card-text"><?php the_field("icon_text_three"); ?></p>
                </div>
            </div>
        </div>
    </div>   
<!--</div> -->
</div>
<!-- Icon cards -->

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
<section class="container">
    <img src=<?php echo get_field('img_1')['sizes']['thumbnail']; ?> />
    <img src=<?php echo get_field('img_2')['sizes']['thumbnail']; ?> />
    <img src=<?php echo get_field('img_3')['sizes']['thumbnail']; ?> />
    <img src=<?php echo get_field('img_4')['sizes']['thumbnail']; ?> />
    <div class="card-body">
        <h5 class="card-title"><?php the_field("subtitle_+_title"); ?></h5>
        <p class="card-text"><?php the_field("text"); ?></p>
        <p class="card-link"><?php the_field("intern_link"); ?></p>
    </div>
</section>


<!--Testimony-->
<section class="container">

    <div class="card-body">

        <p class="card-text"><?php the_field("text_testimony"); ?></p>
        <p class="card-subtitle"><?php the_field("name_testimony"); ?></p>
    </div>
</section>

<!--Recipes Blog-->

<?php if (have_posts()) : ?>

    <ul>a
        <?php while (have_posts()) : the_post(); ?>
            <li></li>
        <?php endwhile ?>
    </ul>


<?php else : ?>
    <h1>Pas d'article</h1>

<?php endif; ?>


<?php get_footer(); ?>