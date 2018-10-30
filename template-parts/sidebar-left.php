<?php
/*
 * Show last posts from a category with featured image
 */
if ( get_theme_mod( 'nokhbe_lsidebar_cat' ) ) {

	$nokhbe_gallery_posts = new WP_Query( array(
		'cat'            => get_theme_mod( 'nokhbe_lsidebar_cat' ),
		'posts_per_page' => 5
	) );
	if ( $nokhbe_gallery_posts->have_posts() ) {
		while ( $nokhbe_gallery_posts->have_posts() ) {
			$nokhbe_gallery_posts->the_post();
			?>
            <div class="sidebar-article grid-x">
                <figure>
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url()) ?>">
                    <div class="sidebar-overlay grid-x">
                        <a href="<?php the_permalink() ?>"><i class="fa fa-2x fa-search"></i> </a>
                    </div>
                </figure>
                <a href="<?php the_permalink(); ?>"><h1><?php the_title() ?></h1></a>
            </div>
			<?php
		}
	}

}
wp_reset_postdata();