<?php
/**
 * Menu functions
 * @package portfoliohl
 */

 /**
  * Site title, logo and menu bar
  */
 function portfoliohl_header_bar() {
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
          <li class="info-item"><i class="fas fa-map-marker-alt"></i><span>FRANCE/Montpellier</span></li>
          <li class="info-item"><i class="fas fa-envelope-open"></i><a class="mail-menu" href="mailto:contactme@hl-developerz.com"><span>contactme@hl-developerz.com</span></a></li>
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
