<?php

//Register Fonts
function enqueue_scripts() {
	wp_enqueue_style('typicons', get_template_directory_uri() . '/css/typicons.min.css');
	wp_enqueue_style('foundation', get_template_directory_uri() . '/css/foundation.css');
	wp_enqueue_style('main_style', get_template_directory_uri() . '/style.css');
}