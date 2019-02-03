<?php
/**
 * Menu functions
 * @package portfoliohl
 */

 /**
  * Site title, logo and menu bar
  */
 function portfoliohl_header_bar() {
 $facebook_url      = get_theme_mod( 'social_facebook_url' );
 $facebook_icon      = get_theme_mod( 'social_facebook_icon' );
 $linkedin_url      = get_theme_mod( 'social_linkedin_url' );
 $linkedin_icon      = get_theme_mod( 'social_linkedin_icon' );
 $instagram_url      = get_theme_mod( 'social_instagram_url' );
 $instagram_icon      = get_theme_mod( 'social_instagram_icon' );
 ?>
<div class="main">
  <div class="container-main">
  <?php portfoliohl_site_branding(); ?>
    <div class="nav-btn" id="Hamb">
      <span class="nav-fill"></span>
      <p class="nav-txt" id="txtHamb">menu</p>
    </div>
  </div>
  <div id="nav">
    <div class="wrap-nav">
      <nav id="site-navigation" class="main-navigation" role="navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'primary',
                                'container' => false ) ); ?>
      </nav>
      <div class="infos-nav">
        <h3 class="title-info">Infos</h3>
        <ul class="content-infos">
          <li class="info-item"><i class="fas fa-map-marker-alt"></i><span>34000 Montpellier</span></li>
          <li class="info-item"><a class="item" href="mailto:contactme@hl-developerz.com"><i class="fas fa-envelope-open"></i><span>contactme@hl-developerz.com</span></a></li>
          <?php
          if ( $facebook_url ) { ?>
          <li class="info-item-social"><a class="item" href="https://<?php echo esc_html( $facebook_url ); ?>" target="_blank"><i class="fab <?php echo esc_html( $facebook_icon ); ?>"></i></a></li>
          <?php
          }
          if ( $linkedin_url ) { ?>
          <li class="info-item-social"><a class="item" href="https://<?php echo esc_html( $linkedin_url ); ?>" target="_blank"><i class="fab <?php echo esc_html( $linkedin_icon ); ?>"></i></a></li>
          <?php
          }
          if ( $instagram_url ) { ?>
          <li class="info-item-social"><a class="item" href="https://<?php echo esc_html( $instagram_url ); ?>" target="_blank"><i class="fab <?php echo esc_html( $instagram_icon ); ?>"></i></a></li>
          <?php
          } ?>
        </ul>
      </div>
    </div>
    <div id="wale-nav" class="illu-nav">
      <?php get_template_part( 'template-parts/svg/content', 'illu-nav' ); ?>
    </div>
    <svg class="shape-overlays" viewBox="0 0 100 100" preserveAspectRatio="none">
      <path class="shape-overlays__path"></path>
    </svg>
  </div>
</div>

 <?php
 }
 add_action( 'portfoliohl_header', 'portfoliohl_header_bar', 9);

/**
 * Site branding
 */
function portfoliohl_site_branding() {
  ?>
<div class="branding">
<?php
if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
  ?>
  <div class="logo">
  <?php
  the_custom_logo();
  ?>
  </div>
  <p class="title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
  <?php
} else {
  if ( get_bloginfo( 'name' ) ) : ?>
  <div class="logo">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a>
  </div>
    <p class="title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
  <?php else : ?>
    <div class="logo">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a>
  </div>
  <?php
  endif;

  $description = get_bloginfo( 'description', 'display' );
  if ( $description || is_customize_preview() ) : ?>
    <p class="description"><?php echo $description; ?></p>
  <?php endif;
}
?>
</div>
<?php
}
