<!-- INCLURE AVEC :             <?php include(locate_template("includes/accueil/propos-desktop.php")); ?> --> 
<?php


$args = array(
    'post_type' => 'exemples',
    'post_status' => 'publish',
    'posts_per_page' => '1',
    'orderby' => 'publish_date',
    'order' => 'DESC',
);

query_posts($args);

if (have_posts()) {
    while (have_posts()) {

        the_post();

        $fieldsExemple = get_field_objects();
        ?>

        <?php


    }

} else {
    echo wpautop("Désolé, aucun élément n'a été trouvé");
}

wp_reset_query(); // Réinitialisation de la requête à null ?>