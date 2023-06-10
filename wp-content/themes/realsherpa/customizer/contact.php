<?php 
function contact_customize_register( $wp_customize ) {
    $wp_customize->add_panel('contact', array(
        'title' => __('Contact Details','sherpa'),
        'description'   => __('Update Your Contact','sherpa'),
        'priority' => 100
    ));
    
  // social section
    $wp_customize->add_section('sherpa_social_section', array(
        'title' => 'Social Contact',
        'description'   => 'Update Your Social Contact',
        'panel' => 'contact',
    
    ));

//  facebook setting
    $wp_customize->add_setting('facebook', array(
        'default'        => 'Type Your Facebook Link',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('facebook_haldel', array(
        'label'   => 'Facebok Link',
        'section' => 'sherpa_social_section',
        'settings'  => 'facebook',
        'type'    => 'text',
    ));
// facebook end
  // twitter setting
    $wp_customize->add_setting('twitter', array(
        'default'        => 'Type Your Twitter Link',
        'transport'   => 'refresh',
     ));
    $wp_customize->add_control('twitter_haldel', array(
        'label'   => 'Twitter Link',
        'section' => 'sherpa_social_section',
        'settings'  => 'twitter',
        'type'    => 'text',
    ));
    // twitter end

 // linkedin setting
  $wp_customize->add_setting('linkedin', array(
    'default'        => 'Type Linkedin Link',
    'transport'   => 'refresh',
 ));
$wp_customize->add_control('linkedin_haldel', array(
    'label'   => 'Linkedin Link',
    'section' => 'sherpa_social_section',
    'settings'  => 'linkedin',
    'type'    => 'text',
));
//end linkedin
 // youtube setting
 $wp_customize->add_setting('youtube', array(
    'default'        => 'Type Your Youtube Link',
    'transport'   => 'refresh',
 ));
$wp_customize->add_control('youtube_haldel', array(
    'label'   => 'Youtube Link',
    'section' => 'sherpa_social_section',
    'settings'  => 'youtube',
    'type'    => 'text',
));
//youtube end
 // instagram setting
 $wp_customize->add_setting('instagram', array(
    'default'        => 'Type Your Instagram Link',
    'transport'   => 'refresh',
 ));
$wp_customize->add_control('instagram_haldel', array(
    'label'   => 'Instagram Link',
    'section' => 'sherpa_social_section',
    'settings'  => 'instagram',
    'type'    => 'text',
));
//instagram end

// contact section
$wp_customize->add_section('sherpa_contact_section', array(
    'title' => 'Contact Setting',
    'description'   => 'Update Your Contact Details',
    'panel' => 'contact',

));

// mobile setting
$wp_customize->add_setting('mobile_number', array(
    'default'        => 'Enter Your Contact Number',
    'transport'   => 'refresh',
 ));

 $wp_customize->add_control('mobile_haldel', array(
    'label'   => 'Mobile Number',
    'section' => 'sherpa_contact_section',
    'settings'  => 'mobile_number',
    'type'    => 'text',
));
//mobile end

// email setting
$wp_customize->add_setting('email_setting', array(
    'default'        => 'Type Email Address',
    'transport'   => 'refresh',
 ));
 $wp_customize->add_control('email_haldel', array(
    'label'   => 'Email Address',
    'section' => 'sherpa_contact_section',
    'settings'  => 'email_setting',
    'type'    => 'text',
));
// email end
// address setting
$wp_customize->add_setting('address', array(
    'default'        => 'Type Your Address & Location',
    'transport'   => 'refresh',
 ));
 $wp_customize->add_control('address_haldel', array(
    'label'   => 'Address & Location',
    'section' => 'sherpa_contact_section',
    'settings'  => 'address',
    'type'    => 'text',
));
//address end
// opening hour setting
$wp_customize->add_setting('opening_hour', array(
    'default'        => '5AM - 5PM',
    'transport'   => 'refresh',
 ));
 $wp_customize->add_control('opening_hour_haldel', array(
    'label'   => 'Opening Hour',
    'section' => 'sherpa_contact_section',
    'settings'  => 'opening_hour',
    'type'    => 'text',
));
//opening hour end
 // map location section
 $wp_customize->add_section('map_section', array(
    'title' => 'Map Location',
    'description'   => 'Update Your data',
    'panel' => 'contact',
));
//map location
$wp_customize->add_setting('map_location_link', array(
    'default'        => 'Google Map Link',
    'transport'   => 'refresh',
 ));
 $wp_customize->add_control('walker_map_location_link', array(
    'label'   => 'Map Location',
    'section' => 'map_section',
    'settings'  => 'map_location_link',
    'type'    => 'text',
));
//map location end
}
?>