<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= get_bloginfo('name') . ' | ' . get_bloginfo('description') ?> </title>
	<?php wp_head(); ?>
</head>
<body class="grid-x">
    <div class="site-title grid-x cell medium-10 medium-offset-1 center">
        <a href="<?= get_bloginfo('url'); ?>">
            <h1><?= get_bloginfo( 'name' ); ?> </h1>
        </a>
    </div>
    <header class="top-bar grid-x cell medium-10 medium-offset-1 top-menu">
        <div class="top-bar-right top-menu cell medium-5 small-12">
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
        </div>
        <div class="top-bar-left cell medium-7">
            <ul class="menu horizontal text-left">
                <?php if (get_theme_mod('telegram')) {
                    ?>
                    <li><a href="<?= "http://telegram.me/" . get_theme_mod('telegram')?>"><i class="fa fa-telegram"></i> </a> </li>
                <?php } if (get_theme_mod('instagram')) {
                    ?>
                    <li><a href="<?= "http://instagram.com/" . get_theme_mod("instagram") ?>"><i class="fa fa-instagram"></i> </a> </li>
                <?php } if (get_theme_mod('twitter')) {
                    ?>
                    <li><a href="<?= "http://twitter.com/" . get_theme_mod("twitter") ?>"><i class="fa fa-twitter"></i> </a> </li>
                <?php } if (get_theme_mod('facebook')) {
                    ?>
                <li><a href="<?= "http://facebook.com/" . get_theme_mod("facebook") ?>"><i class="fa fa-facebook"></i> </a> </li>
                <?php } ?>
            </ul>
        </div>
    </header>
    <?php if (get_theme_mod('featured_cat')) {
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