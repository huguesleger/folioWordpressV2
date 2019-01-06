<?php
/**
 * portfoliohl customizer-portfolio
 *
 * @package portfoliohl
 */

/*------------------------------------------------------------------------*/
/* Portfolio
/*------------------------------------------------------------------------*/
$wp_customize->add_section(
    'portfolio',
    array(
        'title'         => esc_html__('Portfolio', 'portfoliohl'),
        'priority'      => 10
    )
);
//grid portfolio
$wp_customize->add_setting(
    'portfolio_grid',
    array(
      'default' 					 => $defaults['portfolio_grid'],
      'sanitize_callback'  =>'portfoliohl_sanitize_text',
    )
);
$wp_customize->add_control(
    'portfolio_grid',
    array(
        'type'        => 'select',
        'label'       => esc_html__('Grille', 'portfoliohl'),
        'section'     => 'portfolio',
        'choices' => array(
            2 => 2,
            3 => 3,
            4 => 4
        )
    )
);
//class
$wp_customize->add_setting(
    'portfolio_class',
    array(
        'default'           => $defaults['portfolio_class'],
        'sanitize_callback' => 'portfoliohl_sanitize_text',
    )
);
$wp_customize->add_control(
    'portfolio_class',
    array(
        'label'             =>esc_html__('Style d\'affichage:','portfoliohl'),
        'type'              => 'select',
        'section'           => 'portfolio',
        'choices'           => array(
         'container'        => esc_html__( 'container'),
         'container-fluid'  => esc_html__( 'container-fluid'),
        )
    )
);
