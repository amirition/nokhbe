<?php
$gallery_posts = new WP_Query(array(
	'cat'                       =>  get_theme_mod('lsidebar_cat'),
	'posts_per_page'            =>  5
));
if ($gallery_posts->have_posts()){
	while($gallery_posts->have_posts()){
		$gallery_posts->the_post();
		?>
		<div class="sidebar-article grid-x">
			<figure>
				<img src="<?= get_the_post_thumbnail_url() ?>">
				<div class="sidebar-overlay grid-x">
					<a href="<?php the_permalink() ?>"><i class="fa fa-2x fa-search"></i> </a>
				</div>
			</figure>
			<a href="<?php the_permalink(); ?>"><h1><?= the_title() ?></h1></a>
		</div>
		<?php
	}
}
