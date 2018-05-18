<?php
function nk_comment_template($comment, $args, $depth) {
    ?>
    <div class="comment card cell medium-12 grid-x grid-margin-x">
        <div class="cell small-2">
            <img src="<?= get_avatar_url(get_the_author_meta('ID')); ?>">
        </div>
        <div class="cell small-10 grid-x">
            <div class="comment-header cell small-12 grid-x">
                <h6 class="cell small-3 text-right"><?php comment_author(); ?></h6>
                <p class="cell small-5 small-offset-4 text-left"> <?= get_comment_date() . ' - ' . get_comment_time() ?></p>
            </div>
            <p class="cell small-12"><?php comment_text($comment); ?></p>
            <div class="comment-footer cell small-12 grid-x">
                <div class="cell small-10">
                    <?php
                    if ( $comment->comment_approved == '0' ) { ?>
                    <em class="comment-awaiting-moderation"><?php __( 'دیدگاه شما در انتظار بررسی است.', 'nokhbe' ); ?></em><?php
                    } ?>
                </div>
                <div class="cell small-2 reply text-left">
	                <?php
	                comment_reply_link(
		                array_merge(
			                $args,
			                array(
				                'depth'     => $depth,
				                'max_depth' => $args['max_depth']
			                )
		                )
	                ); ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area cell medium-12 grid-x">

	<?php
	$comments_arg = ( array(
		'fields'               => array(
			'author' => '<input class="cell medium-6" type="text" name="author" placeholder="' . __( 'نام شما', 'nokhbe' ) . '" required>',
			'email'  => '<input class="cell medium-6" type="email" name="email" placeholder="'. __('ایمیل شما', 'nokhbe') . '" required>',
			'url'    => ' '
		),
		'comment_field'        => '<textarea placeholder="'. __('دیدگاه خود را بنویسید', 'nokhbe') .'" name="comment" class="cell medium-12" id="comment" rows="5" required> </textarea>',
		'class_form'           => 'comment-form grid-x grid-margin-x',
		'class_submit'         => 'button primary cell medium-4',
		'comment_notes_before' => __( '<p>تمامی فیلدها موردنیاز هستند، ایمیل شما منتشر نخواهد شد.</p>', 'nokhbe' ),
		'title_reply'          => __( 'دیدگاهتان را بنویسید', 'nokhbe' ),
		'title_reply_before'   => '<h5 class="cell medium-12">',
		'title_reply_after'    => '</h5>'
	) );
	comment_form( $comments_arg );
	if ( have_comments() ) : ?>
        <h5 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: post title */
				printf( _x( 'یک دیدگاه برای  &ldquo;%s&rdquo;', 'comments title', 'nokhbe' ), get_the_title() );
			} else {
				printf(
				/* translators: 1: number of comments, 2: post title */
					_nx(
						'%1$s دیدگاه برای &ldquo;%2$s&rdquo;',
						'%1$s دیدگاه برای &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'nokhbe'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>
        </h5>

		<?php
		wp_list_comments( array(
			'avatar_size'   =>  100,
			'style'         =>  'ul',
			'short_ping'    =>  true,
			'reply_text'    =>  __( 'پاسخ', 'nokhbe' ),
            'max_depth'     =>  5,
            'per_page'      =>  10,
            'callback'      =>  'nk_comment_template'
		) );
		?>

		<?php the_comments_pagination( array(
			'prev_text' => '<span class="screen-reader-text">' . __( 'قبلی', 'nokhbe' ) . '</span>',
			'next_text' => '<span class="screen-reader-text">' . __( 'بعدی', 'nokhbe' ) . '</span>',
		) );
	endif; // Check for have_comments().
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
        <p class="no-comments"><?php _e( 'دیدگاه ها بسته شده اند.', 'nokhbe' ); ?></p>
		<?php
	endif;
	?>

</div><!-- #comments -->