<?php
/*
 * Single article template part that shows on index page, archive pages and ...
 */
$nk_categories = get_the_category();
while(have_posts()) {
    the_post();
    ?>
    <div class="grid-x cell medium-12 grid-margin-x index-main-article">
        <figure class="cell medium-3">
            <?php
            if( has_post_thumbnail() ) {
                ?>
                <img src="<?php echo get_the_post_thumbnail_url() ?>">
                <?php
            }
            else {
                ?>
                <img src="<?php echo get_template_directory_uri() . '/img/thumbnail.png';  ?>">
                <?php
            }
            ?>
        </figure>
        <div class="cell medium-9">
            <a href="<?php the_permalink(); ?>"> <h1 class="cell medium-12"><?php echo the_title() ?> </h1> </a>
            <p class="cell medium-12"><?php the_excerpt() ?></p>
        </div>
        <div class="index-meta cell medium-12 grid-x">
            <span class="cell medium-3 small-4"><i class="fa fa-user"></i> <?php the_author() ?> </span>
            <span class="cell medium-3 hide-for-small-only"><i class="fa fa-list"></i> <?php echo $nk_categories[0]->cat_name ?></span>
            <span class="cell medium-3 small-4">
                <i class="fa fa-comment"></i>
	            <?php
	            $nk_comments = get_comments_number();
	            if($nk_comments > 0) {
		            echo sprintf( _n('%s دیدگاه', '%s دیدگاه', $nk_comments, 'nokhbe'), $nk_comments );
	            }
	            else {
		            _e( 'بدون دیدگاه', 'nokhbe' );
	            }
	            ?>
            </span>
            <a href="<?php the_permalink() ?>" class="cell medium-3 small-4"><?php _e( ' بیشتر بخوانید &raquo ', 'nokhbe' ); ?></a>
        </div>
    </div>

	<?php
}