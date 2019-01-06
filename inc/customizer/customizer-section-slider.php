<?php
/**
 * portfoliohl customizer-section-slider
 *
 * @package portfoliohl
 */

/*------------------------------------------------------------------------*/
/* Section slider
/*------------------------------------------------------------------------*/

$wp_customize->add_section(
   'section_slider',
 array(
     'title'       => esc_html__('Section Slider', 'portfoliohl'),
     'priority'    => 12,
     'panel'       => 'portfoliohl_sections_panel',
 )
);
// Show section
$wp_customize->add_setting(
    'slider_disable',
    array(
        'sanitize_callback' => 'portfoliohl_sanitize_checkbox',
        'default'           => '',
    )
);
$wp_customize->add_control(
    'slider_disable',
    array(
        'type'        => 'checkbox',
        'label'       => esc_html__('cacher cette section ?', 'portfoliohl'),
        'section'     => 'section_slider',
    )
);
/* Options
----------------------------------------------------------------------*/
$wp_customize->add_control( new Portfoliohl_Info( $wp_customize, 'options_slider', array(
  'label'     => esc_html__('Options ', 'portfoliohl'),
  'section'   => 'section_slider',
  'settings'  => array(),
  ) )
);
//class
$wp_customize->add_setting(
    'section_slider_class',
    array(
        'default'           => $defaults['slider_class'],
        'sanitize_callback' => 'portfoliohl_sanitize_text',
    )
);
$wp_customize->add_control(
    'section_slider_class',
    array(
        'label'             =>esc_html__('Style d\'affichage:','portfoliohl'),
        'type'              => 'select',
        'section'           => 'section_slider',
        'choices'           => array(
         'container'        => esc_html__( 'container'),
         'container-fluid'  => esc_html__( 'container-fluid'),
        )
    )
);
//speed
$wp_customize->add_setting(
    'section_slider_speed',
    array(
        'default'           => $defaults['slider_speed'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'section_slider_speed',
    array(
        'label'         => esc_html__( 'Slider speed:', 'portfoliohl' ),
        'section'       => 'section_slider',
        'type'          => 'number',
        'description'   => esc_html__('Slider speed [default: 7000]', 'portfoliohl'),
    )
);
/* Slide
----------------------------------------------------------------------*/
for ($c = 1; $c <= 3; $c++) {
$wp_customize->add_control( new Portfoliohl_Info( $wp_customize, 'slide' . $c, array(
    'label'     => esc_html__('Slide ', 'portfoliohl') . $c,
    'section'   => 'section_slider',
    'settings'  => array(),
    ) )
);

$wp_customize->add_setting(
    'section_slide_image_' . $c,
    array(
        'default'           => $defaults['slider_img_' . $c],
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
      'section_slide_image_' . $c,
        array(
           'label'     => esc_html__( 'Upload image:', 'portfoliohl' ),
           'type'      => 'image',
           'section'   => 'section_slider',
        )
    )
);
$wp_customize->add_setting(
    'section_slide_title_' . $c,
    array(
        'sanitize_callback' => 'portfoliohl_sanitize_text',
    )
);
$wp_customize->add_control(
    'section_slide_title_' . $c,
    array(
        'label' 	  => esc_html__( 'Titre:', 'portfoliohl' ),
        'section' 	=> 'section_slider',
        'type' 		  => 'text',
    )
);
$wp_customize->add_setting(
    'section_slide_txt_' . $c,
    array(
        'sanitize_callback' => 'portfoliohl_sanitize_text',
    )
);
$wp_customize->add_control(
    'section_slide_txt_' . $c,
    array(
        'label' 	  => esc_html__( 'Description:', 'portfoliohl' ),
        'section'   => 'section_slider',
        'type' 		  => 'textarea',
    )
);
$wp_customize->add_setting(
    'section_slide_btn_url_' . $c,
    array(
        'sanitize_callback' => 'esc_url_raw',
    )
  );
$wp_customize->add_control(
    'section_slide_btn_url_' . $c,
    array(
        'label'   => esc_html__('Lien du bouton', 'portfoliohl'),
        'section' => 'section_slider',
        'type'    => 'text',
    )
  );
$wp_customize->add_setting(
    'section_slide_btn_title_' . $c,
    array(
        'sanitize_callback' => 'portfoliohl_sanitize_text',
    )
  );

$wp_customize->add_control(
    'section_slide_btn_title_' . $c,
    array(
        'label'   => esc_html__('Titre du bouton', 'portfoliohl'),
        'section' => 'section_slider',
        'type'    => 'text',
    )
  );
}
