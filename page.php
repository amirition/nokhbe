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
        <div class="cell medium-9 single-post single-page grid-y">
            <h2 class="cell"><?php the_title(); ?></h2>
	        <?php if ( has_post_thumbnail() ) {
		        ?>
                <div class="cell medium-12">
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url()) ?>">
                </div>
	        <?php } ?>
            <p class="cell"><?php the_content(); ?></p>
            <hr>
			<?php
			if ( comments_open() ) :
				comments_template();
			endif;
			?>
        </div>
    </div>
<?php
get_footer();
