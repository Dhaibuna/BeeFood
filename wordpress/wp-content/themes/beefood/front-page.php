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
        <img class="card-img-left" src="http://localhost/wp-content/uploads/2021/05/quality-food.svg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">QUALITY FOODS</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-middle" src="http://localhost/wp-content/uploads/2021/05/fastest-delivery.svg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">FASTEST DELIVERY</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-right" src="http://localhost/wp-content/uploads/2021/05/original-recipes.svg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">ORIGINAL RECIPES</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-6"></div>
        <div class="col-6">test</div>
    </div>
</section>

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