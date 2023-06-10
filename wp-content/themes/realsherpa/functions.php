<?php 
//include css and javascript
 include(get_template_directory() .'/setting/script.php');
 include(get_template_directory() .'/setting/setup.php');
//customizer
 include(get_template_directory() .'/customizer/contact.php');
 include(get_template_directory() .'/customizer/about.php');
 include(get_template_directory() .'/customizer/title_setting.php');
 include(get_template_directory() .'/customizer/background_image_setting.php');
 include(get_template_directory() .'/customizer/breadcrumb_image_setting.php');
 include(get_template_directory() .'/customizer/parallax.php');
 include(get_template_directory() .'/customizer/video_section.php');
 include(get_template_directory() .'/customizer/gallery.php');

// register navbar
function register_navwalker(){
  require_once get_template_directory() . '/setting/class-wp-bootstrap-navwalker.php';
}
add_filter( 'litespeed_ucss_per_pagetype', '__return_true' );
//hooks
add_action('after_setup_theme', 'register_navwalker');
add_action('customize_register', 'contact_customize_register');
add_action('customize_register', 'about_customize_register');
add_action('customize_register', 'title_customize_register');
add_action('customize_register', 'bg_image_customize_register');
add_action('customize_register', 'breadcrumb_customize_register');
add_action('customize_register', 'parallax_customize_register');
add_action('customize_register', 'video_customize_register');
add_action('customize_register', 'gallery_customize_register');
?>