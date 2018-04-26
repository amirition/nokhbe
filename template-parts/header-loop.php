<?php
$featured_posts = new WP_Query( array(
	'cat'                   =>  get_theme_mod("featured_cat"),
    'posts_per_page'        =>  4
));
if ($featured_posts->have_posts()) {
	while($featured_posts->have_posts()) {
		$featured_posts->the_post();
		?>
		<div class="grid-y cell large-3 medium-6 card header-article">
			<img src="<?= get_the_post_thumbnail_url() ?>">
			<a href="<?php the_permalink()?>">
				<h1><?= the_title() ?></h1>
				<div class="feature-meta">
					<span><i class="fa fa-calendar"></i><?= get_the_date() ?></span>
					<span><i class="fa fa-comment"></i><?= get_comments_number()?>   دیدگاه</span>
				</div>
			</a>

		</div>
		<?php
	}
}
wp_reset_postdata();
?>