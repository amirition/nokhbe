<?php
get_header();
?>

<div class="grid-x cell medium-10 medium-offset-1 small-12 main-content">
    <aside class="cell medium-3 sidebar sidebar-right grid-y">
        <div class="sidebar-category grid-x">
            <h2 class="cell small-12"> عنوان تست </h2>
            <ul class="menu vertical">
                <li><a href="#">این یک تست است </a> </li>
                <li><a href="#">این یک تست است </a> </li>
                <li><a href="#">این یک تست است </a> </li>
                <li><a href="#">این یک تست است </a> </li>
            </ul>
        </div>
        <div class="sidebar-category grid-x">
            <h2 class="cell small-12"> عنوان تست </h2>
            <ul class="menu vertical">
                <li><a href="#">این یک تست است </a> </li>
                <li><a href="#">این یک تست است </a> </li>
                <li><a href="#">این یک تست است </a> </li>
                <li><a href="#">این یک تست است </a> </li>
            </ul>
        </div>
        <div class="sidebar-category grid-x">
            <h2 class="cell small-12"> عنوان تست </h2>
            <ul class="menu vertical">
                <li><a href="#">این یک تست است </a> </li>
                <li><a href="#">این یک تست است </a> </li>
                <li><a href="#">این یک تست است </a> </li>
                <li><a href="#">این یک تست است </a> </li>
            </ul>
        </div>
        <?php get_sidebar( 'right_sidebar' ); ?>
    </aside>
    <div class="cell medium-6">
		<?php
		get_template_part( 'template-parts/index-loop' );
		?>
    </div>
    <aside class="cell medium-3 sidebar sidebar-left grid-y">
        <div class="sidebar-article grid-x">
            <figure>
                <img src="http://localhost/wp/wp-content/themes/nokhbe/img/demo.jpg">
                <div class="sidebar-overlay grid-x">
                    <a href="#"><i class="fa fa-2x fa-search"></i> </a>
                </div>
            </figure>
            <a><h1>عنوان این نوشته </h1></a>
        </div>

        <div class="sidebar-article grid-x">
            <figure>
                <img src="http://localhost/wp/wp-content/themes/nokhbe/img/demo.jpg">
                <div class="sidebar-overlay grid-x">
                    <a href="#"><i class="fa fa-2x fa-search"></i> </a>
                </div>
            </figure>
            <a><h1>عنوان این نوشته </h1></a>
        </div>

        <div class="sidebar-article grid-x">
            <figure>
                <img src="http://localhost/wp/wp-content/themes/nokhbe/img/demo.jpg">
                <div class="sidebar-overlay grid-x">
                    <a href="#"><i class="fa fa-2x fa-search"></i> </a>
                </div>
            </figure>
            <a><h1>عنوان این نوشته </h1></a>
        </div>

    </aside>
</div>
<?php
get_footer();
