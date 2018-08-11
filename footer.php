<footer class="grid-x cell medium-10 medium-offset-1 grid-margin-x">
    <div class="cell medium-4">
		<?php dynamic_sidebar( 'footer' ); ?>
    </div>
    <div class="cell medium-4">
		<?php dynamic_sidebar( 'footer-2' ); ?>

    </div>
    <div class="cell medium-4">
		<?php dynamic_sidebar( 'footer-3' ); ?>
    </div>
    <div class="grid-x cell medium-12 copyright">
        <p class="cell medium-3 text-right"> <?php _e( 'طراحی و کد نویسی با', 'nokhbe' ); ?> <i class="fa fa-heart"> </i> <?php _e( 'از', 'nokhbe' ); ?> <a href="http://amirition.ir"><?php _e( 'امیریشن', 'nokhbe' ); ?></a></p>
        <div class="cell medium-4 medium-offset-5">
            <p class="text-left"><?php echo __( 'تمامی حقوق برای ', 'nokhbe' ) . get_bloginfo('name') . __( 'محفوظ است', 'nokhbe' )?></p>
        </div>
    </div>
</footer>
<?php
wp_footer();
//TODO: add customizer setting for copyright text .
?>
</body>
</html>
