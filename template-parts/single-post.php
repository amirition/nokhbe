<?php
$category = get_the_category();
while(have_posts()) {
    the_post();
    ?>
    <div class="grid-x cell medium-12 grid-margin-x index-main-article">
        <figure class="cell medium-3">
            <img src="<?= get_the_post_thumbnail_url() ?>">
        </figure>
        <div class="cell medium-9">
            <a href="<?php the_permalink(); ?>"> <h1 class="cell medium-12"><?= the_title() ?> </h1> </a>
            <p class="cell medium-12"><?php the_excerpt() ?></p>
        </div>
        <div class="index-meta cell medium-12 grid-x">
            <span class="cell medium-3 small-4"><i class="fa fa-user"></i> <?php the_author() ?> </span>
            <span class="cell medium-3 hide-for-small-only"><i class="fa fa-list"></i> <?= $category[0]->cat_name ?></span>
            <span class="cell medium-3 small-4">
                <i class="fa fa-comment"></i>
	            <?php
	            $comments = get_comments_number();
	            if($comments > 0) {
		            echo sprintf( _n('%s دیدگاه', '%s دیدگاه ها', $comments, 'nokhbe'), $comments );
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