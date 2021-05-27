<?php get_header() ?>

<?php

// Template Name: single-recipe
// Template Post Type: post 

?>

<?php

$recipeTitle = get_field('nom_de_la_recette');
$recipeType = get_field('type_de_cuisine');
$recipeIntroText = get_field('resume_de_la_recette');


$recipeIngredient = get_field('ingredients');
$recipeNumberOfPerson = get_field('pour_combien_de_personnes');
$recipeCookingMinutes = get_field('duree_de_preparation');
$recipeInstructions = get_field('instructions');
$recipeImage2 = get_field('image_plat_2');

$recipeImage1 = get_field('image_plat_1');
$recipeImage1Size = $recipeImage1['url'];

?>



<div class="single-recipe-container">

    <div class="container recipe-content">
        <div class="row date-banner">
            <div class="col-2"></div>

            <div class="col-2">Retour</div>
            <div class="col-2">Date</div>
            <div class="col-2"></div>
            <div class="col-2">Type</div>

            <div class="col-2"></div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <h1 class="recipeTitle"><?php echo $recipeTitle; ?></h1>

                <p class="recipeIntroText"><?php echo $recipeIntroText ?></p>

                <img src="<?php echo $recipeImage1['url'] ?>" class="recipeImage1" alt="Responsive image">



                <h2 class="ingredientsText">Ingrédients</h2>

                <p class="recipeIngredient"><?php echo $recipeIngredient ?></p>

                <img src="<?php echo $recipeImage2['url'] ?>" class="recipeImage2" alt="Responsive image">

                <h2 class="instructionsText">Instructions</h2>

                <p class="recipeInstructions"><?php echo $recipeInstructions ?></p>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>
<?php get_footer() ?>