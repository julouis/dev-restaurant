<?php

// Template Name: single-recipe
// Template Post Type: post 

?>

<!-- PUT ACF DATA INTO VARIABLES -->

<?php

$recipeDate = get_the_date();

$recipeTitle = get_field('nom_de_la_recette');
$recipeType = get_field('type_de_cuisine');
$recipeIntroText = get_field('resume_de_la_recette');


$recipeIngredient = get_field('ingredients');
$recipeNumberOfPerson = get_field('pour_combien_de_personnes');
$recipeCookingMinutes = get_field('duree_de_preparation');

$recipeInstructions1 = get_field('instructions_1');
$recipeInstructions2 = get_field('instructions_2');
$recipeInstructions3 = get_field('instructions_3');
$recipeInstructions4 = get_field('instructions_4');

$recipeImage2 = get_field('image_plat_2');

$recipeImage1 = get_field('image_plat_1');
$recipeImage1Size = $recipeImage1['url'];

?>


<!-- HEADER BLOCK WITH CSS PADDING -->
<div class="single-recipe-header"> <?php get_header() ?> </div>


<!-- MAIN CONTAINER -->
<div class="single-recipe-container">

    <div class="container recipe-content">
        <div class="row date-banner">
            <div class="col-2"></div>
            <!-- TOP BANER, LINK WITH WP FUNCTION -->
            <div class="col-2"> <a href="" class="back-recipe"><i class="fas fa-arrow-left"></i> Retour</a></div>
            <div class="col-2"><?php echo $recipeDate ?></div>
            <div class="col-2"></div>
            <div class="col-2"><i class="fas fa-utensils"></i> <?php echo $recipeType ?></div>

            <div class="col-2"></div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <h1 class="recipeTitle"><?php echo $recipeTitle; ?></h1>

                <p class="recipeIntroText"><?php echo $recipeIntroText ?></p>

                <img src="<?php echo $recipeImage1['url'] ?>" class="recipeImage1" alt="Responsive image">


                <div class="row">

                    <div class="col-2">

                        <div class="d-flex socialNetwork p-2 col flex-column align-items-sm-center  justify-content-xl-start align-items-xl-start  ">
                            <!-- facebook -->
                            <i class="text-white fab fa-facebook-f d-flex justify-content-center align-items-center rounded-circle iconFooterSize m-1 bg-blue"></i>

                            <!-- twitter -->
                            <div class=" ">
                                <i class="text-white fab fa-twitter d-flex justify-content-center align-items-center bg-info rounded-circle iconFooterSize m-1"></i>

                            </div>

                            <!-- instagram -->
                            <div class="">
                                <i class="text-white fab fa-instagram d-flex justify-content-center align-items-center bg-danger rounded-circle iconFooterSize m-1 "></i>

                            </div>

                            <!-- linkedin -->
                            <div class="">
                                <i class="text-white fab fa-linkedin-in d-flex justify-content-center align-items-center bg-primary rounded-circle iconFooterSize m-1 "></i>

                            </div>

                        </div>

                    </div>

                    <div class="col-8">

                        <h2 class="ingredientsText">Ingrédients</h2>

                        <p>For <? echo $recipeNumberOfPerson ?> people - preparation <?php echo $recipeCookingMinutes ?> minutes</p>

                        <p class="recipeIngredient"><?php echo $recipeIngredient ?></p>

                    </div>

                    <div class="col-2"></div>


                </div>

                <div class="row">

                    <div class="col-2"></div>

                    <div class="col-8">


                        <h2 class="instructionsText">Instructions</h2>

                        <p class="instructions_1"><?php echo $recipeInstructions1 ?></p>

                        <p class="instructions_2"><?php echo $recipeInstructions2 ?></p>

                        <img src="<?php echo $recipeImage2['url'] ?>" class="recipeImage2" alt="Responsive image">

                        <p class="instructions_3"><?php echo $recipeInstructions3 ?></p>

                        <p class="instructions_4"><?php echo $recipeInstructions4 ?></p>


                    </div>

                    <div class="col-2"></div>


                </div>




            </div>
        </div>
        <div class="col-2"></div>
    </div>

    <div class=" recipesMini d-flex flex-column align-items-center bg-light">
        <img src="" alt="">
        <div class="mt-5 text-center">
            <h5>Latest updated</h5>
            <h4>Recipes Blog</h4>
        </div>

        <div class="latestRecipe">
            <div class="carMiniRecipe d-flex flex-wrap justify-content-center">
                <?php
                $the_query = new WP_Query(array(
                    'category_name' => 'recipes',
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'posts_per_page' => '4'
                ));

                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                ?>
                        <div class=" recipeCard">

                            <div class=" recipeSingle card m-3">
                                <div class="imgRecipeCard">
                                    <?php the_post_thumbnail(array(300, 500)) ?>
                                </div>
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <div>
                                        <p class="card-text ">
                                            <small class="text-muted">
                                                <i class="fas fa-clock me-2 "></i>
                                                Last updated 3 mins ago
                                            </small>
                                        </p>
                                        <h3><?php the_title(); ?></h3>
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="d-flex justify-content-around">
                                        <p class="border"></p>
                                        <hr class="border border-white flex-grow-1 ">
                                        <a href="<?php the_permalink() ?>" role="button" class="fw-bold text-uppercase text-dark"> Read More </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php endwhile;
                endif; ?>

            </div>
        </div>
    </div>

</div>



<?php get_footer() ?>