<?php
/**
 * portfoliohl customizer
 *
 * @package portfoliohl
 */

 /**
  * Add postMessage support for site title and description for the Theme Customizer.
  *
  * @param WP_Customize_Manager $wp_customize Theme Customizer object.
  */


 function portfoliohl_customize_register( $wp_customize ) {
 	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
 	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

  //Titles info
  class Portfoliohl_Info extends WP_Customize_Control {
      public $type = 'info';
      public $label = '';
      public function render_content() {
      ?>
          <h3 style="margin-top:15px;background-color:#00BCD4;padding:10px;color:#ffffff;text-transform:uppercase;"><?php echo esc_html( $this->label ); ?></h3>
      <?php
      }
  }

  //Get defaults
  $defaults = portfoliohl_customizer_defaults();

  // Load custom header
  require get_template_directory() . '/inc/customizer/customizer-header.php';

  // Load custom sections
  require get_template_directory() . '/inc/customizer/customizer-section-create.php';
  require get_template_directory() . '/inc/customizer/customizer-section-design.php';
  require get_template_directory() . '/inc/customizer/customizer-section-slider.php';
  require get_template_directory() . '/inc/customizer/customizer-section-service.php';
  require get_template_directory() . '/inc/customizer/customizer-section-webdesign.php';
  require get_template_directory() . '/inc/customizer/customizer-section-post.php';

  // Load custom portfolio
  require get_template_directory() . '/inc/customizer/customizer-portfolio.php';

  // Load custom about
  require get_template_directory() . '/inc/customizer/customizer-about.php';

  // Load social
  require get_template_directory() . '/inc/customizer/customizer-social.php';

  // Load color
  require get_template_directory() . '/inc/customizer/customizer-color.php';

  // Load sanitize
  require get_template_directory() . '/inc/customizer/sanitize.php';

  /*------------------------------------------------------------------------*/
  /* Header panel
  /*------------------------------------------------------------------------*/
  $wp_customize->add_panel( 'portfoliohl_header_panel', array(
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__('Header', 'portfoliohl'),
  ) );

  /*------------------------------------------------------------------------*/
  /* Sections panel
  /*------------------------------------------------------------------------*/
  $wp_customize->add_panel( 'portfoliohl_sections_panel', array(
    'priority'       => 11,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__('Sections', 'portfoliohl'),
  ) );
  /*------------------------------------------------------------------------*/
  /* Portfolio panel
  /*------------------------------------------------------------------------*/
  $wp_customize->add_panel( 'portfoliohl_portfolio_panel', array(
    'priority'       => 12,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__('Portfolio', 'portfoliohl'),
  ) );
}
add_action( 'customize_register', 'portfoliohl_customize_register' );
