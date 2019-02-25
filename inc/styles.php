<?php
/**
 * Theme Customizer.
 *
 * @package portfoliohl
 */

function portfoliohl_custom_styles($custom) {

	$defaults 	= portfoliohl_customizer_defaults();

  /**
* color mode
*/
// color logo
  $color_logo = get_theme_mod('color_theme_logo', $defaults['color_logo']);
//color primary
  $color_primary = get_theme_mod('color_theme_primary', $defaults['color_primary']);
//color secondary
  $color_secondary = get_theme_mod('color_theme_secondary', $defaults['color_secondary']);
//color nav bg
  $color_nav_bg = get_theme_mod('color_nav_bg', $defaults['color_nav']);

/**
* styles applied sure element html
*/

//logo
$custom .= ".home .main.__bg-color #logo {fill:" . esc_attr($color_logo) . ";}"."\n";
$custom .= ".main #logo {fill:" . esc_attr($color_logo) . ";}"."\n";

//color-primary
  //hello
  $custom .= ".hero .hello .hello-line {stroke:" . esc_attr($color_primary) . ";}"."\n";
  $custom .= ".hero .hello .hello-circle {fill:" . esc_attr($color_primary) . ";}"."\n";
  //title-section
  $custom .= ".title-section {border-color:" . esc_attr($color_primary) . ";}"."\n";
  //btn
  $custom .= ".btn-outline-primary {color:" . esc_attr($color_primary) . ";}"."\n";
  $custom .= ".btn-outline-primary {border-color:" . esc_attr($color_primary) . ";}"."\n";
  $custom .= ".btn-outline-primary:hover, .btn-outline-primary:focus {background:" . esc_attr($color_primary) . ";}"."\n";
  $custom .= ".btn-outline-primary:hover, .btn-outline-primary:focus {border-color:" . esc_attr($color_primary) . ";}"."\n";
  //nav
  $custom .= ".wrap-nav .menu .menu-item.current-menu-item {color:" . esc_attr($color_primary) . ";}"."\n";
  $custom .= ".menu-item .__color-nav::before {background:" . esc_attr($color_primary) . ";}"."\n";
  $custom .= "#illu-nav .__color-nav {stroke:" . esc_attr($color_primary) . ";}"."\n";
  $custom .= "#illu-nav .__tcolor {fill:" . esc_attr($color_primary) . ";}"."\n";
  //go top
  $custom .= ".footer .gotop {background:" . esc_attr($color_primary) . ";}"."\n";
  //title-header
  $custom .= ".header-page .header-page-img .hero-page h1 {border-color:" . esc_attr($color_primary) . ";}"."\n";
  //section graphisme
  $custom .= ".section-design .row .design-left .design-block .title-block .design-icon {background:" . esc_attr($color_primary) . ";}"."\n";
  $custom .= ".section-create .desc-create .btn-create {fill:" . esc_attr($color_primary) . ";}"."\n";
  $custom .= ".slick-dots li button:before {border-color:" . esc_attr($color_primary) . ";}"."\n";
  $custom .= ".slick-dots li.slick-active button:before {background:" . esc_attr($color_primary) . ";}"."\n";
  //section services
  $custom .= ".section-service .detail-service .title-collapse .btn-link {color:" . esc_attr($color_primary) . ";}"."\n";
  //section post
  $custom .= ".section-post .content-txt .wrap-icon-post .icon-post .cat-post {border-color:" . esc_attr($color_primary) . ";}"."\n";
  // page portfolio
  $custom .= ".effect-content span {background:" . esc_attr($color_primary) . ";}"."\n";
  $custom .= ".thumb-cover::before {background:" . esc_attr($color_primary) . ";}"."\n";
  //page about
  $custom .= ".section-cursus .title-cursus h2 {border-color:" . esc_attr($color_primary) . ";}"."\n";
  $custom .= ".section-cursus .content-cursus .formation .formation-school {color:" . esc_attr($color_primary) . ";}"."\n";
  $custom .= ".section-outils .title-outil h2 {border-color:" . esc_attr($color_primary) . ";}"."\n";
  //page contact
  $custom .= ".title-form {border-color:" . esc_attr($color_primary) . ";}"."\n";
  $custom .= ".btn-submit .btn-primary {border-color:" . esc_attr($color_primary) . ";}"."\n";
  $custom .= ".btn-submit .btn-primary:hover {color:" . esc_attr($color_primary) . ";}"."\n";

//color-secondary
  //metier2
  $custom .= ".hero .hero-title h2 {color:" . esc_attr($color_secondary) . ";}"."\n";
  //icon-services
	$custom .= ".section-service .icon-item {border-color:" . esc_attr($color_secondary) . ";}"."\n";
  $custom .= ".section-service .icon-item {color:" . esc_attr($color_secondary) . ";}"."\n";
  $custom .= ".section-service .icon-item:hover {background:" . esc_attr($color_secondary) . ";}"."\n";
  $custom .= ".section-service .icon-item:hover {border-color:" . esc_attr($color_secondary) . ";}"."\n";
  //icon-social-contact
  $custom .= ".contact .content-infos .social-list .link-social {color:" . esc_attr($color_secondary) . ";}"."\n";
  //Footer
  $custom .= ".footer .wrap-copy {background:" . esc_attr($color_secondary) . ";}"."\n";

//color nav bg
  $custom .= ".shape-overlays {fill:" . esc_attr($color_nav_bg) . ";}"."\n";

  //Output all the styles
wp_add_inline_style( 'portfoliohl-style', $custom );
}
add_action( 'wp_enqueue_scripts', 'portfoliohl_custom_styles' );
