<?php
include "dropdown-category.php";
function theme_customizer(WP_Customize_Manager $wp_customize){
    $wp_customize->add_panel('header', array(
        'title'                         =>  __(' تنظیمات هدر', 'nokhbe')
    ));
    $wp_customize->add_section('social-icons', array(
        'title'                         =>  __('آیکون های اجتماعی', 'nokhbe'),
        'panel'                         =>  'header',
        'description'                   =>  __('آدرس صفحه را بدون آدرس شبکه های اجتماعی وارد کنید، برای این که آیکون را حذف کنید، خانه ی مربوط به آن را خالی بگذارید.', 'nokhbe')
    ));

    $wp_customize->add_setting('twitter', array(
        'default'                       => '#',
    ));

    $wp_customize->add_control('twitter', array(
        'type'                          =>  'text',
        'label'                         =>  __('آدرس برگه ی توییتر', 'nokhbe'),
        'section'                       =>  'social-icons',
        'settings'                      =>  'twitter'
    ));
    $wp_customize->add_setting('instagram', array(
        'default'                       =>  '#'
    ));
    $wp_customize->add_control('instagram', array(
        'type'                          =>  'text',
        'label'                         =>  __('آدرس پیج اینستاگرام', 'nokhbe'),
        'section'                       =>  'social-icons',
        'settings'                      =>  'instagram'
    ));
    $wp_customize->add_setting('facebook', array(
        'default'                       =>  '#'
    ));
    $wp_customize->add_control('facebook', array(
        'type'                          =>  'text',
        'label'                         =>  __('آدرس صفحه ی فیسبوک', 'nokhbe'),
        'section'                       =>  'social-icons',
        'settings'                      =>  'facebook'
    ));
    $wp_customize->add_setting('telegram', array(
        'default'                       =>  '#'
    ));
    $wp_customize->add_control('telegram', array(
        'type'                          =>  'text',
        'label'                         =>  __('آدرس کانال تلگرام', 'nokhbe'),
        'section'                       =>  'social-icons',
        'settings'                      =>  'telegram'
    ));

    $wp_customize->add_section('featured', array(
        'title'                         =>  __('مطالب ویژه', 'nokhbe'),
        'panel'                         =>  'header',
        'description'                   =>  __('دسته بندی مطالبی را انتخاب کنید که میخواهید در بخش ویژه ی سایت به نمایش درآیند.', 'nokhbe'),
    ));
    $wp_customize->add_setting('featured_cat', array(
        'default'                       =>  0
    ));
    $wp_customize->add_control(new Category_Control($wp_customize, 'featured_cat', array(
        'settings'                      =>  'featured_cat',
        'section'                       =>  'featured',
        'label'                         =>  __('انتخاب دسته بندی ویژه', 'nokhbe')
    )));
    /// RIGHT SIDEBAR ///
    $wp_customize->add_panel('rsidebar', array(
        'title'                         =>  __('تنظیمات سایدبار راست', 'nokhbe'),
        'description'                   =>  __('در هر بخش میتوانید دسته بندی و رنگ هدر را انتخاب کنید. ', 'nokhbe')
    ));
    $wp_customize->add_section('rsidebar1', array(
        'title'                         =>  __('بخش اول مطالب', 'nokhbe'),
        'panel'                         =>  'rsidebar'
    ));
    $wp_customize->add_setting('rsidebar1_cat', array(
        'default'                       =>  0
    ));

    $wp_customize->add_control(new Category_Control($wp_customize, 'rsidebar1_cat', array(
        'settings'                      =>  'rsidebar1_cat',
        'section'                       =>  'rsidebar1',
        'label'                         =>  __('دسته بندی مطالب', 'nokhbe')
    )));
    $wp_customize->add_setting('rsidebar1_color', array(
        'default'                       =>  '#d24d57'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rsidebar1_color', array(
        'settings'                      =>  'rsidebar1_color',
        'section'                       =>  'rsidebar1',
        'label'                         =>  __('رنگ پس زمینه ی عنوان', 'nokhbe')
    )));
    $wp_customize->add_section('rsidebar2', array(
        'title'                         =>  __('بخش دوم مطالب', 'nokhbe'),
        'panel'                         =>  'rsidebar'
    ));
    $wp_customize->add_setting('rsidebar2_cat', array(
        'default'                       =>  0
    ));

    $wp_customize->add_control(new Category_Control($wp_customize, 'rsidebar2_cat', array(
        'settings'                      =>  'rsidebar2_cat',
        'section'                       =>  'rsidebar2',
        'label'                         =>  __('دسته بندی مطالب', 'nokhbe')
    )));
    $wp_customize->add_setting('rsidebar2_color', array(
        'default'                       =>  '#875f9a'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rsidebar2_color', array(
        'settings'                      =>  'rsidebar2_color',
        'section'                       =>  'rsidebar2',
        'label'                         =>  __('رنگ پس زمینه ی عنوان', 'nokhbe')
    )));
    $wp_customize->add_section('rsidebar3', array(
        'title'                         =>  __('بخش سوم مطالب', 'nokhbe'),
        'panel'                         =>  'rsidebar'
    ));
    $wp_customize->add_setting('rsidebar3_cat', array(
        'default'                       =>  0
    ));

    $wp_customize->add_control(new Category_Control($wp_customize, 'rsidebar3_cat', array(
        'settings'                      =>  'rsidebar3_cat',
        'section'                       =>  'rsidebar3',
        'label'                         =>  __('دسته بندی مطالب', 'nokhbe')
    )));
    $wp_customize->add_setting('rsidebar3_color', array(
        'default'                       =>  '#26a65b'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rsidebar3_color', array(
        'settings'                      =>  'rsidebar3_color',
        'section'                       =>  'rsidebar3',
        'label'                         =>  __('رنگ پس زمینه ی عنوان', 'nokhbe')
    )));

    /// LEFT SIDEBAR ///
    $wp_customize->add_panel('lsidebar', array(
        'title'                         =>  __('تنظیمات سایدبار چپ', 'nokhbe'),
        'description'                   =>  __('در این بخش میتوانید دسته بندی ها و سایر قابلیت های سایدبار چپ را تغییر دهید.', 'nokhbe')
    ));

    $wp_customize->add_section('lsidebar_posts', array(
        'title'                         =>  __('مطالب سایدبار چپ', 'nokhbe'),
        'panel'                         =>  'lsidebar'
    ));

    $wp_customize->add_setting('lsidebar_cat', array(
        'default'                       =>  0
    ));

    $wp_customize->add_control(new Category_Control($wp_customize, 'lsidebar_cat', array(
        'settings'                      =>  'lsidebar_cat',
        'section'                       =>  'lsidebar_posts',
        'label'                         =>  __('دسته بندی مطالب', 'nokhbe')
    )));

    $wp_customize->add_section('lsidebar_ads', array(
        'title'                             =>  __('تبلیغات در سایدبار', 'nokhbe'),
	    'panel'                             =>  'lsidebar',
	    'description'                       =>  __('عکس و لینک آگهی خود را در این قسمت وارد کنید. ', 'nokhbe')
    ));

    $wp_customize->add_setting('lsidebar_link', array(
    	'default'                           =>  '#'
    ));
	$wp_customize->add_control('lsidebar_link', array(
		'label'                             =>  __('لینک تبلیغات', 'nokhbe'),
		'type'                              =>  'text',
		'section'                           =>  'lsidebar_ads',
		'settings'                          =>  'lsidebar_link'
	));

    $wp_customize->add_setting('lsidebar_img', array(
    	'default'                           =>  get_template_directory_uri() . '/img/sidebar-ad.jpg'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'lsidebar_img', array(
	    'label'                             =>  __('انتخاب تصویر آگهی با اندازه 300x250', 'nokhbe'),
	    'section'                           =>  'lsidebar_ads',
	    'settings'                          =>  'lsidebar_img'
    )));
}
add_action( 'customize_register', 'theme_customizer' );