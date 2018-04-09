<?php

$theme_options          =   get_option( 'nk_options' );

if(!$theme_options) {
	$options            =   array(
		'facebook'      =>  '',
		'twitter'       =>  '',
		'linkedin'      =>  '',
		'instagram'     =>  '',
		'telegram'      =>  '',
		'logo_type'     =>  '1',
		'logo_img'      =>  '',
		'featured_cat'  =>  '1',
		'rsidebar_cat1' =>  '1',
		'rsidebar_cat2' =>  '1',
		'rsidebar_cat3' =>  '1',
		'lsidebar_cat'  =>  '1'
	);

	add_option( 'nk_options', $options );
}