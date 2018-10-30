<?php
get_header();
?>
    <div class="grid-x cell medium-10 medium-offset-1 small-12 main-content">
        <aside class="cell medium-3 sidebar sidebar-right grid-y">
            <?php
            get_template_part('template-parts/sidebar-right');
            get_sidebar('right_sidebar');
            ?>
        </aside>
        <?php
        if (have_posts()) {
            the_post();
            $nokhbe_categories = get_the_category();
            ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class('cell medium-6 single-post grid-x'); ?>>
                <h2><?php the_title(); ?></h2>
                <div class="single-meta grid-x cell medium-12">
                    <div class="cell small-4"><i class="fa fa-user"></i> <?php the_author() ?></div>
                    <div class="cell small-4"><i class="fa fa-calendar"></i> <?php echo get_the_date() ?></div>
                </div>
                <div class="cell medium-12 featured-image">
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url()) ?>">
                </div>
                <p><?php the_content(); ?></p>
                <hr>
                <div class="tags cell medium-12">
                    <i class="fa fa-tags"></i> <?php the_tags(__('برچسب ها: ', 'nokhbe'), ' ') ?>
                </div>
                <div class="categories cell medium-12">
                    <i class="fa fa-list-ul"></i>
                    <?php
                    _e('دسته بندی ها: ', 'nokhbe');
                    foreach ($nokhbe_categories as $category) {
                        ?>
                        <a href="<?php echo get_category_link($category->term_id) ?>"> <?php echo $category->name ?> </a>
                        <?php
                    }
                    ?>
                    <?php wp_link_pages(array(
                        'before' => '<div class="page-links"><span class="page-links-title">' . __('برگه ها:', 'nokhbe') . '</span>',
                        'after' => '</div>',
                        'link_before' => '<span>',
                        'link_after' => '</span>',
                    ));
                    ?>
                </div>
                <hr>
                <?php
                if (comments_open()) :
                    comments_template();
                endif;
                ?>
            </div>
            <?php
        }
        ?>

        <aside class="cell medium-3 sidebar sidebar-left grid-y">
            <?php
            get_template_part('template-parts/sidebar-left');
            get_template_part('template-parts/sidebar-ads');
            ?>
        </aside>
    </div>
<?php
get_footer();
