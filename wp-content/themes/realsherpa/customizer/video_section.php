<?php 
function video_customize_register( $wp_customize ) {
    
    $wp_customize->add_section('sherpa_parallax_video_section', array(
        'title' => 'Parallax Video Section',
        'description'   => 'Update Your Text',    
    ));

    $wp_customize->add_setting('video_title', array(
        'default'        => 'Video Parallax Title',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('video_title_haldel', array(
        'label'   => 'Parallax Title',
        'section' => 'sherpa_parallax_video_section',
        'settings'  => 'video_title',
        'type'    => 'text',
    ));



    $wp_customize->add_setting('video_description', array(
        'default'        => 'Video Parallax Description',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('video_description_haldel', array(
        'label'   => 'Parallax Description',
        'section' => 'sherpa_parallax_video_section',
        'settings'  => 'video_description',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('video_button', array(
        'default'        => 'Video Parallax Button Text',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('video_button_haldel', array(
        'label'   => 'Parallax Button Text',
        'section' => 'sherpa_parallax_video_section',
        'settings'  => 'video_button',
        'type'    => 'text',
    ));



     $wp_customize->add_setting('video_link', array(
        'default'        => 'Video Parallax Button Linkt',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('video_link_haldel', array(
        'label'   => 'Parallax Button Link',
        'section' => 'sherpa_parallax_video_section',
        'settings'  => 'video_link',
        'type'    => 'text',
    ));


     $wp_customize->add_setting( 'video_upload',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'absint',
             'type' => 'theme_mod',
   )
);



$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'video_upload',
   array(
      'label' => __( 'Default Media Control' ),
      'description' => esc_html__( 'This is the description for the Media Control' ),
      'section' => 'sherpa_parallax_video_section',
      'mime_type' => 'video',  // Required. Can be image, audio, video, application, text
      'button_labels' => array( // Optional
         'select' => __( 'Select File' ),
         'change' => __( 'Change File' ),
         'default' => __( 'Default' ),
         'remove' => __( 'Remove' ),
         'placeholder' => __( 'No file selected' ),
         'frame_title' => __( 'Select File' ),
         'frame_button' => __( 'Choose File' ),

      )
   )
) );



}
?>