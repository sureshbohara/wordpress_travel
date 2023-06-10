<?php 
function parallax_customize_register( $wp_customize ) {
    
    $wp_customize->add_section('sherpa_parallax_section', array(
        'title' => 'Parallax Section',
        'description'   => 'Update Your Text',    
    ));

    $wp_customize->add_setting('parallax_title', array(
        'default'        => 'Parallax Title',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('parallax_title_haldel', array(
        'label'   => 'Parallax Title',
        'section' => 'sherpa_parallax_section',
        'settings'  => 'parallax_title',
        'type'    => 'text',
    ));


    $wp_customize->add_setting('parallax_title_second', array(
        'default'        => 'Second Parallax Title',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('parallax_title_second_haldel', array(
        'label'   => 'Second Parallax Title',
        'section' => 'sherpa_parallax_section',
        'settings'  => 'parallax_title_second',
        'type'    => 'text',
    ));


    $wp_customize->add_setting('parallax_description', array(
        'default'        => 'Parallax Description',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('parallax_description_haldel', array(
        'label'   => 'Parallax Description',
        'section' => 'sherpa_parallax_section',
        'settings'  => 'parallax_description',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('parallax_button', array(
        'default'        => 'Parallax Button Text',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('parallax_button_haldel', array(
        'label'   => 'Parallax Button Text',
        'section' => 'sherpa_parallax_section',
        'settings'  => 'parallax_button',
        'type'    => 'text',
    ));

     $wp_customize->add_setting('parallax_link', array(
        'default'        => 'Parallax Button Linkt',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('parallax_link_haldel', array(
        'label'   => 'Parallax Button Link',
        'section' => 'sherpa_parallax_section',
        'settings'  => 'parallax_link',
        'type'    => 'text',
    ));
}
?>