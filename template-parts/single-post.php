<?php
/*
 * Single article template part that shows on index page, archive pages and ...
 */
$nokhbe_categories = get_the_category();
while(have_posts()) {
    the_post();
    ?>
    <div class="grid-x cell medium-12 grid-margin-x index-main-article">
        <figure class="cell medium-3">
            <?php
            if( has_post_thumbnail() ) {
                ?>
                <img src="<?php echo esc_url(get_the_post_thumbnail_url()) ?>">
                <?php
            }
            else {
                ?>
                <img src="<?php echo esc_url(get_template_directory_uri()) . '/img/thumbnail.png';  ?>">
                <?php
            }
            ?>
        </figure>
        <div class="cell medium-9">
            <a href="<?php the_permalink(); ?>"> <h1 class="cell medium-12"><?php the_title() ?> </h1> </a>
            <p class="cell medium-12"><?php the_excerpt() ?></p>
        </div>
        <div class="index-meta cell medium-12 grid-x">
            <a class="cell medium-3 small-4" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ),
             get_the_author_meta( 'user_nicename' ) ) );   ?> "><i class="fa fa-user"></i> <?php the_author() ?>
            </a>
            <?php if(has_category()) { ?>
            <a class="cell medium-3 hide-for-small-only" href="<?php echo esc_url( get_category_link( $nokhbe_categories[0]->cat_ID ) ) ?>">
                <i class="fa fa-list"></i> <?php echo $nokhbe_categories[0]->cat_name ?>
            </a>
            <?php }
            else {
                ?>
                <span class="cell medium-3 hide-for-small-only">
                    <i class="fa fa-list"></i> <?php _e("بدون دسته بندی", "nokhbe"); ?>
                </span>
                <?php
            }
            ?>
            <span class="cell medium-3 small-4">
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
            <a href="<?php the_permalink() ?>" class="cell medium-3 small-4"><?php _e( ' بیشتر بخوانید &raquo ', 'nokhbe' ); ?></a>
        </div>
    </div>

	<?php
}
wp_reset_postdata();