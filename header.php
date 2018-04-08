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

        </div>
        <div class="top-bar-left cell medium-7">
            <ul class="menu horizontal text-left">
                <li><a href=""><i class="fa fa-telegram"></i> </a> </li>
                <li><a href=""><i class="fa fa-instagram"></i> </a> </li>
                <li><a href=""><i class="fa fa-twitter"></i> </a> </li>
                <li><a href=""><i class="fa fa-linkedin"></i> </a> </li>
                <li><a href=""><i class="fa fa-facebook"></i> </a> </li>
            </ul>
        </div>
    </header>
    <div class="grid-x grid-margin-x cell medium-10 medium-offset-1 small-12 features">
        <div class="grid-y cell medium-3 card">
            <img src="http://localhost/wp/wp-content/themes/nokhbe/img/demo.jpg">
            <a>
                <h1>عنوان نوشته</h1>
                <div class="feature-meta">
                    <span><i class="fa fa-calendar"></i> تاریخ </span>
                    <span><i class="fa fa-comment"></i>  دیدگاه</span>
                </div>
            </a>

        </div>
        <div class="grid-y cell medium-3 card">
            <img src="http://localhost/wp/wp-content/themes/nokhbe/img/demo.jpg">
            <a>
                <h1>عنوان نوشته</h1>
                <div class="feature-meta">
                    <span><i class="fa fa-calendar"></i> تاریخ </span>
                    <span><i class="fa fa-comment"></i>  دیدگاه</span>
                </div>
            </a>

        </div>
        <div class="grid-y cell medium-3 card">
            <img src="http://localhost/wp/wp-content/themes/nokhbe/img/demo.jpg">
            <a>
                <h1>عنوان نوشته</h1>
                <div class="feature-meta">
                    <span><i class="fa fa-calendar"></i> تاریخ </span>
                    <span><i class="fa fa-comment"></i>  دیدگاه</span>
                </div>
            </a>

        </div>
        <div class="grid-y cell medium-3 card">
            <img src="http://localhost/wp/wp-content/themes/nokhbe/img/demo1.jpg">
            <a>
                <h1>عنوان نوشته</h1>
                <div class="feature-meta">
                    <span><i class="fa fa-calendar"></i> تاریخ </span>
                    <span><i class="fa fa-comment"></i>  دیدگاه</span>
                </div>
            </a>

        </div>
    </div>
<nav class="top-bar grid-x cell medium-10 medium-offset-1 small-12 secondary-menu">
    <ul class="menu horizontal dropdown">
        <li>آیتم </li>
        <li>آیتم </li>
        <li>آیتم </li>
        <li>آیتم </li>
    </ul>
</nav>