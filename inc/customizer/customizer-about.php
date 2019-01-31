<?php
/**
 * portfoliohl customizer-about
 *
 * @package portfoliohl
 */

/*------------------------------------------------------------------------*/
/* About
/*------------------------------------------------------------------------*/
$wp_customize->add_panel( 'portfoliohl_section_about_panel', array(
    'priority'       => 16,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __('A propos', 'portfoliohl'),
) );

/* cursus
----------------------------------------------------------------------*/
$wp_customize->add_section(
    'section_cursus',
    array(
        'title'         => __('Section cursus', 'portfoliohl'),
        'priority'      => 10,
        'panel'         => 'portfoliohl_section_about_panel',
    )
);

// Show section
$wp_customize->add_setting( 'cursus_disable',
    array(
        'sanitize_callback' => 'portfoliohl_sanitize_checkbox',
        'default'           => '',
    )
);
$wp_customize->add_control( 'cursus_disable',
    array(
        'type'        => 'checkbox',
        'label'       => esc_html__('cacher cette section ?', 'portfoliohl'),
        'section'     => 'section_cursus',
    )
);

for ($c = 1; $c <= 3; $c++) {

$wp_customize->add_control( new portfoliohl_Info( $wp_customize, 'cursus' . $c, array(
    'label' => __('Formation ', 'portfoliohl') . $c,
    'section' => 'section_cursus',
    'settings' => array(),
    'priority' => 10
    ) )
);


//cursus année
$wp_customize->add_setting(
'cursus_formation_year'. $c,
array(
    'default'           => '',
    'sanitize_callback' => 'portfoliohl_sanitize_text',
)
);
$wp_customize->add_control(
'cursus_formation_year'. $c,
array(
    'type'        => 'text',
    'label'       => esc_html__('Année:', 'portfoliohl'),
    'section'     => 'section_cursus',
)
);

//cursus école
$wp_customize->add_setting(
'cursus_formation_school'. $c,
array(
    'default'           => '',
    'sanitize_callback' => 'portfoliohl_sanitize_text',
)
);
$wp_customize->add_control(
'cursus_formation_school'. $c,
array(
    'type'        => 'text',
    'label'       => esc_html__('Ecole:', 'portfoliohl'),
    'section'     => 'section_cursus',
)
);

//cursus formation
$wp_customize->add_setting(
'cursus_formation_title'. $c,
array(
    'default'           => '',
    'sanitize_callback' => 'portfoliohl_sanitize_text',
)
);
$wp_customize->add_control(
'cursus_formation_title'. $c,
array(
    'type'        => 'textarea',
    'label'       => esc_html__('Formation:', 'portfoliohl'),
    'section'     => 'section_cursus',
)
);

//cursus description
$wp_customize->add_setting(
'cursus_formation_description'. $c,
array(
    'default'           => '',
    'sanitize_callback' => 'portfoliohl_sanitize_text',
)
);
$wp_customize->add_control(
'cursus_formation_description'. $c,
array(
    'type'        => 'textarea',
    'label'       => esc_html__('Description:', 'portfoliohl'),
    'section'     => 'section_cursus',
)
);

}
