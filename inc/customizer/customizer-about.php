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

//cursus title
$wp_customize->add_setting(
'cursus_title',
array(
    'default'           => '',
    'sanitize_callback' => 'portfoliohl_sanitize_text',
    'transport' => 'postMessage',
)
);
$wp_customize->add_control(
'cursus_title',
array(
    'type'        => 'text',
    'label'       => esc_html__('Titre:', 'portfoliohl'),
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
    'transport' => 'postMessage',
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

//cursus formation
$wp_customize->add_setting(
'cursus_formation_title'. $c,
array(
    'default'           => '',
    'sanitize_callback' => 'portfoliohl_sanitize_text',
    'transport' => 'postMessage',
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

//cursus école
$wp_customize->add_setting(
'cursus_formation_school'. $c,
array(
    'default'           => '',
    'sanitize_callback' => 'portfoliohl_sanitize_text',
    'transport' => 'postMessage',

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

//cursus description
$wp_customize->add_setting(
'cursus_formation_description'. $c,
array(
    'default'           => '',
    'sanitize_callback' => 'portfoliohl_sanitize_text',
    'transport' => 'postMessage',
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
/* number
----------------------------------------------------------------------*/
$wp_customize->add_section(
    'section_number',
    array(
        'title'         => __('Section chiffres', 'portfoliohl'),
        'priority'      => 10,
        'panel'         => 'portfoliohl_section_about_panel',
    )
);

// Show section
$wp_customize->add_setting( 'number_disable',
    array(
        'sanitize_callback' => 'portfoliohl_sanitize_checkbox',
        'default'           => '',
    )
);
$wp_customize->add_control( 'number_disable',
    array(
        'type'        => 'checkbox',
        'label'       => esc_html__('cacher cette section ?', 'portfoliohl'),
        'section'     => 'section_number',
    )
);

for ($c = 1; $c <= 3; $c++) {
  $wp_customize->add_control( new portfoliohl_Info( $wp_customize, 'number' . $c, array(
      'label' => __('Chiffre ', 'portfoliohl') . $c,
      'section' => 'section_number',
      'settings' => array(),
      'priority' => 10
      ) )
  );

  //number
  $wp_customize->add_setting(
  'number_number'. $c,
  array(
      'default'           => '',
      'sanitize_callback' => 'portfoliohl_sanitize_text',
      'transport' => 'postMessage',
  )
  );
  $wp_customize->add_control(
  'number_number'. $c,
  array(
      'type'        => 'text',
      'label'       => esc_html__('Chiffre:', 'portfoliohl'),
      'section'     => 'section_number',
  )
  );
  //number type
  $wp_customize->add_setting(
  'number_type'. $c,
  array(
      'default'           => '',
      'sanitize_callback' => 'portfoliohl_sanitize_text',
      'transport' => 'postMessage',
  )
  );
  $wp_customize->add_control(
  'number_type'. $c,
  array(
      'type'        => 'text',
      'label'       => esc_html__('Type:', 'portfoliohl'),
      'section'     => 'section_number',
  )
  );
  //number description
  $wp_customize->add_setting(
  'number_desc'. $c,
  array(
      'default'           => '',
      'sanitize_callback' => 'portfoliohl_sanitize_text',
      'transport' => 'postMessage',
  )
  );
  $wp_customize->add_control(
  'number_desc'. $c,
  array(
      'type'        => 'text',
      'label'       => esc_html__('Description:', 'portfoliohl'),
      'section'     => 'section_number',
  )
  );
}
/* outils
----------------------------------------------------------------------*/
$wp_customize->add_section(
    'section_outils',
    array(
        'title'         => __('Section outils', 'portfoliohl'),
        'priority'      => 10,
        'panel'         => 'portfoliohl_section_about_panel',
    )
);

// Show section
$wp_customize->add_setting( 'outils_disable',
    array(
        'sanitize_callback' => 'portfoliohl_sanitize_checkbox',
        'default'           => '',
    )
);
$wp_customize->add_control( 'outils_disable',
    array(
        'type'        => 'checkbox',
        'label'       => esc_html__('cacher cette section ?', 'portfoliohl'),
        'section'     => 'section_outils',
    )
);

//cursus title
$wp_customize->add_setting(
'outils_title',
array(
    'default'           => '',
    'sanitize_callback' => 'portfoliohl_sanitize_text',
)
);
$wp_customize->add_control(
'outils_title',
array(
    'type'        => 'text',
    'label'       => esc_html__('Titre:', 'portfoliohl'),
    'section'     => 'section_outils',
)
);

/* outils conception
----------------------------------------------------------------------*/
for ($c = 1; $c <= 12; $c++) {
  $wp_customize->add_control( new portfoliohl_Info( $wp_customize, 'outil' . $c, array(
      'label' => __('outil', 'portfoliohl') . $c,
      'section' => 'section_outils',
      'settings' => array(),
      'priority' => 10
      ) )
  );
  //conception image
  $wp_customize->add_setting(
      'outil_image' . $c,
      array(
          'default'           => '',
          'sanitize_callback' => 'esc_url_raw',
      )
  );
  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
        'outil_image' . $c,
          array(
             'label'     => esc_html__( 'Upload image:', 'portfoliohl' ),
             'type'      => 'image',
             'section'   => 'section_outils',
          )
      )
  );
  //conception name
  $wp_customize->add_setting(
  'outil_name'. $c,
  array(
      'default'           => '',
      'sanitize_callback' => 'portfoliohl_sanitize_text',
  )
  );
  $wp_customize->add_control(
  'outil_name'. $c,
  array(
      'type'        => 'text',
      'label'       => esc_html__('Nom:', 'portfoliohl'),
      'section'     => 'section_outils',
  )
  );
  //conception data pourcent
  $wp_customize->add_setting(
    'outil_data' . $c,
    array(
        'default'           => '0',
        'sanitize_callback' =>  'absint',
    )
  );
  $wp_customize->add_control(
    'outil_data' . $c,
    array(
        'type'        => 'number',
        'label'       => esc_html__('Maîtrise de l\'outil (%)', 'portfoliohl'),
        'input_attrs' => array(
        'min'         => 1,
        'max'         => 100,
        'step'        => 1,
        ),
        'section'     => 'section_outils',
    )
  );
}
