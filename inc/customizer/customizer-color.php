<?php
/**
 * portfoliohl customizer-color
 *
 * @package portfoliohl
 */

 /*------------------------------------------------------------------------*/
 /* Color theme
 /*------------------------------------------------------------------------*/
 $wp_customize->add_section(
     'color_type',
     array(
         'title'         => __('Couleurs', 'portfoliohl'),
         'priority'      => 17
     )
 );
 //titre color theme
 $wp_customize->add_control( new Portfoliohl_Info( $wp_customize, 'theme', array(
     'label' => __('Couleur du thème', 'portfoliohl'),
     'section' => 'color_type',
     'settings' => array(),
     ) )
 );
 // color logo
 $wp_customize->add_setting(
     'color_theme_logo',
     array(
         'default'           => $defaults['color_logo'],
         'sanitize_callback' => 'portfoliohl_sanitize_text',
         'transport'          => 'postMessage',
     )
 );
 $wp_customize->add_control(
     new WP_Customize_Color_Control(
         $wp_customize,
         'color_theme_logo',
         array(
             'label'     => esc_html__('Couleur du logo:', 'portfoliohl'),
             'section'   => 'color_type',
         )
     )
 );
 // color primary
 $wp_customize->add_setting(
     'color_theme_primary',
     array(
         'default'           => $defaults['color_primary'],
         'sanitize_callback' => 'portfoliohl_sanitize_text',
         'transport'         => 'postMessage',
     )
 );
 $wp_customize->add_control(
     new WP_Customize_Color_Control(
         $wp_customize,
         'color_theme_primary',
         array(
             'label'     => esc_html__('Couleur principale:', 'portfoliohl'),
             'section'   => 'color_type',
         )
     )
 );
 // color secondary
 $wp_customize->add_setting(
     'color_theme_secondary',
     array(
         'default'           => $defaults['color_secondary'],
         'sanitize_callback' => 'portfoliohl_sanitize_text',
         'transport'         => 'postMessage',
     )
 );
 $wp_customize->add_control(
     new WP_Customize_Color_Control(
         $wp_customize,
         'color_theme_secondary',
         array(
             'label'     => esc_html__('Couleur secondaire:', 'portfoliohl'),
             'section'   => 'color_type',
         )
     )
 );

 //titre color nav
 $wp_customize->add_control( new Portfoliohl_Info( $wp_customize, 'nav', array(
     'label' => __('Couleur du menu', 'portfoliohl'),
     'section' => 'color_type',
     'settings' => array(),
     ) )
 );
 // color background color
 $wp_customize->add_setting(
     'color_nav_bg',
     array(
         'default'           => $defaults['color_nav'],
         'sanitize_callback' => 'portfoliohl_sanitize_text',
         'transport'         => 'postMessage',
     )
 );
 $wp_customize->add_control(
     new WP_Customize_Color_Control(
         $wp_customize,
         'color_nav_bg',
         array(
             'label'     => esc_html__('Background:', 'portfoliohl'),
             'section'   => 'color_type',
         )
     )
 );
