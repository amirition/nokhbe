<?php

/* Includes */
// Theme options
include 'include/customizer.php';
// Get foundation frameworks dropdown menus to work
include 'include/menu-walker.php';

//Register Styles and Scripts
function nk_enqueue_scripts()
{
    if (is_rtl()) {
        wp_enqueue_style('foundation', get_template_directory_uri() . '/assets/css/foundation-rtl.min.css');
    } else {
        wp_enqueue_style('open_sans', 'https://fonts.googleapis.com/css?family=Open+Sans');
        wp_enqueue_style('lato', 'https://fonts.googleapis.com/css?family=Lato:700');
        wp_enqueue_style('foundation', get_template_directory_uri() . '/assets/css/foundation.min.css');
    }
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style('main_style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('custom_style', get_template_directory_uri() . '/custom.css');

    // Register Scripts
    wp_register_script('foundation', get_template_directory_uri() . '/assets/js/foundation.min.js');
    wp_register_script('main', get_template_directory_uri() . '/assets/js/app.js');
    wp_register_script('what-input', get_template_directory_uri() . '/assets/js/what-input.js');

    //Enqueue Scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('foundation');
    wp_enqueue_script('what-input');
    wp_enqueue_script('main');
    if (is_singular()) {
        wp_enqueue_script("comment-reply");
    }
}

add_action('wp_enqueue_scripts', 'nk_enqueue_scripts');

if (!isset($content_width)) $content_width = 900;
//Theme Initial Setup
function nk_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('custom-header');
    load_theme_textdomain('nokhbe', get_template_directory() . '/languages');
}

add_action('after_setup_theme', 'nk_setup');

// Register Sidebars
function nk_register_widgets()
{
    register_sidebar(array(
        'name' => __('سایدبار راست', 'nokhbe'),
        'id' => 'right_sidebar',
        'description' => __('سایدبار ستون سمت راست صفحه اصلی و مطالب', 'nokhbe'),
        'class' => 'right-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));

    register_sidebars(3, array(
        'name' => __('ناحیه %d فوتر', 'nokhbe'),
        'id' => 'footer',
        'class' => 'footer-widgets',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));

}
add_action('widgets_init', 'nk_register_widgets');

// Registering Admin Styles
function nk_admin()
{
    add_action('admin_enqueue_scripts', 'nk_admin_enqueue');
}

function nk_admin_enqueue()
{
    if (!isset($_GET['page']) || $_GET['page'] != 'nokhbe_options') {
        return;
    }
}

add_action('admin_init', 'nk_admin');

// Register Top and Main menus
function nk_register_menus()
{
    register_nav_menus(array(
        'top-menu' => __('منوی بالایی', 'nokhbe'),
        'main-menu' => __('منوی اصلی', 'nokhbe')
    ));
}

add_action('init', 'nk_register_menus');

// Filter the Excerpt to 20 words
function nk_custom_excerpt_length($length)
{
    return 20;
}

add_filter('excerpt_length', 'nk_custom_excerpt_length', 999);

// Filter the "read more" string
function nk_excerpt_more($more)
{
    return '...';
}

add_filter('excerpt_more', 'nk_excerpt_more');

// Enqueue customizer Style
function nk_customizer_styles()
{
    $theme_defaults = nk_sane_defaults();
    ?>
    <style>
        .sidebar-category:first-child h2 {
            background: <?php echo get_theme_mod('nk_rsidebar1_color', $theme_defaults["nk_rsidebar1_color"]) ?>;
        }

        .sidebar-category:nth-child(2) h2 {
            background: <?php echo get_theme_mod('nk_rsidebar2_color', $theme_defaults["nk_rsidebar2_color"]) ?>;
        }

        .sidebar-category:nth-child(3) h2 {
            background: <?php echo get_theme_mod('nk_rsidebar3_color', $theme_defaults["nk_rsidebar3_color"]) ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'nk_customizer_styles', 10, 2);

// Modify title with its own filter
function nk_title_tag( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
        return $title;

    // Add the site name.
    $title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'برگه ی %s', 'nokhbe' ), max( $paged, $page ) );

    return $title;
}
add_filter( 'wp_title', 'nk_title_tag', 10, 2 );

// Using defaults for customizer
function nk_sane_defaults () {
    $defaults = array(
        'nk_rsidebar1_color'            =>  '#d24d57',
        'nk_rsidebar2_color'            =>  '#875f9a',
        'nk_rsidebar3_color'            =>  '#26a65b',
        'nk_lsidebar_link'              =>  '#',
        'nk_lsidebar_img'               =>  get_template_directory_uri() . '/img/sidebar-ad.jpg'
    );
    return apply_filters( 'nk_sane_defaults', $defaults );
}