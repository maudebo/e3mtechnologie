<?php

/**
 * e3m functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package e3m
 */
if (!function_exists('e3m_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function e3m_setup() {
        /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on e3m, use a find and replace
		 * to change 'e3m' to the name of your theme in all the template files.
		 */
        load_theme_textdomain('e3m', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
        add_theme_support('title-tag');
        /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-principal' => esc_html__('Primary Menu', 'e3m'),
        ));
        /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('e3m_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'e3m_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function e3m_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('e3m_content_width', 640);
}
add_action('after_setup_theme', 'e3m_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function e3m_widgets_init() {

    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'e3m'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'e3m'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'e3m_widgets_init');

/**
 * Enqueue scripts and styles.
 */


function theme_style() {

    wp_enqueue_style('e3m-style', get_stylesheet_uri());

    wp_enqueue_style('slick_css', get_template_directory_uri() . '/assets/css/slick.min.css');

    wp_enqueue_style('slick_theme_css', get_template_directory_uri() . '/assets/css/slick-theme.min.css');

    wp_enqueue_style('bootstrap_css', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css", "anonymous");


    wp_enqueue_style('theme_css', get_template_directory_uri() . '/assets/css/theme.min.css');
}
add_action('wp_enqueue_scripts', 'theme_style');


function e3m_scripts() {

    wp_enqueue_script('jquery');

    wp_enqueue_script('jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js', array('jquery'), '1.8.6');


    wp_enqueue_script('jquery_js', "https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js");


    ////// ANIMATION SLIDER

    wp_enqueue_script('slick_js', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.0.0');
    ////// ANIMATION SLIDER


    wp_enqueue_script('masonry_js', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array('jquery'), '1.0.0');

    wp_enqueue_script('tether_js', "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js", array('jquery'), '1.0.0');

    wp_enqueue_script('popper_js', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js", array('jquery'), '1.0.0');


    ////// ANIMATION scroll

    wp_enqueue_script('scrollme_js', get_template_directory_uri() . '/assets/js/jquery.scrollme.min.js', array('jquery'), '1.0.0');
    ////// ANIMATION scroll


    wp_enqueue_script('bootstrap_js', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js", array('jquery'), '1.0.0');
    ////// BOOTSTRAP

    wp_enqueue_script('theme_js', get_template_directory_uri() . '/assets/js/theme.min.js', array('jquery'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'e3m_scripts');

/**
 * Add Defer & Async Attributes to WordPress Scripts
 * @author Matthew Horne - http://matthewhorne.me/defer-async-wordpress-scripts/
 */
/**
 * Defer
 */
function add_defer_attribute($tag, $handle) {
    $scripts_to_defer = array('');
    foreach ($scripts_to_defer as $defer_script) {
        if ($defer_script !== $handle) return $tag;
        return str_replace(' src', ' defer="defer" src', $tag);
    }
    return $tag;
}

add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}


function truncate($text, $length, $suffix = '&hellip;', $isHTML = true, $trim_word = false) {
    $i          = 0;
    $simpleTags = array(
        'br' => true,
        'hr' => true,
        'input' => true,
        'image' => true,
        'link' => true,
        'meta' => true
    );
    $tags       = array();
    if ($isHTML) {
        preg_match_all('/<[^>]+>([^<]*)/', $text, $m, PREG_OFFSET_CAPTURE | PREG_SET_ORDER);
        foreach ($m as $o) {
            if ($o[0][1] - $i >= $length)
                break;
            $t = substr(strtok($o[0][0], " \t\n\r\0\x0B>"), 1);
            // test if the tag is unpaired, then we mustn't save them
            if ($t[0] != '/' && (!isset($simpleTags[$t])))
                $tags[] = $t;
            elseif (end($tags) == substr($t, 1))
                array_pop($tags);
            $i += $o[1][1] - $o[0][1];
        }
    }

    // output without closing tags
    $output  = substr($text, 0, $length = min(strlen($text), $length + $i));
    // closing tags
    $output2 = (count($tags = array_reverse($tags)) ? '</' . implode('></', $tags) . '>' : '');

    // if the lenght of the text is already lesser than the length wanted
    if (strlen($text) > $length) {
        if (!$trim_word) {
            // Find last space or HTML tag (solving problem with last space in HTML tag eg. <span class="new">)
            $splitted  = preg_split('/<.*>| /', $output, -1, PREG_SPLIT_OFFSET_CAPTURE);
            $last_item = end($splitted);
            $pos       = end($last_item);
        } else {
            // Find last HTML tag
            $splitted  = preg_split('/<.*>| /', $output, -1, PREG_SPLIT_OFFSET_CAPTURE);
            $last_item = end($splitted);
            $pos       = end($last_item);
        }
        // Append closing tags to output
        $output .= $output2;
        // Get everything until last space
        $one = substr($output, 0, $pos);

        // Get the rest
        $two = substr($output, $pos, (strlen($output) - $pos));

        // Extract all tags from the last bit
        preg_match_all('/<(.*?)>/s', $two, $tags);

        $one .= $suffix;

        // Re-attach tags
        $output = $one . implode($tags[0]);
    }

    //added to remove  unnecessary closure
    $output = str_replace('</!-->', '', $output);

    return $output;
}


// *===============================================
// Permettre l'ajout de SVG dans les médias
// https://css-tricks.com/snippets/wordpress/allow-svg-through-wordpress-media-uploader/
// *===============================================

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');


/*------------------------------------*\
	MENUS
\*------------------------------------*/


if (function_exists('register_nav_menus')) {
    register_nav_menu('primary_menu', 'Primary Menu');
    register_nav_menu('secondary_menu', 'Secondary Menu');
    register_nav_menu('menu_langue', 'Menu langue');
    register_nav_menu('menu_mobile', 'Menu mobile');
}

// Création de l'interface admin pour le client
function my_remove_menu_pages() {
    $user_id = get_current_user_id();
    if ($user_id == 2) {
        global $submenu;

        // Menus

        remove_menu_page('edit.php');  //Section Articles
        remove_menu_page('edit-comments.php'); //Section Commentaires
        remove_menu_page('link-manager.php'); //Section Liens
        remove_menu_page('themes.php');  //Section Apparence
        remove_menu_page('plugins.php');  //Section Extensions
        remove_menu_page('users.php');    //Section Utilisateurs
        remove_menu_page('tools.php');  //Section Outils
        remove_menu_page('options-general.php'); //Section Reglages
        remove_menu_page('cptui_main_menu'); //Section CPT UI
        remove_menu_page('wpcf7'); // Réglages du Contact Form 7
        remove_menu_page('wpseo_dashboard'); // Wordpress SEO
        remove_menu_page('edit.php?post_type=acf-field-group'); //Section ACFwpseo_dashboard



        remove_menu_page('edit.php?post_type=html5-blank'); // Enlever l'onglet 'Article personnalisé'
        remove_submenu_page('index.php', 'update-core.php'); //Mises à jour
        remove_submenu_page('index.php', 'relevanssi/relevanssi.php'); //Users search

?>
        <style type="text/css">
            #toplevel_page_sitepress-multilingual-cms-menu-languages {
                display: none;
            }
        </style>
    <?php
    }
}

function wps_admin_bar() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo'); // Cette ligne désactive le logo WP et le menu associé
    $wp_admin_bar->remove_menu('comments'); // Cette ligne désactive l'icon des commentaires
    $wp_admin_bar->remove_menu('new-user'); // Cette ligne désactive le lien ajouter un utilisateur
    $wp_admin_bar->remove_menu('updates');
    //    $wp_admin_bar->remove_menu('new-content');
    remove_action('admin_notices', 'update_nag', 3);

    if (!current_user_can('update_core')) {
        $wp_admin_bar->remove_menu('edit');
    }
}

// Admin Custom (2 prochaines lignes)
add_action('admin_menu', 'my_remove_menu_pages', 999);
//////Register nav menu
/*------------------------------------*\
	Personnalisation de l'écran login
\*------------------------------------*/

function custom_login_demarrage() { ?>

    <style type="text/css">
        body {
            background: #000000 !important;
        }

        #login h1 a,
        .login h1 a {
            background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.jpg');
            background-size: 275px;
            width: 275px;
            height: 150px;
        }

        .login form {
            background: #ff0000 !important;
            box-shadow: none !important;
            -webkit-box-shadow: none !important;
        }

        .wp-core-ui .button-primary {
            background: #707070 !important;
            border: none !important;
            box-shadow: none !important;
            text-shadow: none !important;
        }

        .login #backtoblog a,
        .login #nav a {
            color: #ff0000 !important;
        }

        .login label {
            color: #000 !important;
            font-size: 0.8rem !important;
            letter-spacing: 0.03rem;
            padding: 5px 0 !important;
        }

        .login #backtoblog a,
        .login #nav a {
            color: #707070 !important;
        }

        .wp-core-ui .button-group.button-large .button,
        .wp-core-ui .button.button-large {
            background: #fff !important;
            color: #000 !important;
        }

        .login form .input,
        .login input[type=text] {
            padding: 10px !important;
        }

        .login form .input,
        .login form input[type=checkbox],
        .login input[type=text] {
            background: #fff !important;
        }
    </style>

<?php }

add_action('login_enqueue_scripts', 'custom_login_demarrage');

///// CPT Exemple

// function exemple()
// {
//     register_post_type('Exemples',
//         array(
//             'labels' => array(
//                 'name' => __('Exemples'),
//                 'singular_name' => __('Exemple'),
//                 'add_new' => __('Ajouter un exem nouvel exemple'),
//                 'edit' => __('Changer'),
//                 'edit_item' => __("Modifier l'exemple"),
//                 'new_item' => __('Nouvel exemple'),
//                 'view' => __('Voir'),
//                 'view_item' => __("Voir la fiche de l'exemple"),
//                 'search_items' => __('Rechercher un exemple'),
//                 'not_found' => __('Aucun exemple'),
//                 'not_found_in_trash' => __('Aucun exemple trouvé dans la corbeille')
//             ),
//             'public' => true,
//             'publicly_queryable' => true,
//             'hierarchical' => false,
//             'has_archive' => false,
//             'menu_icon' => "dashicons-media-text",
//             'rewrite' => array('slug' => 'exemple', 'with_front' => false),
//             'menu_position' => 30,
//             'taxonomies' => array('post_tag'),
//             'supports' => array('title', 'editor', 'thumbnail'),
//             'can_export' => true,
//         ));
// }

// add_action('init', 'exemple');

// // ============================================================================
// // Créer une taxonomie

// function create_exemple_tax()
// {
//     /* Créer Taxonomie */
//     $args = array(
//         'label' => __('Catégorie exemple'),
//         'has_archive' => true,
//         'hierarchical' => true,
//     );
//     register_taxonomy('categorie-exemple', 'nomducptassocie', $args);
// }

// add_action('init', 'create_exemple_tax');


if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Options générales',
        'menu_title' => 'Options générales',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}
