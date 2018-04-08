<?php

// Includes
include 'include/options.php';
include 'include/options-page.php';

//Register Styles and Scripts
function enqueue_scripts() {
	wp_enqueue_style('foundation', get_template_directory_uri() . '/css/foundation.min.css');
	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style('main_style', get_template_directory_uri() . '/style.css');

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/foundation.min.js' );
	wp_enqueue_script( 'what-input', get_template_directory_uri() . '/js/what-input.js' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

//Theme Initial Setup
function nokhbe_setup() {
	add_theme_support( 'thumbnails', 'widgets' );
}

add_action( 'after_setup_theme', 'nokhbe_setup' );

// Register Sidebars

function register_nk_widgets () {
	register_sidebar(array(
		'name'          =>  __( 'سایدبار راست', 'nokhbe' ),
		'id'            =>  'right_sidebar',
		'description'   =>  __( 'سایدبار ستون سمت راست صفحه اصلی و مطالب' )
	));

	register_sidebar( array(
		'name'          =>  __( 'سایدبار فوتر', 'nokhbe' ),
		'id'            =>  'footer_sidebar',
		'description'   =>  __( 'نمایش ابزارک ها در فوتر', 'nokhbe' )
	) );
}
add_action( 'widgets_init', 'register_nk_widgets' );


// Register Admin Menus
function nk_admin_menus () {
	add_menu_page(
		'تنظیمات چوسته نخبه',
		'تنظیمات نخبه',
		'edit_theme_options',
		'nokhbe_options',
		'nokhbe_theme_options'
	);
}
add_action( 'admin_menu', 'nk_admin_menus' );

// Registering Admin Styles
function nk_admin() {
	add_action( 'admin_enqueue_scripts', 'nk_admin_enqueue' );
}
function nk_admin_enqueue() {
	if(!isset($_GET['page']) || $_GET['page'] != 'nokhbe_options') {
		return;
	}
	wp_enqueue_style('foundation', get_template_directory_uri() . '/css/foundation.min.css');
	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style('main_style', get_template_directory_uri() . '/style.css');
}
add_action( 'admin_init', 'nk_admin' );