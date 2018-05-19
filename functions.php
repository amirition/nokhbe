<?php

// Includes
include 'include/customizer.php';
include 'include/menu-walker.php';

//Register Styles and Scripts
function enqueue_scripts() {
    if ( is_rtl() ) {
	    wp_enqueue_style( 'foundation', get_template_directory_uri() . '/assets/css/foundation-rtl.min.css' );
    }
	else {
        wp_enqueue_style( 'open_sans', 'https://fonts.googleapis.com/css?family=Open+Sans' );
        wp_enqueue_style( 'lato', 'https://fonts.googleapis.com/css?family=Lato:700' );
		wp_enqueue_style( 'foundation', get_template_directory_uri() . '/assets/css/foundation.min.css' );
    }
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'main_style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'custom_style', get_template_directory_uri() . '/custom.css' );

	// Register Scripts
	wp_register_script( 'foundation', get_template_directory_uri() . '/assets/js/foundation.min.js' );
	wp_register_script( 'main', get_template_directory_uri() . '/assets/js/app.js' );
	wp_register_script( 'what-input', get_template_directory_uri() . '/assets/js/what-input.js' );

	//Enqueue Scripts
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'foundation' );
	wp_enqueue_script( 'what-input' );
	wp_enqueue_script( 'main' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

//Theme Initial Setup
function nokhbe_setup() {
	add_theme_support( 'post-thumbnails' );
	load_theme_textdomain( 'nokhbe', get_template_directory() . '/languages' );
}

add_action( 'after_setup_theme', 'nokhbe_setup' );

// Register Sidebars

function register_nk_widgets() {
	register_sidebar( array(
		'name'          => __( 'سایدبار راست', 'nokhbe' ),
		'id'            => 'right_sidebar',
		'description'   => __( 'سایدبار ستون سمت راست صفحه اصلی و مطالب', 'nokhbe' ),
		'class'         => 'right-sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>'
	) );

	register_sidebars( 3, array(
		'name'          => __( 'ناحیه %d فوتر', 'nokhbe' ),
		'id'            => 'footer',
		'class'         => 'footer-widgets',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>'
	) );

}

add_action( 'widgets_init', 'register_nk_widgets' );

// Registering Admin Styles
function nk_admin() {
	add_action( 'admin_enqueue_scripts', 'nk_admin_enqueue' );
}

function nk_admin_enqueue() {
	if ( ! isset( $_GET['page'] ) || $_GET['page'] != 'nokhbe_options' ) {
		return;
	}
}

add_action( 'admin_init', 'nk_admin' );

// Register Top and Main menus
function register_nk_menus() {
	register_nav_menus( array(
		'top-menu'  => __('منوی بالایی', 'nokhbe'),
		'main-menu' => __('منوی اصلی', 'nokhbe')
	) );
}

add_action( 'init', 'register_nk_menus' );

// Filter the Excerpt to 20 words
function nk_custom_excerpt_length( $length ) {
	return 20;
}

add_filter( 'excerpt_length', 'nk_custom_excerpt_length', 999 );

// Filter the "read more" string
function nk_excerpt_more( $more ) {
	return '...';
}

add_filter( 'excerpt_more', 'nk_excerpt_more' );

// Customizer Style things
function register_customizer_styles() {
	?>
    <style>
        .sidebar-category:first-child h2 {
            background: <?= get_theme_mod('rsidebar1_color') ?>;
        }

        .sidebar-category:nth-child(2) h2 {
            background: <?= get_theme_mod('rsidebar2_color') ?>;
        }

        .sidebar-category:nth-child(3) h2 {
            background: <?= get_theme_mod('rsidebar3_color') ?>;
        }
    </style>
	<?php
}

add_action( 'wp_head', 'register_customizer_styles' );

// Show Admin bar
if ( ! is_user_logged_in() ) {
	show_admin_bar( false );
}