<?php
/*
 * Show 3 sections, in each of these section user selected a category in the customizer and
 * also a background color for the title.
 */
$nk_first_posts = new WP_Query( array(
	'cat'            => get_theme_mod( 'nk_rsidebar1_cat' ),
	'posts_per_page' => 5
) );

$nk_second_posts = new WP_Query( array(
	'cat'            => get_theme_mod( 'nk_rsidebar2_cat' ),
	'posts_per_page' => 5
) );

$nk_third_posts = new WP_Query( array(
	'cat'            => get_theme_mod( 'nk_rsidebar3_cat' ),
	'posts_per_page' => 5
) );

if ( get_theme_mod( 'nk_rsidebar1_cat' ) ) {
	?>
    <div class="sidebar-category grid-x">

        <h2 class="cell small-12"><?php echo get_cat_name( intval( get_theme_mod( 'nk_rsidebar1_cat' ) ) ); ?> </h2>
        <ul class="menu vertical">
			<?php
			if ( $nk_first_posts->have_posts() ) {
				while ( $nk_first_posts->have_posts() ) {
					$nk_first_posts->the_post();
					?>
                    <li><a href="<?php the_permalink() ?>"><?php echo the_title() ?></a></li>
					<?php
				}
			} else {
				echo "";
			}
			wp_reset_postdata();
			?>
        </ul>
    </div>
	<?php
}

if ( get_theme_mod( 'nk_rsidebar2_cat' ) ) {
	?>
    <div class="sidebar-category grid-x">
        <h2 class="cell small-12"><?php echo get_cat_name( intval( get_theme_mod( 'nk_rsidebar2_cat' ) ) ) ?></h2>
        <ul class="menu vertical">
			<?php
			if ( $nk_second_posts->have_posts() ) {
				while ( $nk_second_posts->have_posts() ) {
					$nk_second_posts->the_post();
					?>
                    <li><a href="<?php the_permalink() ?>"><?php echo the_title() ?></a></li>
					<?php
				}
			} else {
				echo "";
			}
			wp_reset_postdata();
			?>
        </ul>
    </div>
	<?php
}
if ( get_theme_mod( 'rsidebar3_cat' ) ) {
	?>
    <div class="sidebar-category grid-x">
        <h2 class="cell small-12"><?php echo get_cat_name( intval( get_theme_mod( 'nk_rsidebar3_cat' ) ) ) ?></h2>
        <ul class="menu vertical">
			<?php
			if ( $nk_third_posts->have_posts() ) {
				while ( $nk_third_posts->have_posts() ) {
					$nk_third_posts->the_post();
					?>
                    <li><a href="<?php the_permalink() ?>"><?php echo the_title() ?></a></li>
					<?php
				}
			}
			wp_reset_postdata();
			?>
        </ul>
    </div>
	<?php
}
