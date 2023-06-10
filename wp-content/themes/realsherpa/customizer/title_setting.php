<?php 
function title_customize_register( $wp_customize ) { 
  // social section
    $wp_customize->add_section('sherpa_title_section', array(
        'title' => 'Update Section Title',
        'description'   => 'Update Your Section Title',
    ));


    $wp_customize->add_setting('title1', array(
        'default'        => 'Type Your First Title',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('title1_haldel', array(
        'label'   => 'Tour Package Title',
        'section' => 'sherpa_title_section',
        'settings'  => 'title1',
        'type'    => 'text',
    ));


    $wp_customize->add_setting('title2', array(
        'default'        => 'Type Your Second Title',
        'transport'   => 'refresh',
     ));
    $wp_customize->add_control('title2_haldel', array(
        'label'   => 'Region Title',
        'section' => 'sherpa_title_section',
        'settings'  => 'title2',
        'type'    => 'text',
    ));


     $wp_customize->add_setting('title3', array(
        'default'        => 'Type Your Third Title',
        'transport'   => 'refresh',
     ));
    $wp_customize->add_control('title3_haldel', array(
        'label'   => 'Gallery Title',
        'section' => 'sherpa_title_section',
        'settings'  => 'title3',
        'type'    => 'text',
    ));


     $wp_customize->add_setting('title4', array(
        'default'        => 'Type Your Forth Title',
        'transport'   => 'refresh',
     ));
    $wp_customize->add_control('title4_haldel', array(
        'label'   => 'About Us Title',
        'section' => 'sherpa_title_section',
        'settings'  => 'title4',
        'type'    => 'text',
    ));


     $wp_customize->add_setting('title5', array(
        'default'        => 'Type Your Fifth Title',
        'transport'   => 'refresh',
     ));
    $wp_customize->add_control('title5_haldel', array(
        'label'   => 'Review Title',
        'section' => 'sherpa_title_section',
        'settings'  => 'title5',
        'type'    => 'text',
    ));


     $wp_customize->add_setting('title6', array(
        'default'        => 'Type Your Sixth Title',
        'transport'   => 'refresh',
     ));
    $wp_customize->add_control('title6_haldel', array(
        'label'   => 'Good Regions Title',
        'section' => 'sherpa_title_section',
        'settings'  => 'title6',
        'type'    => 'text',
    ));


     $wp_customize->add_setting('title7', array(
        'default'        => 'Type Your Seven Title',
        'transport'   => 'refresh',
     ));
    $wp_customize->add_control('title7_haldel', array(
        'label'   => 'Partner Title',
        'section' => 'sherpa_title_section',
        'settings'  => 'title7',
        'type'    => 'text',
    ));



   $wp_customize->add_setting('title8', array(
        'default'        => 'Type Your Eight Title',
        'transport'   => 'refresh',
     ));
    $wp_customize->add_control('title8_haldel', array(
        'label'   => 'Recommended Title',
        'section' => 'sherpa_title_section',
        'settings'  => 'title8',
        'type'    => 'text',
    ));


     $wp_customize->add_setting('copy_right_footer', array(
        'default'        => 'By Realsherpa',
        'transport'   => 'refresh',
     ));
    $wp_customize->add_control('copy_right_footer_haldel', array(
        'label'   => 'Copy Right Text',
        'section' => 'sherpa_title_section',
        'settings'  => 'copy_right_footer',
        'type'    => 'text',
    ));
}
?>