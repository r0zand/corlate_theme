<?php 
add_action('customize_register','custom_register_header');
add_action('customize_register','custom_register_footer');
/*
 * Function Name: custom_register_header
 * Creating Customizer For Header 
*/
function custom_register_header( $wp_customize ) 
{
  $wp_customize->add_panel( 'header_setting', array(


    'title'          => __( 'Header Settings', 'corlatenew' ),// Title of the panel
    'description'    => __( 'Set editable text for certain content.', 'corlatenew' ), // Panel description
  ) );

  $wp_customize->add_section( 'custom_section_text' , array(
    'title'      => __( 'Custom Section for editing ', 'corlatenew' ),
    
     'panel'    => 'header_setting',// name of the panel 
   ) 
);

  $wp_customize->add_setting( 'custom_setting_text' , array(
    'type'      => 'theme_mod', //theme modification value for the current theme
    
   'transport' => 'refresh', //refresh the window with change of data 
 )  
);

  $wp_customize->add_setting( 'custom_setting_facebook' , array(
    'type'      => 'theme_mod', //theme modification value for the current theme
    
  //  'transport' => 'refresh', //refresh the window with change of data 
  )  
);

  $wp_customize->add_setting( 'custom_setting_twitter' , array(
    'type'      => 'theme_mod', //theme modification value for the current theme
    
   // 'transport' => 'refresh', //refresh the window with change of data 
  )  
);

  $wp_customize->add_setting( 'custom_setting_linkedin' , array(
    'type'      => 'theme_mod', //theme modification value for the current theme
    
   // 'transport' => 'refresh', //refresh the window with change of data 
  )  
);

  $wp_customize->add_setting( 'custom_setting_web' , array(
    'type'      => 'theme_mod', //theme modification value for the current theme
    
   // 'transport' => 'refresh', //refresh the window with change of data 
  )  
);

  $wp_customize->add_setting( 'custom_setting_skype' , array(
    'type'      => 'theme_mod', //theme modification value for the current theme
    
  //  'transport' => 'refresh', //refresh the window with change of data 
  )  
);

  
  $wp_customize->add_control( 'custom_control_text', array(
  'type' => 'text', // text
  'section' => 'custom_section_text', // section's id 
  'label' => __( 'Custom Text' ), // label name 
  'description' => __( 'This is a custom text box.' ), //description of textbox
   'settings'    => 'custom_setting_text', //setting's id 
 ) );
  
  $wp_customize->add_control( 'custom_control_facebook', array(
  'type' => 'url', // url
  'section' => 'custom_section_text', // section's id 
  'label' => __( 'Facebook URL' ), // label name 
  'description' => __( 'This is a url text box.' ), //description of textbox
   'settings'    => 'custom_setting_facebook', //setting's id 
 ) );

  $wp_customize->add_control( 'custom_control_twitter', array(
  'type' => 'url', // url
  'section' => 'custom_section_text', // section's id 
  'label' => __( 'twitter URL' ), // label name 
  'description' => __( 'This is a url text box.' ), //description of textbox
   'settings'    => 'custom_setting_twitter', //setting's id 
 ) );

  $wp_customize->add_control( 'custom_control_linkedin', array(
  'type' => 'url', // url
  'section' => 'custom_section_text', // section's id 
  'label' => __( 'LinkedIn URL' ), // label name 
  'description' => __( 'This is a url text box.' ), //description of textbox
   'settings'    => 'custom_setting_linkedin', //setting's id 
 ) );


  $wp_customize->add_control( 'custom_control_web', array(
  'type' => 'url', // url
  'section' => 'custom_section_text', // section's id 
  'label' => __( 'web URL' ), // label name 
  'description' => __( 'This is a url text box.' ), //description of textbox
   'settings'    => 'custom_setting_web', //setting's id 
 ) );


  $wp_customize->add_control( 'custom_control_skype', array(
  'type' => 'url', // url
  'section' => 'custom_section_text', // section's id 
  'label' => __( 'skype URL' ), // label name 
  'description' => __( 'This is a url text box.' ), //description of textbox
   'settings'    => 'custom_setting_skype', //setting's id 
 ) );

}
/*
 * Function Name: custom_register_Footer
 * Creating Customizer For Footer
*/

  function custom_register_footer( $wp_customize ) 
  {
    $wp_customize->add_panel( 'footer_setting', array(


    'title'          => __( 'Footer Settings', 'corlate' ),// Title of the panel
    'description'    => __( 'Set editable text for certain content.', 'corlatenew' ), // Panel description
  ) );

    $wp_customize->add_section( 'custom_section_text_footer' , array(
      'title'      => __( 'Custom Section for Footer Editing ', 'corlatenew' ),

     'panel'    => 'footer_setting',// name of the panel 
   ) 
  );

    $wp_customize->add_setting( 'custom_setting_text_company' , array(
    'type'      => 'theme_mod', //theme modification value for the current theme
    
   'transport' => 'refresh', //refresh the window with change of data 
 )  
  );

    $wp_customize->add_setting( 'custom_setting_text_rights' , array(
    'type'      => 'theme_mod', //theme modification value for the current theme
    
   'transport' => 'refresh', //refresh the window with change of data 
 )  
  );

     $wp_customize->add_setting( 'custom_setting_company_url' , array(
    'type'      => 'theme_mod', //theme modification value for the current theme
    
   'transport' => 'refresh', //refresh the window with change of data 
 )  
  );


    $wp_customize->add_control( 'custom_control_company', array(
  'type' => 'text', // text
  'section' => 'custom_section_text_footer', // section's id 
  'label' => __( 'Company Name' ), // label name 
  'description' => __( 'This is a text box.' ), //description of textbox
   'settings'    => 'custom_setting_text_company', //setting's id 
 ) );

    $wp_customize->add_control( 'custom_control_rights', array(
  'type' => 'text', // text
  'section' => 'custom_section_text_footer', // section's id 
  'label' => __( 'Rights' ), // label name 
  'description' => __( 'This is a text box.' ), //description of textbox
   'settings'    => 'custom_setting_text_rights', //setting's id 
 ) );

  $wp_customize->add_control( 'custom_control_company_url', array(
  'type' => 'url', // text
  'section' => 'custom_section_text_footer', // section's id 
  'label' => __( 'URL' ), // label name 
  'description' => __( 'This is a url.' ), //description of textbox
   'settings'    => 'custom_setting_company_url', //setting's id 
 ) );

  }
  ?>