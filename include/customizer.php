<?php

// Show a categories dropdown to select
include "dropdown-category.php";
include "dropdown-category-sanitize.php";
function nokhbe_theme_customizer(WP_Customize_Manager $wp_customize){

    $wp_customize->add_panel('nokhbe_header', array(
        'title'                         =>  __(' تنظیمات هدر', 'nokhbe')
    ));

    // Featured section in the top of the page that contains 4 articles
    $wp_customize->add_section('nokhbe_featured', array(
        'title'                         =>  __('مطالب ویژه', 'nokhbe'),
        'panel'                         =>  'nokhbe_header',
        'description'                   =>  __('دسته بندی مطالبی را انتخاب کنید که میخواهید در بخش ویژه ی سایت به نمایش درآیند.', 'nokhbe'),
    ));
    // Category to show in the featured section
    $wp_customize->add_setting('nokhbe_featured_cat', array(
        'default'                       =>  '',
        'sanitize_callback'             => 'nokhbe_sanitize_category_dropdown',
    ));
    $wp_customize->add_control(new nokhbe_Category_Control($wp_customize, 'nokhbe_featured_cat', array(
        'settings'                      =>  'nokhbe_featured_cat',
        'section'                       =>  'nokhbe_featured',
        'label'                         =>  __('انتخاب دسته بندی ویژه', 'nokhbe')
    )));
    /// RIGHT SIDEBAR SETTINGS ///
    $wp_customize->add_panel('nokhbe_rsidebar', array(
        'title'                         =>  __('تنظیمات سایدبار راست', 'nokhbe'),
        'description'                   =>  __('در هر بخش میتوانید دسته بندی و رنگ هدر را انتخاب کنید. ', 'nokhbe')
    ));

    /*
    There are three same blocks in the right sidebar,
    everyone of them can have a category and a background color for the title.
    */
    $wp_customize->add_section('nokhbe_rsidebar1', array(
        'title'                         =>  __('بخش اول مطالب', 'nokhbe'),
        'panel'                         =>  'nokhbe_rsidebar'
    ));
    $wp_customize->add_setting('nokhbe_rsidebar1_cat', array(
        'default'                       =>  '',
        'sanitize_callback'             => 'nokhbe_sanitize_category_dropdown',
    ));

    $wp_customize->add_control(new nokhbe_Category_Control($wp_customize, 'nokhbe_rsidebar1_cat', array(
        'settings'                      =>  'nokhbe_rsidebar1_cat',
        'section'                       =>  'nokhbe_rsidebar1',
        'label'                         =>  __('دسته بندی مطالب', 'nokhbe')
    )));
    $wp_customize->add_setting('nokhbe_rsidebar1_color', array(
        'default'                       =>  '',
        'sanitize_callback'             => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nokhbe_rsidebar1_color', array(
        'settings'                      =>  'nokhbe_rsidebar1_color',
        'section'                       =>  'nokhbe_rsidebar1',
        'label'                         =>  __('رنگ پس زمینه ی عنوان', 'nokhbe')
    )));
    $wp_customize->add_section('nokhbe_rsidebar2', array(
        'title'                         =>  __('بخش دوم مطالب', 'nokhbe'),
        'panel'                         =>  'nokhbe_rsidebar'
    ));
    $wp_customize->add_setting('nokhbe_rsidebar2_cat', array(
        'default'                       =>  '',
        'sanitize_callback'             => 'nokhbe_sanitize_category_dropdown',
    ));

    $wp_customize->add_control(new nokhbe_Category_Control($wp_customize, 'nokhbe_rsidebar2_cat', array(
        'settings'                      =>  'nokhbe_rsidebar2_cat',
        'section'                       =>  'nokhbe_rsidebar2',
        'label'                         =>  __('دسته بندی مطالب', 'nokhbe')
    )));
    $wp_customize->add_setting('nokhbe_rsidebar2_color', array(
        'default'                       =>  '',
        'sanitize_callback'             => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nokhbe_rsidebar2_color', array(
        'settings'                      =>  'nokhbe_rsidebar2_color',
        'section'                       =>  'nokhbe_rsidebar2',
        'label'                         =>  __('رنگ پس زمینه ی عنوان', 'nokhbe')
    )));
    $wp_customize->add_section('nokhbe_rsidebar3', array(
        'title'                         =>  __('بخش سوم مطالب', 'nokhbe'),
        'panel'                         =>  'nokhbe_rsidebar'
    ));
    $wp_customize->add_setting('nokhbe_rsidebar3_cat', array(
        'default'                       =>  '',
        'sanitize_callback'             => 'nokhbe_sanitize_category_dropdown',
    ));

    $wp_customize->add_control(new nokhbe_Category_Control($wp_customize, 'nokhbe_rsidebar3_cat', array(
        'settings'                      =>  'nokhbe_rsidebar3_cat',
        'section'                       =>  'nokhbe_rsidebar3',
        'label'                         =>  __('دسته بندی مطالب', 'nokhbe')
    )));
    $wp_customize->add_setting('nokhbe_rsidebar3_color', array(
        'default'                       =>  '',
        'sanitize_callback'             => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nokhbe_rsidebar3_color', array(
        'settings'                      =>  'nokhbe_rsidebar3_color',
        'section'                       =>  'nokhbe_rsidebar3',
        'label'                         =>  __('رنگ پس زمینه ی عنوان', 'nokhbe')
    )));

    /// LEFT SIDEBAR ///
    $wp_customize->add_panel('nokhbe_lsidebar', array(
        'title'                         =>  __('تنظیمات سایدبار چپ', 'nokhbe'),
        'description'                   =>  __('در این بخش میتوانید دسته بندی ها و سایر قابلیت های سایدبار چپ را تغییر دهید.', 'nokhbe')
    ));

    /*
     * Left sidebar can contain some last category posts with featured image.
     */
    $wp_customize->add_section('nokhbe_lsidebar_posts', array(
        'title'                         =>  __('مطالب سایدبار چپ', 'nokhbe'),
        'panel'                         =>  'nokhbe_lsidebar'
    ));

    $wp_customize->add_setting('nokhbe_lsidebar_cat', array(
        'default'                       =>  '',
        'sanitize_callback'             => 'nokhbe_sanitize_category_dropdown',
    ));

    $wp_customize->add_control(new nokhbe_Category_Control($wp_customize, 'nokhbe_lsidebar_cat', array(
        'settings'                      =>  'nokhbe_lsidebar_cat',
        'section'                       =>  'nokhbe_lsidebar_posts',
        'label'                         =>  __('دسته بندی مطالب', 'nokhbe')
    )));
}
add_action( 'customize_register', 'nokhbe_theme_customizer' );
