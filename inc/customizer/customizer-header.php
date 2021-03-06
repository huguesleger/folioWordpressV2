<?php
/**
 * portfoliohl customizer header
 *
 * @package portfoliohl
 */

/*------------------------------------------------------------------------*/
/* Header hello
/*------------------------------------------------------------------------*/
$wp_customize->add_section(
    'header_hello',
    array(
        'title'         => esc_html__('Hello', 'portfolio_hl'),
        'priority'      => 10,
        'panel'         => 'portfoliohl_header_panel',
    )
);
/* Intro
----------------------------------------------------------------------*/
$wp_customize->add_control( new Portfoliohl_Info( $wp_customize, 'intro', array(
  'label' => esc_html__('Intro ', 'portfoliohl'),
  'section' => 'header_hello',
  'settings' => array(),
  'priority' => 10
  ) )
);
//texte intro
$wp_customize->add_setting(
    'header_txt_intro',
    array(
        'default'           => '',
        'sanitize_callback' => 'portfoliohl_sanitize_text',
    )
);
$wp_customize->add_control(
    'header_txt_intro',
    array(
        'type'        => 'text',
        'label'       =>  esc_html__('Texte:', 'portfoliohl'),
        'section'     => 'header_hello',
    )
);
/* Metier
----------------------------------------------------------------------*/
$wp_customize->add_control( new Portfoliohl_Info( $wp_customize, 'metier', array(
  'label' => esc_html__('Métier ', 'portfoliohl'),
  'section' => 'header_hello',
  'settings' => array(),
  'priority' => 10
  ) )
);
//texte metier 1
$wp_customize->add_setting(
    'header_txt_metier_1',
    array(
        'default'           => '',
        'sanitize_callback' => 'portfoliohl_sanitize_text',
    )
);
$wp_customize->add_control(
    'header_txt_metier_1',
    array(
        'type'        => 'text',
        'label'       =>  esc_html__('Texte 1:', 'portfoliohl'),
        'section'     => 'header_hello',
    )
);
//texte metier 2
$wp_customize->add_setting(
    'header_txt_metier_2',
    array(
        'default'           => '',
        'sanitize_callback' => 'portfoliohl_sanitize_text',
    )
);
$wp_customize->add_control(
    'header_txt_metier_2',
    array(
        'type'        => 'text',
        'label'       =>  esc_html__('Texte 2:', 'portfoliohl'),
        'section'     => 'header_hello',
    )
);
//description metier 1
$wp_customize->add_setting(
    'header_desc_metier_1',
    array(
        'default'           => '',
        'sanitize_callback' => 'portfoliohl_sanitize_text',
    )
);
$wp_customize->add_control(
    'header_desc_metier_1',
    array(
        'type'        => 'text',
        'label'       =>  esc_html__('Description:', 'portfoliohl'),
        'section'     => 'header_hello',
    )
);
//description metier 2
$wp_customize->add_setting(
    'header_desc_metier_2',
    array(
        'default'           => '',
        'sanitize_callback' => 'portfoliohl_sanitize_text',
    )
);
$wp_customize->add_control(
    'header_desc_metier_2',
    array(
        'type'        => 'text',
        'label'       =>  esc_html__('Description 2:', 'portfoliohl'),
        'section'     => 'header_hello',
    )
);
