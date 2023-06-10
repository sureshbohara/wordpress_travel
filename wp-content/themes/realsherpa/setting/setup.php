<?php 
   function sherpa_setup_theme(){
   add_theme_support('title-tag');
   add_theme_support('custom-logo');
   add_theme_support('post-thumbnails');
   }
  add_action('after_setup_theme','sherpa_setup_theme');

 //register navbar
  function sherpa_menu(){
    if(function_exists('register_nav_menu')){
      register_nav_menu('top_header', __('Top Header'));
      register_nav_menu('navbar', __('Main Navbar'));
      register_nav_menu('footer1', __('Footer Menu First'));
      register_nav_menu('footer2', __('Footer Menu Second'));
      register_nav_menu('footer3', __('Footer Menu Third'));
      register_nav_menu('sidebar', __('Sidebar Menu'));
      register_nav_menu('sidebar1', __('Popular Trip'));
    }
   }
add_action('init','sherpa_menu');


if (function_exists('add_theme_support')) {
    add_theme_support('custom-logo');
    add_theme_support(125, 75);


    add_theme_support('banner');
    add_theme_support(1200, 600);

    add_theme_support('home_destination');
    add_theme_support(275, 275);

    add_theme_support('home_package');
    add_theme_support(275, 300);

    add_theme_support('home_region');
    add_theme_support(375, 300);

    add_theme_support('home_gallery');
    add_theme_support(235, 175);

    add_theme_support('home_team');
    add_theme_support(300, 300);

    add_theme_support('trip_review');
    add_theme_support(100, 100);
    add_theme_support('service');
    add_theme_support(65, 55);
    add_theme_support('partner');
    add_theme_support(120, 110);

    add_theme_support('gallery_main');
    add_theme_support(380, 380);

     add_theme_support('trip_details');
    add_theme_support(1200, 560);

    add_theme_support('trip_gallery');
    add_theme_support(600, 300);

    add_theme_support('trip_related');
    add_theme_support(350, 300);
	
	 add_theme_support('trip_map');
    add_theme_support(800, 800);
	
	 add_theme_support('trip_related');
    add_theme_support(400, 400);


    

}
 
if( function_exists('add_image_size' ) ) { 
  add_image_size('custom-logo',125, 75, true );
  add_image_size('banner',1200, 600, true );
  add_image_size('home_destination',275, 257, true );
  add_image_size('home_package',275, 300, true );
  add_image_size('home_region',375, 300, true );
  add_image_size('home_gallery',235, 175, true );
  add_image_size('home_team',300, 300, true );
  add_image_size('trip_review',100, 100, true );
  add_image_size('service',65, 55, true );
  add_image_size('partner',120, 110, true );
  add_image_size('gallery_main',380, 380, true );
  add_image_size('trip_details',1200, 560, true );
  add_image_size('trip_gallery',600, 300, true );
  add_image_size('trip_related',350, 300, true );
add_image_size('trip_map',800, 800, true );
add_image_size('trip_related',400, 400, true );
}


// widgets active Footer Firts
function sherpa_footer_first() {
register_sidebar(array(
'name' => __( 'Footer Widgets First', 'bfc' ),
'id' => 'footer-first',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h4>',
'after_title' => '</h4>',
));
}

function sherpa_footer_middle() {
register_sidebar(array(
'name' => __( 'Footer Widgets Middle', 'bfc' ),
'id' => 'footer-middle',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h4>',
'after_title' => '</h4>',
));
}

function sherpa_footer_last() {
register_sidebar(array(
'name' => __( 'Footer Widgets Last', 'bfc' ),
'id' => 'footer-last',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h4>',
'after_title' => '</h4>',
));
}

add_action( 'init', 'sherpa_footer_first');
add_action( 'init', 'sherpa_footer_middle');
add_action( 'init', 'sherpa_footer_last');



