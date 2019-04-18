<?php
/**
 * portfoliohl sanitize
 *
 * @package portfoliohl
 */

 /**
  * Sanitize
  */

 //Text
 function portfoliohl_sanitize_text( $input ) {
     return wp_kses_post( force_balance_tags( $input ) );
 }
 //Checkboxes
 function portfoliohl_sanitize_checkbox( $input ) {
     if ( $input == 1 ) {
         return 1;
     } else {
         return '';
     }
 }

 //radio
 function portfoliohl_sanitize_radio( $input ) {
     if ( in_array( $input, array( 'active', 'desactive'), true ) ) {
         return $input;
     }
 }

 //folio layout
 function portfoliohl_sanitize_folio( $input ) {
       if ( in_array( $input, array( '2', '3', '4' ), true ) ) {
         return $input;
     }
 }
 //Fonts
 function portfoliohl_sanitize_font_weights( $input ) {

     $multi_values = !is_array( $input ) ? explode( ',', $input ) : $input;

     return !empty( $multi_values ) ? array_map( 'sanitize_text_field', $multi_values ) : array();
 }
 /**
  * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
  */
 function portfoliohl_customize_preview_js() {
 	wp_enqueue_script( 'portfoliohl_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
 }
 add_action( 'customize_preview_init', 'portfoliohl_customize_preview_js' );
