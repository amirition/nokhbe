<?php
/*
 * This is the article part that shows in the featured section of the header.
 */

// Select posts with the featured category that user has selected.
$nokhbe_featured_posts = new WP_Query( array(
	'cat'                   =>  get_theme_mod("nokhbe_featured_cat"),
    'posts_per_page'        =>  4
));

if ($nokhbe_featured_posts->have_posts()) {
	while($nokhbe_featured_posts->have_posts()) {
		$nokhbe_featured_posts->the_post();
		?>
		<div class="grid-y cell large-3 medium-6 card header-article">
			<img src="<?php echo esc_url(get_the_post_thumbnail_url()) ?>">
			<a href="<?php the_permalink()?>">
				<h1><?php the_title() ?></h1>
				<div class="feature-meta">
					<span><i class="fa fa-calendar"></i><?php echo get_the_date() ?></span>
					<span>
                        <i class="fa fa-comment"></i>
                        <?php
                        $nokhbe_comments = get_comments_number();
                        if($nokhbe_comments > 0) {
	                        echo sprintf( _n('%s دیدگاه', '%s دیدگاه', $nokhbe_comments, 'nokhbe'), $nokhbe_comments );
                        }
                        else {
                            _e( 'بدون دیدگاه', 'nokhbe' );
                        }
                        ?>
                    </span>
				</div>
			</a>

		</div>
		<?php
	}
}
wp_reset_postdata();
?>