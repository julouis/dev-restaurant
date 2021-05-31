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



                <h2 class="ingredientsText">Ingrédients</h2>

                <p>For <? echo $recipeNumberOfPerson ?> people - preparation <?php echo $recipeCookingMinutes ?> minutes</p>

                <p class="recipeIngredient"><?php echo $recipeIngredient ?></p>



                <h2 class="instructionsText">Instructions</h2>

                <p class="instructions_1"><?php echo $recipeInstructions1 ?></p>

                <p class="instructions_2"><?php echo $recipeInstructions2 ?></p>

                <img src="<?php echo $recipeImage2['url'] ?>" class="recipeImage2" alt="Responsive image">

                <p class="instructions_3"><?php echo $recipeInstructions3 ?></p>

                <p class="instructions_4"><?php echo $recipeInstructions4 ?></p>

            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>



<?php get_footer() ?>