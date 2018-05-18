<?php
get_header();
$categories = get_the_category();
?>
	<div class="grid-x cell medium-10 medium-offset-1 small-12 main-content">
		<aside class="cell medium-3 sidebar sidebar-right grid-y">
			<?php
			get_template_part( 'template-parts/sidebar-right' );
			get_sidebar( 'right_sidebar' );
			?>
		</aside>
		<div class="cell medium-6 single-post grid-x">
			<h2><?= the_title(); ?></h2>
			<div class="single-meta grid-x cell medium-12">
				<div class="cell small-4"><i class="fa fa-user"></i> <?php the_author() ?></div>
				<div class="cell small-4"><i class="fa fa-calendar"></i> <?= get_the_date() ?></div>
				<div class="telegram-share cell small-4">
					<a title="اشتراک در تلگرام" href="https://telegram.me/share/url?url=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-telegram"></i>  اشتراک <span class="hide-for-medium-only">گذاری در تلگرام</span> </a>
				</div>
			</div>
			<div class="cell medium-12 featured-image">
				<img src="<?= get_the_post_thumbnail_url() ?>">
			</div>
			<p><?php the_content(); ?></p>
			<hr>
			<div class="tags cell medium-12">
				<i class="fa fa-tags"></i> <?php the_tags(__('برچسب ها: ', 'nokhbe'), ' ') ?>
			</div>
			<div class="categories cell medium-12">
				<i class="fa fa-list-ul"></i>
				<?php
                _e( 'دسته بندی ها: ', 'nokhbe' );
				foreach ($categories as $category) {
					?>
					 <a href="<?= get_category_link($category->term_id)?>"> <?= $category->name ?> </a>
					<?php
				}
				?>
			</div>
			<hr>
			<?php
			if ( comments_open() ) :
				comments_template();
			endif;
			?>
		</div>
		<aside class="cell medium-3 sidebar sidebar-left grid-y">
			<?php
			get_template_part('template-parts/sidebar-left');
			get_template_part('template-parts/sidebar-ads');
			?>
		</aside>
	</div>
<?php
get_footer();
