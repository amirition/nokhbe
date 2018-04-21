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
            <h1 class="cell medium-12"><?= the_title() ?></h1>
            <p class="cell medium-12"><?php the_excerpt() ?></p>
        </div>
        <div class="index-meta cell medium-12 grid-x">
            <span class="cell medium-3"><i class="fa fa-user"></i> <?php the_author() ?> </span>
            <span class="cell medium-3"><i class="fa fa-list"></i> <?= $category[0]->cat_name ?></span>
            <span class="cell medium-3"><i class="fa fa-comment"></i> <?= get_comments_number() ?> دیدگاه</span>
            <a href="<?php the_permalink() ?>" class="cell medium-3"> بیشتر بخوانید &raquo </a>
        </div>
    </div>

	<?php
}