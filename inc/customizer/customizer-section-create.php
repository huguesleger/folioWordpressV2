<?php
/**
 * portfoliohl customizer-section-create
 *
 * @package portfoliohl
 */

/*------------------------------------------------------------------------*/
/* Section create
/*------------------------------------------------------------------------*/
$wp_customize->add_section(
    'section_create',
    array(
        'title'         => esc_html__('Section Create', 'portfoliohl'),
        'priority'      => 11,
        'panel'         => 'portfoliohl_sections_panel',
    )
);
// Show section
$wp_customize->add_setting(
   'create_disable',
    array(
        'sanitize_callback' => 'portfoliohl_sanitize_checkbox',
        'default'           => '',
    )
);
$wp_customize->add_control(
   'create_disable',
    array(
        'type'        => 'checkbox',
        'label'       => esc_html__('cacher cette section ?', 'portfoliohl'),
        'section'     => 'section_create',
    )
);
//title section
$wp_customize->add_setting(
    'section_create_title',
    array(
        'default'           => '',
        'sanitize_callback' => 'portfoliohl_sanitize_text',
        'transport' => 'postMessage',
    )
);
$wp_customize->add_control(
    'section_create_title',
    array(
        'type'        => 'text',
        'label'       =>  esc_html__('Titre:', 'portfoliohl'),
        'section'     => 'section_create',
    )
);
//description
$wp_customize->add_setting(
    'section_create_description',
    array(
        'default'           => '',
        'sanitize_callback' => 'portfoliohl_sanitize_text',
        'transport' => 'postMessage',
    )
);
$wp_customize->add_control(
    'section_create_description',
    array(
        'type'        => 'textarea',
        'label'       =>  esc_html__('Description:', 'portfoliohl'),
        'section'     => 'section_create',
    )
);
