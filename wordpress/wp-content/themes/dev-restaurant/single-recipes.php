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

    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <h1><?php echo $recipeTitle; ?></h1>

                <p><?php echo $recipeIntroText ?></p>

                <img src="<?php echo $recipeImage1['url'] ?>" class="img-fluid recipe-image-1" alt="Responsive image">

                <div class="hachures-blanches"></div>

                <h2>Ingrédients</h2>

                <?php echo $recipeIngredient ?>

                <img src="<?php echo $recipeImage2['url'] ?>" class="img-fluid" alt="Responsive image">

                <h2>Instructions</h2>

                <p><?php echo $recipeInstructions ?></p>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>
<?php get_footer() ?>