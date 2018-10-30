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
        <div class="cell medium-6 index-posts archive-page">
            <h2 class="cell medium-12 archive-title"><?php
				$nokhbe_category = get_the_category();
				printf( __( 'نتایج جستجو برای: %s', 'nokhbe' ), get_search_query() );
				?>
            </h2>
			<?php if ( have_posts() ) {
				get_template_part( 'template-parts/single-post' );
			} else {
				?>
                <p class="alert text-center"> <?php echo __( 'نتیجه ای پیدا نشد. ', 'nokhbe' ) ?></p>
				<?php
			}
			?>
        </div>
        <aside class="cell medium-3 sidebar sidebar-left grid-y">
			<?php
			get_template_part( 'template-parts/sidebar-left' );
			get_template_part( 'template-parts/sidebar-ads' );
			?>

        </aside>
    </div>
<?php
get_footer();
