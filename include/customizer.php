<?php

// Show a categories dropdown to select
include "dropdown-category.php";
function nk_theme_customizer(WP_Customize_Manager $wp_customize){

    $wp_customize->add_panel('nk_header', array(
        'title'                         =>  __(' تنظیمات هدر', 'nokhbe')
    ));

    // Featured section in the top of the page that contains 4 articles
    $wp_customize->add_section('nk_featured', array(
        'title'                         =>  __('مطالب ویژه', 'nokhbe'),
        'panel'                         =>  'nk_header',
        'description'                   =>  __('دسته بندی مطالبی را انتخاب کنید که میخواهید در بخش ویژه ی سایت به نمایش درآیند.', 'nokhbe'),
    ));
    // Category to show in the featured section
    $wp_customize->add_setting('nk_featured_cat', array(
        'default'                       =>  '',
        'sanitize_callback'             => 'esc_attr',
    ));
    $wp_customize->add_control(new Category_Control($wp_customize, 'nk_featured_cat', array(
        'settings'                      =>  'nk_featured_cat',
        'section'                       =>  'nk_featured',
        'label'                         =>  __('انتخاب دسته بندی ویژه', 'nokhbe')
    )));
    /// RIGHT SIDEBAR SETTINGS ///
    $wp_customize->add_panel('nk_rsidebar', array(
        'title'                         =>  __('تنظیمات سایدبار راست', 'nokhbe'),
        'description'                   =>  __('در هر بخش میتوانید دسته بندی و رنگ هدر را انتخاب کنید. ', 'nokhbe')
    ));

    /*
    There are three same blocks in the right sidebar,
    everyone of them can have a category and a background color for the title.
    */
    $wp_customize->add_section('nk_rsidebar1', array(
        'title'                         =>  __('بخش اول مطالب', 'nokhbe'),
        'panel'                         =>  'nk_rsidebar'
    ));
    $wp_customize->add_setting('nk_rsidebar1_cat', array(
        'default'                       =>  '',
        'sanitize_callback'             => 'esc_attr',
    ));

    $wp_customize->add_control(new Category_Control($wp_customize, 'nk_rsidebar1_cat', array(
        'settings'                      =>  'nk_rsidebar1_cat',
        'section'                       =>  'nk_rsidebar1',
        'label'                         =>  __('دسته بندی مطالب', 'nokhbe')
    )));
    $wp_customize->add_setting('nk_rsidebar1_color', array(
        'default'                       =>  '',
        'sanitize_callback'             => 'esc_attr',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nk_rsidebar1_color', array(
        'settings'                      =>  'nk_rsidebar1_color',
        'section'                       =>  'nk_rsidebar1',
        'label'                         =>  __('رنگ پس زمینه ی عنوان', 'nokhbe')
    )));
    $wp_customize->add_section('nk_rsidebar2', array(
        'title'                         =>  __('بخش دوم مطالب', 'nokhbe'),
        'panel'                         =>  'nk_rsidebar'
    ));
    $wp_customize->add_setting('nk_rsidebar2_cat', array(
        'default'                       =>  '',
        'sanitize_callback'             => 'esc_attr',
    ));

    $wp_customize->add_control(new Category_Control($wp_customize, 'nk_rsidebar2_cat', array(
        'settings'                      =>  'nk_rsidebar2_cat',
        'section'                       =>  'nk_rsidebar2',
        'label'                         =>  __('دسته بندی مطالب', 'nokhbe')
    )));
    $wp_customize->add_setting('nk_rsidebar2_color', array(
        'default'                       =>  '',
        'sanitize_callback'             => 'esc_attr',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nk_rsidebar2_color', array(
        'settings'                      =>  'nk_rsidebar2_color',
        'section'                       =>  'nk_rsidebar2',
        'label'                         =>  __('رنگ پس زمینه ی عنوان', 'nokhbe')
    )));
    $wp_customize->add_section('nk_rsidebar3', array(
        'title'                         =>  __('بخش سوم مطالب', 'nokhbe'),
        'panel'                         =>  'nk_rsidebar'
    ));
    $wp_customize->add_setting('nk_rsidebar3_cat', array(
        'default'                       =>  '',
        'sanitize_callback'             => 'esc_attr',
    ));

    $wp_customize->add_control(new Category_Control($wp_customize, 'nk_rsidebar3_cat', array(
        'settings'                      =>  'nk_rsidebar3_cat',
        'section'                       =>  'nk_rsidebar3',
        'label'                         =>  __('دسته بندی مطالب', 'nokhbe')
    )));
    $wp_customize->add_setting('nk_rsidebar3_color', array(
        'default'                       =>  '',
        'sanitize_callback'             => 'esc_attr',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nk_rsidebar3_color', array(
        'settings'                      =>  'nk_rsidebar3_color',
        'section'                       =>  'nk_rsidebar3',
        'label'                         =>  __('رنگ پس زمینه ی عنوان', 'nokhbe')
    )));

    /// LEFT SIDEBAR ///
    $wp_customize->add_panel('nk_lsidebar', array(
        'title'                         =>  __('تنظیمات سایدبار چپ', 'nokhbe'),
        'description'                   =>  __('در این بخش میتوانید دسته بندی ها و سایر قابلیت های سایدبار چپ را تغییر دهید.', 'nokhbe')
    ));

    /*
     * Left sidebar can contain some last category posts with featured image.
     */
    $wp_customize->add_section('nk_lsidebar_posts', array(
        'title'                         =>  __('مطالب سایدبار چپ', 'nokhbe'),
        'panel'                         =>  'nk_lsidebar'
    ));

    $wp_customize->add_setting('nk_lsidebar_cat', array(
        'default'                       =>  '',
        'sanitize_callback'             => 'esc_attr',
    ));

    $wp_customize->add_control(new Category_Control($wp_customize, 'nk_lsidebar_cat', array(
        'settings'                      =>  'nk_lsidebar_cat',
        'section'                       =>  'nk_lsidebar_posts',
        'label'                         =>  __('دسته بندی مطالب', 'nokhbe')
    )));

    /*
     * In the left sidebar, you have a place to put your advertise in.
     */
    $wp_customize->add_section('nk_lsidebar_ads', array(
        'title'                             =>  __('تبلیغات در سایدبار', 'nokhbe'),
	    'panel'                             =>  'nk_lsidebar',
	    'description'                       =>  __('عکس و لینک آگهی خود را در این قسمت وارد کنید. ', 'nokhbe')
    ));

    $wp_customize->add_setting('nk_lsidebar_link', array(
    	'default'                           =>  '',
	    'sanitize_callback'                 => 'esc_attr',
    ));
	$wp_customize->add_control('nk_lsidebar_link', array(
		'label'                             =>  __('لینک تبلیغات', 'nokhbe'),
		'type'                              =>  'text',
		'section'                           =>  'nk_lsidebar_ads',
		'settings'                          =>  'nk_lsidebar_link'
	));

    $wp_customize->add_setting('nk_lsidebar_img', array(
    	'default'                           =>  '',
	    'sanitize_callback'                 => 'esc_attr',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nk_lsidebar_img', array(
	    'label'                             =>  __('انتخاب تصویر آگهی با اندازه 300x250', 'nokhbe'),
	    'section'                           =>  'nk_lsidebar_ads',
	    'settings'                          =>  'nk_lsidebar_img'
    )));
}
add_action( 'customize_register', 'nk_theme_customizer' );
