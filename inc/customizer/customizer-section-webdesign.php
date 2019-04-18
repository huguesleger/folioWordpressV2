<?php
/**
 * portfoliohl customizer-section-webdesign
 *
 * @package portfoliohl
 */

/*------------------------------------------------------------------------*/
/* Section webdesign
/*------------------------------------------------------------------------*/
$wp_customize->add_section(
   'section_webdesign',
 array(
     'title'       => esc_html__('Section Webdesign', 'portfoliohl'),
     'priority'    => 12,
     'panel'       => 'portfoliohl_sections_panel',
 )
);
// Show section
$wp_customize->add_setting(
    'webdesign_disable',
    array(
        'sanitize_callback' => 'portfoliohl_sanitize_checkbox',
        'default'           => '',
    )
);
$wp_customize->add_control(
    'webdesign_disable',
    array(
        'type'        => 'checkbox',
        'label'       => esc_html__('cacher cette section ?', 'portfoliohl'),
        'section'     => 'section_webdesign',
    )
);
// title section
$wp_customize->add_setting(
    'section_webdesign_title',
    array(
        'default'           => '',
        'sanitize_callback' => 'portfoliohl_sanitize_text',
        'transport' => 'postMessage',
    )
);
$wp_customize->add_control(
    'section_webdesign_title',
    array(
        'type'      => 'text',
        'label'     => esc_html__('Titre section:', 'portfoliohl'),
        'section'   => 'section_webdesign',
    )
);
// description section
$wp_customize->add_setting(
    'section_webdesign_desc',
    array(
        'default'           => '',
        'sanitize_callback' => 'portfoliohl_sanitize_text',
        'transport' => 'postMessage',
    )
);
$wp_customize->add_control(
    'section_webdesign_desc',
    array(
        'type'      => 'textarea',
        'label'     => esc_html__('Description section:', 'portfoliohl'),
        'section'   => 'section_webdesign',
    )
);
$wp_customize->add_setting(
    'section_webdesign_btn_url',
    array(
        'sanitize_callback' => 'esc_url_raw',
    )
  );
$wp_customize->add_control(
    'section_webdesign_btn_url',
    array(
        'label'   => esc_html__('Lien du bouton', 'portfoliohl'),
        'section' => 'section_webdesign',
        'type'    => 'text',
    )
  );
$wp_customize->add_setting(
    'section_webdesign_btn_title',
    array(
        'sanitize_callback' => 'portfoliohl_sanitize_text',
        'transport' => 'postMessage',
    )
  );

$wp_customize->add_control(
    'section_webdesign_btn_title',
    array(
        'label'   => esc_html__('Titre du bouton', 'portfoliohl'),
        'section' => 'section_webdesign',
        'type'    => 'text',
    )
  );
/* Options
----------------------------------------------------------------------*/
$wp_customize->add_control( new Portfoliohl_Info( $wp_customize, 'parallax_webdesign', array(
  'label'     => esc_html__('Parallax ', 'portfoliohl'),
  'section'   => 'section_webdesign',
  'settings'  => array(),
  ) )
);
// speed parallax
$wp_customize->add_setting(
    'section_webdesign_parallax_speed',
    array(
        'default'           => $defaults['webdesign_parallax_speed'],
        'sanitize_callback' => 'absint',

    )
);
$wp_customize->add_control(
    'section_webdesign_parallax_speed',
    array(
        'label'         => __( 'Force:', 'portfoliohl' ),
        'section'       => 'section_webdesign',
        'type'          => 'number',
        'description'   => esc_html__('force parallax [defaut: 1.85]', 'portfoliohl'),
    )
);
//image parallax
$wp_customize->add_setting(
     'section_webdesign_parallax_img',
     array(
         'default'            => $defaults['webdesign_parallax_img'],
         'sanitize_callback'  => 'esc_url_raw',
         'transport' => 'postMessage',
     )
 );
$wp_customize->add_control(
   new WP_Customize_Image_Control(
       $wp_customize,
     'section_webdesign_parallax_img',
       array(
          'label'       => esc_html__( 'Image:', 'portfoliohl' ),
          'description' => esc_html__('format png', 'portfoliohl'),
          'type'        => 'image',
          'section'     => 'section_webdesign',
       )
   )
);
/* Device
----------------------------------------------------------------------*/
$wp_customize->add_control( new Portfoliohl_Info( $wp_customize, 'device_webdesign', array(
  'label'     => esc_html__('Device ', 'portfoliohl'),
  'section'   => 'section_webdesign',
  'settings'  => array(),
  ) )
);
// title device
$wp_customize->add_setting(
    'section_webdesign_device_title',
    array(
        'default'           => '',
        'sanitize_callback' => 'portfoliohl_sanitize_text',
        'transport' => 'postMessage',
    )
);
$wp_customize->add_control(
    'section_webdesign_device_title',
    array(
        'type'      => 'text',
        'label'     => esc_html__('Titre:', 'portfoliohl'),
        'section'   => 'section_webdesign',
    )
);
// description section
$wp_customize->add_setting(
    'section_webdesign_device_desc',
    array(
        'default'           => '',
        'sanitize_callback' => 'portfoliohl_sanitize_text',
        'transport' => 'postMessage',
    )
);
$wp_customize->add_control(
    'section_webdesign_device_desc',
    array(
        'type'      => 'textarea',
        'label'     => esc_html__('Description:', 'portfoliohl'),
        'section'   => 'section_webdesign',
    )
);
$wp_customize->add_setting(
    'section_webdesign_device_btn_url',
    array(
        'sanitize_callback' => 'esc_url_raw',
    )
  );
$wp_customize->add_control(
    'section_webdesign_device_btn_url',
    array(
        'label'   => esc_html__('Lien du bouton', 'portfoliohl'),
        'section' => 'section_webdesign',
        'type'    => 'text',
    )
  );
$wp_customize->add_setting(
    'section_webdesign_device_btn_title',
    array(
        'sanitize_callback' => 'portfoliohl_sanitize_text',
        'transport' => 'postMessage',
    )
  );

$wp_customize->add_control(
    'section_webdesign_device_btn_title',
    array(
        'label'   => esc_html__('Titre du bouton', 'portfoliohl'),
        'section' => 'section_webdesign',
        'type'    => 'text',
    )
  );
//image device
$wp_customize->add_setting(
     'section_webdesign_device_img',
     array(
         'default'            => $defaults['webdesign_device_img'],
         'sanitize_callback'  => 'esc_url_raw',
         'transport' => 'postMessage',
     )
 );
$wp_customize->add_control(
   new WP_Customize_Image_Control(
       $wp_customize,
     'section_webdesign_device_img',
       array(
          'label'       => esc_html__( 'Image:', 'portfoliohl' ),
          'description' => esc_html__('format png, jpg, gif', 'portfoliohl'),
          'type'        => 'image',
          'section'     => 'section_webdesign',
       )
   )
);
