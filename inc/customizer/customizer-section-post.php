<?php
/**
 * portfoliohl customizer-section-post
 *
 * @package portfoliohl
 */

/*------------------------------------------------------------------------*/
/* Section post
/*------------------------------------------------------------------------*/
$wp_customize->add_section(
    'section_post',
    array(
        'title'         => esc_html__('Section Last Work', 'portfoliohl'),
        'priority'      => 13,
        'panel'         => 'portfoliohl_sections_panel',
    )
);
// Show section
$wp_customize->add_setting(
   'post_disable',
    array(
        'sanitize_callback' => 'portfoliohl_sanitize_checkbox',
        'default'           => '',
    )
);
$wp_customize->add_control(
   'post_disable',
    array(
        'type'        => 'checkbox',
        'label'       => esc_html__('cacher cette section ?', 'portfoliohl'),
        'section'     => 'section_post',
    )
);
//title section
$wp_customize->add_setting(
    'section_post_title',
    array(
        'default'           => '',
        'sanitize_callback' => 'portfoliohl_sanitize_text',
        'transport' => 'postMessage',
    )
);
$wp_customize->add_control(
    'section_post_title',
    array(
        'type'        => 'text',
        'label'       =>  esc_html__('Titre:', 'portfoliohl'),
        'section'     => 'section_post',
    )
);
//description
$wp_customize->add_setting(
    'section_post_description',
    array(
        'default'           => '',
        'sanitize_callback' => 'portfoliohl_sanitize_text',
        'transport' => 'postMessage',
    )
);
$wp_customize->add_control(
    'section_post_description',
    array(
        'type'        => 'textarea',
        'label'       =>  esc_html__('Description:', 'portfoliohl'),
        'section'     => 'section_post',
    )
);
