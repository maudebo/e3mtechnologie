<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package e3m
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MF7549D');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.typekit.net/wgf4xqq.css">
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <meta name="msapplication-TileColor" content="#eb942b">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
    <meta name="theme-color" content="#eb942b">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MF7549D" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


</head>

<body <?php body_class(); ?>>


    <header id="masthead top" class="site-header">


        <div class="row col-lg-12 hidden-md-down row-header">
            <?php include(locate_template('includes/menu/logo-header.php')); ?>
            <?php include(locate_template('includes/menu/menu-desktop.php')); ?>

            <div class="sociaux col-lg-1">
                <ul class="social">
                    <?php if (have_rows('repeteur_sociaux', 'options')): ?>

                    <?php while (have_rows('repeteur_sociaux', 'options')): the_row(); ?>
                    <li>
                        <a href="<?php the_sub_field('url_sociaux'); ?>" target="_blank"><img
                                src="<?php the_sub_field('icones_sociaux'); ?>" alt="logo réseaux sociaux" /></a>
                    </li>
                    <?php endwhile; ?>

                    <?php endif; ?>

                </ul>
            </div>
        </div>
        <div class="row col-lg-12 row-header-mobile hidden-lg-up">
            <?php include(locate_template('includes/menu/menu-mobile.php')); ?>

        </div>
    </header><!-- #masthead -->