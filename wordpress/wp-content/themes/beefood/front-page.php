<?php
//Je vais récuépérer les données avec get_field pour les images, et je les affiche dans une variable
$background_image = get_field("background_image");
?>

<section class="banner-top" style="background-image: url('<?php echo $background_image['url']; ?>');">
    <?php get_header(); ?>
        <div>
            <h1>
                <?php the_field("subtitle"); ?> </br>
                <?php the_field("main_title"); ?>
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


<?php get_footer(); ?>