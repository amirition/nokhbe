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
        <p class="cell medium-3 text-right">طراحی و کدنویسی با  <i class="fa fa-heart"> </i> از <a href="http://amirition.ir">امیریشن</a></p>
        <div class="cell medium-4 medium-offset-5">
            <p class="text-left"> تمامی حقوق برای <?= get_bloginfo('name') ?> محفوظ است.</p>
        </div>
    </div>
</footer>
<?php
wp_footer();
//TODO: add customizer setting for copyright text .
?>
</body>
</html>
