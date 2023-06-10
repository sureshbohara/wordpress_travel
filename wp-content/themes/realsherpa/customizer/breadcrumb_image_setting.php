<?php 
function breadcrumb_customize_register( $wp_customize ) {
    
  // social section
    $wp_customize->add_section('sherpa_breadcrumb_section', array(
        'title' => 'Setup Breadcrumb Image',
        'description'   => 'Update Your Image',
    ));


    $wp_customize->add_setting('breadcrumb_settings', array(
     'default'        => '',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'breadcrumb_image_control', array(
    'label' => 'Breadcrumb Image',
    'settings'  => 'breadcrumb_settings',
    'section'   => 'sherpa_breadcrumb_section'
    )));



}
?>