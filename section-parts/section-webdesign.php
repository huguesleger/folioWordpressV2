<?php
/**
 * Section webdesign
 *
 * @package portfoliohl
 */
?>
<?php
$section_webdesign_title           = get_theme_mod('section_webdesign_title');
$section_webdesign_desc            = get_theme_mod('section_webdesign_desc');
$section_webdesign_parallax_speed  = get_theme_mod('section_webdesign_parallax_speed', '1.85');
$section_webdesign_parallax_img    = get_theme_mod('section_webdesign_parallax_img', get_template_directory_uri() . '/assets/img/template_1.png');
$section_webdesign_device_title    = get_theme_mod('section_webdesign_device_title');
$section_webdesign_device_desc     = get_theme_mod('section_webdesign_device_desc');
$section_webdesign_device_img      = get_theme_mod('section_webdesign_device_img', get_template_directory_uri() . '/assets/img/wireframe_1.gif');
$classes                           = 'section-webdesign';
?>
<section id="webdesign" class="<?php echo esc_attr( apply_filters( 'portfoliohl_section_class', $classes, 'webdesign' ) ); ?>">
  <div class="wrap-top">
    <div class="container">
      <div class="wrap-webdesign">
        <div class="webdesign-block-txt col-lg-4">
          <h3 class="title-section"><?php echo esc_html($section_webdesign_title) ?></h3>
          <p class="pt-3"><?php echo esc_html($section_webdesign_desc) ?></p>
        </div>
        <div class="content-parallax" id="imgWebdesign">
          <?php
          echo '<div class="parallax-img" data-depth="'. ($section_webdesign_parallax_speed) .'">';
           ?>
           <img class="img-fluid" src="<?php echo esc_url($section_webdesign_parallax_img); ?>"/>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="wrap-bottom py-5">
    <div class="container">
      <div class="row">
        <div class="wrap-device col-md-8 col-lg-6">
          <img class="img-fluid" src="<?php echo (get_template_directory_uri() . '/assets/img/macbook.png'); ?>">
          <div class="device-img">
            <img class="img-fluid" src="<?php echo esc_url($section_webdesign_device_img); ?>">
          </div>
        </div>
        <div class="device-block-txt col-md-12 col-lg-6">
          <h3><?php echo esc_html($section_webdesign_device_title) ?></h3>
          <p class="desc-section"><?php echo esc_html($section_webdesign_device_desc) ?></p>
          <a class="btn btn-outline btn-outline-primary btn-default-lg mt-3" href="#" role="button">en voir<i class="fas fa-plus"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
