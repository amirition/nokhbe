<?php
/*
 * Show 3 sections, in each of these section user selected a category in the customizer and
 * also a background color for the title.
 */
$nokhbe_first_posts = new WP_Query( array(
	'cat'            => get_theme_mod( 'nokhbe_rsidebar1_cat' ),
	'posts_per_page' => 5
) );

$nokhbe_second_posts = new WP_Query( array(
	'cat'            => get_theme_mod( 'nokhbe_rsidebar2_cat' ),
	'posts_per_page' => 5
) );

$nokhbe_third_posts = new WP_Query( array(
	'cat'            => get_theme_mod( 'nokhbe_rsidebar3_cat' ),
	'posts_per_page' => 5
) );

if ( get_theme_mod( 'nokhbe_rsidebar1_cat' ) ) {
	?>
    <div class="sidebar-category grid-x">

        <h2 class="cell small-12"><?php echo get_cat_name( intval( get_theme_mod( 'nokhbe_rsidebar1_cat' ) ) ); ?> </h2>
        <ul class="menu vertical">
			<?php
			if ( $nokhbe_first_posts->have_posts() ) {
				while ( $nokhbe_first_posts->have_posts() ) {
					$nokhbe_first_posts->the_post();
					?>
                    <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
					<?php
				}
                wp_reset_postdata();
			}
			else {
				echo "";
			}
			?>
        </ul>
    </div>
	<?php
}

if ( get_theme_mod( 'nokhbe_rsidebar2_cat' ) ) {
	?>
    <div class="sidebar-category grid-x">
        <h2 class="cell small-12"><?php echo get_cat_name( intval( get_theme_mod( 'nokhbe_rsidebar2_cat' ) ) ) ?></h2>
        <ul class="menu vertical">
			<?php
			if ( $nokhbe_second_posts->have_posts() ) {
				while ( $nokhbe_second_posts->have_posts() ) {
					$nokhbe_second_posts->the_post();
					?>
                    <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
					<?php
				}
                wp_reset_postdata();
			} else {
				echo "";
			}
			?>
        </ul>
    </div>
	<?php
}
if ( get_theme_mod( 'nokhbe_rsidebar3_cat' ) ) {
	?>
    <div class="sidebar-category grid-x">
        <h2 class="cell small-12"><?php echo get_cat_name( intval( get_theme_mod( 'nokhbe_rsidebar3_cat' ) ) ) ?></h2>
        <ul class="menu vertical">
			<?php
			if ( $nokhbe_third_posts->have_posts() ) {
				while ( $nokhbe_third_posts->have_posts() ) {
					$nokhbe_third_posts->the_post();
					?>
                    <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
					<?php
				}
			}
			wp_reset_postdata();
			?>
        </ul>
    </div>
	<?php
}
