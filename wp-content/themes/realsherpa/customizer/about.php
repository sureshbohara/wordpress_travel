<?php 
function about_customize_register( $wp_customize ) {
    
    $wp_customize->add_section('sherpa_about_section', array(
        'title' => 'About Us Section',
        'description'   => 'Update Your Text',    
    ));

    $wp_customize->add_setting('title', array(
        'default'        => 'Type Title',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('title_haldel', array(
        'label'   => 'About Title',
        'section' => 'sherpa_about_section',
        'settings'  => 'title',
        'type'    => 'text',
    ));


    $wp_customize->add_setting('description', array(
        'default'        => 'Type Title Description',
        'transport'   => 'refresh',
         'sanitize_callback' => 'sanitize_textarea_field',
     ));
     $wp_customize->add_control('description_haldel', array(
        'label'   => 'About Description',
        'section' => 'sherpa_about_section',
        'settings'  => 'description',
        'type'    => 'textarea',
    ));


    $wp_customize->add_setting('button', array(
        'default'        => 'Button Text',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('button_haldel', array(
        'label'   => 'Button Text',
        'section' => 'sherpa_about_section',
        'settings'  => 'button',
        'type'    => 'text',
    ));

     $wp_customize->add_setting('link', array(
        'default'        => 'Button Text',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('link_haldel', array(
        'label'   => 'Button Link',
        'section' => 'sherpa_about_section',
        'settings'  => 'link',
        'type'    => 'text',
    ));






    $wp_customize->add_setting('priority_title', array(
        'default'        => 'Priority Title',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('priority_title_haldel', array(
        'label'   => 'Priority Title',
        'section' => 'sherpa_about_section',
        'settings'  => 'priority_title',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('priority_description', array(
        'default'        => 'Type Priority Description',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('priority_description_haldel', array(
        'label'   => 'Priority Description',
        'section' => 'sherpa_about_section',
        'settings'  => 'priority_description',
        'type'    => 'textarea',
    ));
}
?>