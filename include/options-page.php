<?php

function nokhbe_theme_options() {

?>
    <div class="admin-settings grid-x">
        <form action="admin-post.php" method="post">
            <input type="hidden" name="action" value="nk_save_options">
            <?php wp_nonce_field('nk_options_verify'); ?>
            <h2 class="admin-title">شبکه های اجتماعی</h2>
            <input name="nk_facebook_url" placeholder="آدرس فیسبوک">
            <input name="nk_twitter_url" placeholder="آدرس توییتر">
            <input name="nk_instagram_url" placeholder="آدرس اینستاگرام">
            <input name="nk_linkedin_url" placeholder="ادرس لینکدین">
        </form>
    </div>

<?php }