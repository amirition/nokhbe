<?php
include "dropdown-category.php";
function theme_customizer(WP_Customize_Manager $wp_customize){
    $wp_customize->add_panel('header', array(
        'title'                         =>  ' تنظیمات هدر'
    ));
    $wp_customize->add_section('social-icons', array(
        'title'                         => 'آیکون های اجتماعی',
        'panel'                         =>  'header',
        'description'                   =>  'آدرس صفحه را بدون آدرس شبکه های اجتماعی وارد کنید، برای این که آیکون را حذف کنید، خانه ی مربوط به آن را خالی بگذارید.'
    ));

    $wp_customize->add_setting('twitter', array(
        'default'                       => '#',
    ));

    $wp_customize->add_control('twitter', array(
        'type'                          =>  'text',
        'label'                         =>  'آدرس برگه ی توییتر',
        'section'                       =>  'social-icons',
        'settings'                      =>  'twitter'
    ));
    $wp_customize->add_setting('instagram', array(
        'default'                       =>  '#'
    ));
    $wp_customize->add_control('instagram', array(
        'type'                          =>  'text',
        'label'                         =>  'آدرس پیج اینستاگرام',
        'section'                       =>  'social-icons',
        'settings'                      =>  'instagram'
    ));
    $wp_customize->add_setting('facebook', array(
        'default'                       =>  '#'
    ));
    $wp_customize->add_control('facebook', array(
        'type'                          =>  'text',
        'label'                         =>  'آدرس صفحه ی فیسبوک',
        'section'                       =>  'social-icons',
        'settings'                      =>  'facebook'
    ));
    $wp_customize->add_setting('telegram', array(
        'default'                       =>  '#'
    ));
    $wp_customize->add_control('telegram', array(
        'type'                          =>  'text',
        'label'                         =>  'آدرس کانال تلگرام',
        'section'                       =>  'social-icons',
        'settings'                      =>  'telegram'
    ));

    $wp_customize->add_section('featured', array(
        'title'                         =>  'مطالب ویژه',
        'panel'                         =>  'header',
        'description'                   =>  'دسته بندی مطالبی را انتخاب کنید که میخواهید در بخش ویژه ی سایت به نمایش درآیند.'
    ));
    $wp_customize->add_setting('featured_cat', array(
        'default'                       =>  0
    ));
    $wp_customize->add_control(new Category_Control($wp_customize, 'featured_cat', array(
        'settings'                      =>  'featured_cat',
        'section'                       =>  'featured',
        'label'                         =>  'انتخاب دسته بندی ویژه'
    )));
    /// RIGHT SIDEBAR ///
    $wp_customize->add_panel('rsidebar', array(
        'title'                         =>  'تنظیمات سایدبار راست',
        'description'                   =>  'در هر بخش میتوانید دسته بندی و رنگ هدر را انتخاب کنید. '
    ));
    $wp_customize->add_section('rsidebar1', array(
        'title'                         =>  'بخش اول مطالب',
        'panel'                         =>  'rsidebar'
    ));
    $wp_customize->add_setting('rsidebar1_cat', array(
        'default'                       =>  0
    ));

    $wp_customize->add_control(new Category_Control($wp_customize, 'rsidebar1_cat', array(
        'settings'                      =>  'rsidebar1_cat',
        'section'                       =>  'rsidebar1',
        'label'                         =>  'دسته بندی مطالب'
    )));
    $wp_customize->add_setting('rsidebar1_color', array(
        'default'                       =>  '#2E86AB'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rsidebar1_color', array(
        'settings'                      =>  'rsidebar1_color',
        'section'                       =>  'rsidebar1',
        'label'                         =>  'رنگ پس زمینه ی عنوان'
    )));
    $wp_customize->add_section('rsidebar2', array(
        'title'                         =>  'بخش دوم مطالب',
        'panel'                         =>  'rsidebar'
    ));
    $wp_customize->add_setting('rsidebar2_cat', array(
        'default'                       =>  0
    ));

    $wp_customize->add_control(new Category_Control($wp_customize, 'rsidebar2_cat', array(
        'settings'                      =>  'rsidebar2_cat',
        'section'                       =>  'rsidebar2',
        'label'                         =>  'دسته بندی مطالب'
    )));
    $wp_customize->add_setting('rsidebar2_color', array(
        'default'                       =>  '#2E86AB'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rsidebar2_color', array(
        'settings'                      =>  'rsidebar2_color',
        'section'                       =>  'rsidebar2',
        'label'                         =>  'رنگ پس زمینه ی عنوان'
    )));
    $wp_customize->add_section('rsidebar3', array(
        'title'                         =>  'بخش سوم مطالب',
        'panel'                         =>  'rsidebar'
    ));
    $wp_customize->add_setting('rsidebar3_cat', array(
        'default'                       =>  0
    ));

    $wp_customize->add_control(new Category_Control($wp_customize, 'rsidebar3_cat', array(
        'settings'                      =>  'rsidebar3_cat',
        'section'                       =>  'rsidebar3',
        'label'                         =>  'دسته بندی مطالب'
    )));
    $wp_customize->add_setting('rsidebar3_color', array(
        'default'                       =>  '#2E86AB'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rsidebar3_color', array(
        'settings'                      =>  'rsidebar3_color',
        'section'                       =>  'rsidebar3',
        'label'                         =>  'رنگ پس زمینه ی عنوان'
    )));

    /// LEFT SIDEBAR ///
    $wp_customize->add_panel('lsidebar', array(
        'title'                         =>  'تنظیمات سایدبار چپ',
        'description'                   =>  'در این بخش میتوانید دسته بندی ها و سایر قابلیت های سایدبار چپ را تغییر دهید.'
    ));

    $wp_customize->add_section('lsidebar', array(
        'title'                         =>  'مطالب سایدبار چپ',
        'panel'                         =>  'lsidebar'
    ));

    $wp_customize->add_setting('lsidebar_cat', array(
        'default'                       =>  0
    ));

    $wp_customize->add_control(new Category_Control($wp_customize, 'lsidebar_cat', array(
        'settings'                      =>  'lsidebar_cat',
        'section'                       =>  'lsidebar',
        'label'                         =>  'دسته بندی مطالب'
    )));

}
add_action( 'customize_register', 'theme_customizer' );