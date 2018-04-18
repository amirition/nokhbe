<?php
$first_posts = new WP_Query( array(
	'cat'                       =>  get_theme_mod( 'rsidebar1_cat' ),
    'posts_per_page'            =>  5
));

$second_posts = new WP_Query( array(
	'cat'                       =>  get_theme_mod( 'rsidebar2_cat' ),
	'posts_per_page'            =>  5
));

$third_posts = new WP_Query(array(
	'cat'                       =>  get_theme_mod('rsidebar3_cat' ),
	'posts_per_page'            =>  5
));
?>
<div class="sidebar-category grid-x">

    <h2 class="cell small-12"><?= get_cat_name(intval(get_theme_mod( 'rsidebar1_cat' ))); ?> </h2>
    <ul class="menu vertical">
        <?php
        if ($first_posts->have_posts()) {
            while($first_posts->have_posts()){
                $first_posts->the_post();
                ?>
                <li><a href="<?php the_permalink() ?>"><?= the_title() ?></a></li>
                <?php
            }
        }
        wp_reset_postdata();
        ?>
    </ul>
</div>

<div class="sidebar-category grid-x">
    <h2 class="cell small-12"><?= get_cat_name(intval(get_theme_mod('rsidebar2_cat'))) ?></h2>
    <ul class="menu vertical">
		<?php
		if ($second_posts->have_posts()) {
			while($second_posts->have_posts()){
				$second_posts->the_post();
				?>
                <li><a href="<?php the_permalink() ?>"><?= the_title() ?></a></li>
				<?php
			}
		}
		wp_reset_postdata();
		?>
    </ul>
</div>

<div class="sidebar-category grid-x">
    <h2 class="cell small-12"><?= get_cat_name(intval(get_theme_mod('rsidebar3_cat'))) ?></h2>
    <ul class="menu vertical">
		<?php
		if ($third_posts->have_posts()) {
			while($third_posts->have_posts()){
				$third_posts->the_post();
				?>
                <li><a href="<?php the_permalink() ?>"><?= the_title() ?></a></li>
				<?php
			}
		}
		wp_reset_postdata();
		?>
    </ul>
</div>

