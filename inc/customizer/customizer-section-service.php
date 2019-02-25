<?php
/**
 * portfoliohl customizer-section-service
 *
 * @package portfoliohl
 */

/*------------------------------------------------------------------------*/
/* Section service
/*------------------------------------------------------------------------*/
$wp_customize->add_section(
   'section_service',
   array(
       'title'       => esc_html__('Section Service', 'portfoliohl'),
       'priority'    => 12,
       'panel'       => 'portfoliohl_sections_panel',
   )
);
// Show section
$wp_customize->add_setting(
    'service_disable',
    array(
        'default'           => '',
        'sanitize_callback' => 'portfoliohl_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'service_disable',
    array(
        'type'        => 'checkbox',
        'label'       => esc_html__('cacher cette section ?', 'portfoliohl'),
        'section'     => 'section_service',
    )
);
// title section
$wp_customize->add_setting(
    'section_service_title',
    array(
        'default'           => '',
        'sanitize_callback' => 'portfoliohl_sanitize_text',
    )
);
$wp_customize->add_control(
    'section_service_title',
    array(
        'type'      => 'text',
        'label'     => esc_html__('Titre section:', 'portfoliohl'),
        'section'   => 'section_service',
    )
);
// description section
$wp_customize->add_setting(
    'section_service_desc',
    array(
        'default'           => '',
        'sanitize_callback' => 'portfoliohl_sanitize_text',
    )
);
$wp_customize->add_control(
    'section_service_desc',
    array(
        'type'      => 'textarea',
        'label'     => esc_html__('Description section:', 'portfoliohl'),
        'section'   => 'section_service',
    )
);
/* Options
----------------------------------------------------------------------*/
$wp_customize->add_control( new Portfoliohl_Info( $wp_customize, 'options_service', array(
  'label' => esc_html__('Options ', 'portfoliohl'),
  'section'   => 'section_service',
  'settings'  => array(),
  ) )
);
// style icon
$wp_customize->add_setting(
    'section_service_style_icon',
    array(
        'default'           => $defaults['service_style_icon'],
        'sanitize_callback' => 'portfoliohl_sanitize_text',
    )
);
$wp_customize->add_control(
    'section_service_style_icon',
    array(
        'label'         => esc_html__('Style icon:','portfoliohl'),
        'type'          => 'select',
        'section'       => 'section_service',
        'choices'       => array(
         'icon-square'  => esc_html__( 'square'),
         'icon-round'   => esc_html__( 'round'),
    )
  )
);
// class
$wp_customize->add_setting(
    'section_service_class',
    array(
        'default'           => $defaults['service_class'],
        'sanitize_callback' => 'portfoliohl_sanitize_text',
    )
);
$wp_customize->add_control(
    'section_service_class',
    array(
        'label'                   =>esc_html__('Style d\'affichage:','portfoliohl'),
        'type'                    => 'select',
        'section'                 => 'section_service',
        'choices'                 => array(
         'style-inline' => esc_html__( 'inline'),
         'style-column'  => esc_html__( 'column'),
        )
    )
);
/* Icon
----------------------------------------------------------------------*/
for ($c = 1; $c <= 6; $c++) {
$wp_customize->add_control( new Portfoliohl_Info( $wp_customize, 'icon' . $c, array(
  'label' => esc_html__('Icon ', 'portfoliohl') . $c,
  'section'   => 'section_service',
  'settings'  => array(),
  ) )
);

// icon
$wp_customize->add_setting(
    'section_service_icon_' . $c,
    array(
        'default'           => '',
        'sanitize_callback' => 'portfoliohl_sanitize_text',
    )
);
$wp_customize->add_control(
    'section_service_icon_' . $c,
    array(
        'label'                     => esc_html__('Liste icon:','portfoliohl'),
        'type'                      => 'select',
        'section'                   => 'section_service',
        'choices'                   => array(
          ''                        => esc_html__(''),
         'portfoliohl-browser'      => esc_html__( 'browser'),
         'portfoliohl-laptop'       => esc_html__( 'laptop'),
         'portfoliohl-light-bulb'   => esc_html__( 'light-bulb'),
         'portfoliohl-responsive'   => esc_html__( 'responsive'),
         'portfoliohl-settings'     => esc_html__( 'settings'),
         'portfoliohl-vector'       => esc_html__( 'vector'),
        )
    )
);
//icon description
$wp_customize->add_setting(
    'section_service_icon_desc_' . $c,
    array(
        'default'           => '',
        'sanitize_callback' => 'portfoliohl_sanitize_text',
    )
);
$wp_customize->add_control(
    'section_service_icon_desc_' . $c,
    array(
        'label' 	=> __( 'Description:', 'portfoliohl' ),
        'section' 	=> 'section_service',
        'type' 		=> 'textarea',
    )
);
}
