<?php 
function gallery_customize_register( $wp_customize ) {
    
  // social section
    $wp_customize->add_section('sherpa_main_gallery_section', array(
        'title' => 'Main Gallery Image',
        'description'   => 'Update Your Image',
    ));


    $wp_customize->add_setting('main_gallery_settings', array(
     'default'        => '',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'main_gallery_control', array(
    'label' => 'Main Gallery Image',
    'settings'  => 'main_gallery_settings',
    'section'   => 'sherpa_main_gallery_section'
    )));



}
?>