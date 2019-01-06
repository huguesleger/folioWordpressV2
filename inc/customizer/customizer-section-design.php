<?php
/**
 * portfoliohl customizer-section-design
 *
 * @package portfoliohl
 */

 /*------------------------------------------------------------------------*/
 /* Section design
 /*------------------------------------------------------------------------*/

$wp_customize->add_section(
    'section_design',
  array(
      'title'       => esc_html__('Section Design', 'portfoliohl'),
      'priority'    => 11,
      'panel'       => 'portfoliohl_sections_panel',
  )
);
// Show section
$wp_customize->add_setting(
    'design_disable',
    array(
        'sanitize_callback' => 'portfoliohl_sanitize_checkbox',
        'default'           => '',
    )
);
$wp_customize->add_control(
    'design_disable',
    array(
        'type'        => 'checkbox',
        'label'       => esc_html__('cacher cette section ?', 'portfoliohl'),
        'section'     => 'section_design',
    )
);
//title section
$wp_customize->add_setting(
    'section_design_title',
    array(
        'default'           => '',
        'sanitize_callback' => 'portfoliohl_sanitize_text',
  )
);
$wp_customize->add_control(
    'section_design_title',
    array(
        'type'      => 'text',
        'label'     => esc_html__('Titre section:', 'portfoliohl'),
        'section'   => 'section_design',
    )
  );
/* Block description
----------------------------------------------------------------------*/
for ($c = 1; $c <= 3; $c++) {
$wp_customize->add_control( new Portfoliohl_Info( $wp_customize, 'description' . $c, array(
  'label' => esc_html__('Block ', 'portfoliohl') . $c,
  'section'   => 'section_design',
  'settings'  => array(),
  ) )
);
//icon block
$wp_customize->add_setting(
    'section_design_icon_'. $c,
    array(
        'default'           => '',
        'sanitize_callback' => 'portfoliohl_sanitize_text',
  )
);
$wp_customize->add_control(
    'section_design_icon_'. $c,
    array(
        'type'      => 'text',
        'label'     => esc_html__('Icon:', 'portfoliohl'),
        'section'   => 'section_design',
    )
  );
//title block
$wp_customize->add_setting(
    'section_design_subtitle_'. $c,
    array(
        'default'           => '',
        'sanitize_callback' => 'portfoliohl_sanitize_text',
  )
);
$wp_customize->add_control(
    'section_design_subtitle_'. $c,
    array(
        'type'      => 'text',
        'label'     => esc_html__('Titre:', 'portfoliohl'),
        'section'   => 'section_design',
    )
  );
//txt block
$wp_customize->add_setting(
    'section_design_txt_'. $c,
    array(
        'default'           => '',
        'sanitize_callback' => 'portfoliohl_sanitize_text',
  )
);
$wp_customize->add_control(
    'section_design_txt_'. $c,
    array(
        'type'      => 'textarea',
        'label'     => esc_html__('Texte:', 'portfoliohl'),
        'section'   => 'section_design',
    )
  );
}
/* Image
----------------------------------------------------------------------*/
$wp_customize->add_control( new Portfoliohl_Info( $wp_customize, 'image', array(
  'label' => esc_html__('Image ', 'portfoliohl'),
  'section'   => 'section_design',
  'settings'  => array(),
  ) )
);
//img
$wp_customize->add_setting(
    'section_design_img',
    array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    )
  );
$wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,
      'section_design_img',
      array(
        'label'   => esc_html__('Upload image: ', 'portfoliohl'),
        'type'    => 'image',
        'section' => 'section_design',
        )
      )
  );
