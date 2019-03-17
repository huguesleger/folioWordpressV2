<?php
/**
 * Section webdesign
 *
 * @package portfoliohl
 */
?>
<?php
$section_webdesign_title            = get_theme_mod('section_webdesign_title');
$section_webdesign_desc             = get_theme_mod('section_webdesign_desc');
$section_webdesign_parallax_speed   = get_theme_mod('section_webdesign_parallax_speed', '1.85');
$section_webdesign_parallax_img     = get_theme_mod('section_webdesign_parallax_img', get_template_directory_uri() . '/assets/img/template-salegosse.png');
$section_webdesign_device_title     = get_theme_mod('section_webdesign_device_title');
$section_webdesign_device_desc      = get_theme_mod('section_webdesign_device_desc');
$section_webdesign_device_img       = get_theme_mod('section_webdesign_device_img', get_template_directory_uri() . '/assets/img/wireframe_1.gif');
$section_webdesign_btn_url          = get_theme_mod('section_webdesign_btn_url');
$section_webdesign_btn_title        = get_theme_mod('section_webdesign_btn_title');
$section_webdesign_device_btn_url   = get_theme_mod('section_webdesign_device_btn_url');
$section_webdesign_device_btn_title = get_theme_mod('section_webdesign_device_btn_title');
$classes                            = 'section-webdesign';
?>
<section id="webdesign" class="<?php echo esc_attr( apply_filters( 'portfoliohl_section_class', $classes, 'webdesign' ) ); ?> py-5">
  <div class="wrap-top">
    <div class="container">
      <div class="wrap-webdesign">
        <div class="webdesign-block-txt col-lg-4">
          <h3 class="title-section"><?php echo esc_html($section_webdesign_title) ?></h3>
          <p class="pt-3"><?php echo esc_html($section_webdesign_desc) ?></p>
          <?php if ( $section_webdesign_btn_url ) : ?>
            <a class="btn btn-default-primary btn-default-lg mt-3" href="<?php echo esc_url($section_webdesign_btn_url); ?>"><?php echo esc_html($section_webdesign_btn_title); ?> <i class="fas fa-plus"></i></a>
          <?php endif; ?>
        </div>
        <div class="content-parallax" id="imgWebdesign">
          <?php
          echo '<div class="parallax-img" data-depth="'. ($section_webdesign_parallax_speed) .'">';
           ?>
           <img class="img-fluid" src="<?php echo esc_url($section_webdesign_parallax_img); ?>" alt="template du site sale gosse" title="template sale gosse"/>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php if ( $section_webdesign_device_img ) { ?>
  <div class="wrap-bottom py-lg-5 pt-5">
    <div class="container">
      <div class="row mt-md-5">
        <div class="wrap-device col-md-8 col-lg-6">
          <img class="img-fluid" src="<?php echo (get_template_directory_uri() . '/assets/img/macbook.png'); ?>">
          <div class="device-img">
            <img class="img-fluid" src="<?php echo esc_url($section_webdesign_device_img); ?>">
          </div>
        </div>
        <div class="device-block-txt col-md-10 col-lg-6">
          <h3><?php echo esc_html($section_webdesign_device_title) ?></h3>
          <p class="desc-section"><?php echo esc_html($section_webdesign_device_desc) ?></p>
          <?php if ( $section_webdesign_device_btn_url ) : ?>
          <a class="btn btn-default-primary btn-default-lg mt-3" href="<?php echo esc_url($section_webdesign_device_btn_url); ?>"><?php echo esc_html($section_webdesign_device_btn_title); ?> <i class="fas fa-plus"></i></a>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <?php
}
    ?>
</section>
