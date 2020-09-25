<?php
/**
 * Template Name: Template Home
 * @package underscores
 */
$champs_customs = get_fields();

get_header();
?>

<main id="home">
    <section class="row home-background">
        <div class="col-lg-2 down-arrow">
            <a href="#a-propos">
                <svg xmlns="http://www.w3.org/2000/svg" width="17.736" height="450" viewBox="0 0 17.736 450">
                    <g id="down-arrow-simple" transform="translate(0.868 0.001)">
                        <g id="Component_8_1" data-name="Component 8 – 1">
                            <line id="Line_10" data-name="Line 10" x1="0.51" y1="379.98" transform="translate(7.5)"
                                fill="none" stroke="#f6ad57" stroke-miterlimit="10" stroke-width="2" />
                            <g class="arrow-head">
                                <path id="Path_18" data-name="Path 18" d="M2.39,147l8,14,8-14"
                                    transform="translate(-2.39 229.5)" fill="none" stroke="#f6ad57"
                                    stroke-miterlimit="10" stroke-width="2" />

                            </g>
                        </g>
                </svg>
            </a>

        </div>
        <div class="col-lg-9 outer-container">

            <div class="bg_image image-container"
                style="background:url(<?php echo $champs_customs['image_en-tete']['url']; ?>) no-repeat;background-size:cover;height: 80vh; width: 100%;display: flex;flex-direction: column;justify-content: center;">

                <h1 class="big_title section-title on-dark"><?php echo $champs_customs['titre_en-tete']; ?>
                    <br><?php echo $champs_customs['titre_en-tete_2']; ?><br><?php echo $champs_customs['titre_en-tete_3']; ?>
                </h1>
                <div class="hidden-lg-up">
                    <a href="" class="logo-cuir"><img src="<?php echo $champs_customs['logo_casteigt']; ?>"
                            alt="Logo cuir Casteigt"></a>
                </div>


            </div>
    </section>

    <section id="a-propos">
        <!-- debut infos -->
        <div class="row">
            <div class="col-lg-9 offset-lg-1 ">
                <div class="bg_image"
                    style="background:url(<?php echo $champs_customs['image_bg_propos']; ?>) no-repeat;background-size:cover;height: 80vh; width: 100%;display: flex;flex-direction: column;justify-content: center; position:relative;">
                    <div class="row col-lg-11 offset-lg-1 absolute-content">
                        <div id="translate-item" class="absolute-left-img">
                            <div class="cuir_logo">
                                <img src="<?php echo $champs_customs['image_propos_1']['url']; ?>"
                                    alt="<?php echo $champs_customs['image_propos_1']['alt']; ?>">
                                <img class="img_cuir_logo"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo_cuir_casteigt.svg"
                                    alt="Logo Cuir Casteigt">
                            </div>
                            <div class="metal_free_logo">
                                <img src="<?php echo $champs_customs['image_propos_2']['url']; ?>"
                                    alt="<?php echo $champs_customs['image_propos_2']['alt']; ?>">
                                <img class="img_cuir_logo"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cuir-sans-metal-1.svg"
                                    alt="Logo Cuir metal free">
                            </div>
                        </div>

                        <div class="absolute-right-text">
                            <h2 class="white_title_text"><?php echo $champs_customs['titre_a_propos']; ?></h2>
                            <?php echo $champs_customs['texte_a_propos']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- fin infos -->

    <section id="cuir-de-saumon">
        <div class="row">
            <div class="grid">
                <div class="static-banner row col-lg-10 offset-lg-1">
                    <h2 class="white_title_text"><?php echo $champs_customs['titre_cuir']; ?></h2>
                    <h2 class="white_title_text"><?php echo $champs_customs['titre_cuir_2']; ?></h2>
                    <?php echo $champs_customs['texte_cuir']; ?>
                    <a class="dark-button-slider"
                        href="<?php echo $champs_customs['liste_de_produits']; ?>"><?php echo $champs_customs['titre_lien']; ?></a>
                </div>
                <?php foreach ($champs_customs['repeteur_images_cuir'] as $cuir) { ?>
                <?php $image = get_sub_field('image'); ?>
                <img src="<?php echo $cuir['image']['url']; ?>"
                    class="grid-item <?php echo $cuir['class_css_for_masonry']; ?>"
                    alt="<?php echo $cuir['image']['alt']; ?>">
                <?php } ?>
            </div>
        </div>
    </section>


    <section id="mission">
        <!-- debut infos -->
        <div class="row">
            <div class="col-lg-9 offset-lg-2">
                <div class="bg_image"
                    style="background:url(<?php echo $champs_customs['image_bg_mission']; ?>) no-repeat;background-size:cover;height: 80vh; width: 100%;display: flex;flex-direction: column;justify-content: center; position:relative;">
                    <div class="row col-lg-11 offset-lg-1 absolute-content">
                        <div class="absolute-left-text">
                            <h2 class="white_title_text"><?php echo $champs_customs['titre_mission']; ?></h2>
                            <?php echo $champs_customs['texte_mission']; ?>
                        </div>

                        <div id="translate-item2" class="absolute-right-img">
                            <div class="grid grid-two">
                                <?php foreach ($champs_customs['repeteur_images_mission'] as $mission) { ?> <img
                                    src="<?php echo $mission['image']['url']; ?>"
                                    class="grid-item <?php echo $mission['class_css_for_masonry']; ?>"
                                    alt="<?php echo $mission['image']['alt']; ?>">
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- fin infos -->

    <section id="communaute">
        <div class="row">
            <div class="col-lg-12">
                <div class="bg_image"
                    style="background:url(<?php echo $champs_customs['image_bg_communaute']; ?>) no-repeat;background-size:cover;height: 50vh; width: 100%;display: flex;flex-direction: column;justify-content: center;">


                    <div class="static-banner row col-lg-10 offset-lg-1">
                        <h2 class="white_title_text"><?php echo $champs_customs['titre_communaute']; ?></h2>
                        <h2 class="white_title_text"><?php echo $champs_customs['titre_communaute_2']; ?></h2>
                        <?php echo $champs_customs['texte_communaute']; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>