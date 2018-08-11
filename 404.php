<?php
get_header();
?>

	<div class="grid-x cell medium-10 medium-offset-1 small-12 main-content">
		<aside class="cell medium-3 sidebar sidebar-right grid-y">
			<?php
			get_template_part( 'template-parts/sidebar-right' );
			get_sidebar( 'right_sidebar' );
			?>
		</aside>
		<div class="cell medium-6 not-found">
			<h2><?php echo __('خطای 404!', 'nokhbe'); ?></h2>
			<p>
				<?php echo __('به نظر میرسد در این صفحه چیزی نیست، آدرس موردنظر یا تغییر کرده است و یا پاک شده است. در هر صورت میتوانید از فیلد جستجو و دکمه های زیر استفاده کنید: ', 'nokhbe') ; ?>
			</p>

			<?php get_search_form(); ?>
			<a href="<?php echo get_site_url() ?>"><button class="button primary"><?php _e( 'صفحه اصلی وبسایت', 'nokhbe' ); ?> </button> </a>
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
