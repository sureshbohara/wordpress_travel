<?php 
   function sherpa_script(){
   	//css
   wp_register_style('custom_css', get_template_directory_uri() .  '/style.css');
   wp_register_style('bootstrap.min', get_template_directory_uri() .  '/css/bootstrap.min.css');
   wp_register_style('animate.min', get_template_directory_uri() .  '/css/animate.min.css');
   wp_register_style('fontawesome.all.min', get_template_directory_uri() .  '/fonts/fontawesome/css/fontawesome.all.min.css');
   wp_register_style('owl-carousel.min', get_template_directory_uri() .  '/css/owl-carousel.min.css');
   wp_register_style('meanmenu.min', get_template_directory_uri() .  '/css/meanmenu.min.css');
   wp_register_style('cssanimation.min', get_template_directory_uri() .  '/css/cssanimation.min.css');
   wp_register_style('default', get_template_directory_uri() .  '/css/default.css');
   wp_register_style('style', get_template_directory_uri() .  '/css/style.css');
   wp_register_style('responsive', get_template_directory_uri() .  '/css/responsive.css');
   wp_register_style('mycss', get_template_directory_uri() .  '/css/mycss.css');
   wp_enqueue_style('custom_css');
   wp_enqueue_style('bootstrap.min');
   wp_enqueue_style('animate.min');
   wp_enqueue_style('fontawesome.all.min');
   wp_enqueue_style('owl-carousel.min');
   wp_enqueue_style('meanmenu.min');
   wp_enqueue_style('cssanimation.min');
   wp_enqueue_style('default');
   wp_enqueue_style('style');
   wp_enqueue_style('responsive');
   wp_enqueue_style('mycss');

   	// js
    wp_register_script('jquery-3.3.1.min', get_template_directory_uri() .  '/js/vendor/jquery-3.3.1.min.js',array('jquery'),false,true);
    wp_register_script('bootstrap.min', get_template_directory_uri() .  '/js/bootstrap.min.js',array('jquery'),false,true);
    wp_register_script('popper.min', get_template_directory_uri() .  '/js/popper.min.js',array('jquery'),false,true);
    wp_register_script('owlcarousel.min', get_template_directory_uri() .  '/js/owlcarousel.min.js',array('jquery'),false,true);
    wp_register_script('meanmenu.min', get_template_directory_uri() .  '/js/meanmenu.min.js',array('jquery'),false,true);
    wp_register_script('counterup.min', get_template_directory_uri() .  '/js/counterup.min.j',array('jquery'),false,true);
    wp_register_script('scrollup.min', get_template_directory_uri() .  '/js/scrollup.min.js',array('jquery'),false,true);
    wp_register_script('waypoints.min', get_template_directory_uri() .  '/js/waypoints.min.js',array('jquery'),false,true);
    wp_register_script('imagesloaded.pkgd.min', get_template_directory_uri() .  '/js/imagesloaded.pkgd.min.js',array('jquery'),false,true);
    wp_register_script('isotope.min', get_template_directory_uri() .  '/js/isotope.min.js',array('jquery'),false,true);
    wp_register_script('main', get_template_directory_uri() .  '/js/main.js',array('jquery'),false,true);
    wp_enqueue_script('jquery-3.3.1.min');
    wp_enqueue_script('bootstrap.min');
    wp_enqueue_script('popper.min');
    wp_enqueue_script('owlcarousel.min');
    wp_enqueue_script('meanmenu.min');
    wp_enqueue_script('counterup.min');
    wp_enqueue_script('scrollup.min');
    wp_enqueue_script('waypoints.min');
    wp_enqueue_script('imagesloaded.pkgd.min');
    wp_enqueue_script('isotope.min');
    wp_enqueue_script('main');
   }
   add_action('wp_enqueue_scripts','sherpa_script');
 ?>