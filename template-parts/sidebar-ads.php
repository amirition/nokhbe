<?php
/*
 * Show a banner with a link in the left sidebar
 */
$theme_defaults = nk_sane_defaults();
?>
<div class="sidebar-ads grid-x">
	<a class="grid-x cell medium-12" href="<?php echo get_theme_mod( 'nk_lsidebar_link', $theme_defaults["nk_lsidebar_link"] ) ?>">
		<img class="cell medium-12" src="<?php echo get_theme_mod('nk_lsidebar_img', $theme_defaults["nk_lsidebar_img"])?>">
	</a>
</div>