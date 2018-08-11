<!DOCTYPE html>
<html lang="<?php echo get_locale(); ?> " <?php language_attributes(); ?> class="no-js no-svg" dir="<?php echo is_rtl() ? 'rtl' : 'ltr'; ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class('grid-x'); ?>>
    <div class="site-title grid-x cell medium-10 medium-offset-1 center">
        <a href="<?php echo esc_url( home_url() ); ?>">
            <h1><?php echo get_bloginfo( 'name' ); ?> </h1>
        </a>
    </div>
    <header class="top-bar grid-x cell medium-10 medium-offset-1 top-menu">
        <nav class="top-bar-left top-menu cell medium-5 small-12 grid-x">
	        <?php
	        wp_nav_menu(array(
		        'theme_container'                   =>  'top-menu',
		        'container'                         =>  false,
		        'menu_class'                        =>  'menu dropdown',
		        'items_wrap'                        =>  '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
		        'walker'                            =>  new menu_walker(),
		        'fallback_cb'                       =>  'f6_drill_menu_fallback'
	        ));
	        ?>
        </nav>

    </header>
    <?php if (get_theme_mod('nk_featured_cat')) {
        ?>
        <div class="grid-x grid-margin-x cell medium-10 medium-offset-1 small-12 features">
            <?php get_template_part('template-parts/header-loop'); ?>
        </div>
    <?php } ?>
<nav class="top-bar grid-x cell medium-10 medium-offset-1 small-12 secondary-menu">
	<?php
	wp_nav_menu(array(
		'theme_container'                   =>  'top-menu',
		'container'                         =>  false,
		'menu_class'                        =>  'menu dropdown',
		'items_wrap'                        =>  '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
		'walker'                            =>  new menu_walker(),
		'fallback_cb'                       =>  'f6_drill_menu_fallback'
	));
	?>
</nav>