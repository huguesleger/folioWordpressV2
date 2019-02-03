<?php
/**
 * Illu hello
 *
 * @package portfoliohl
 */
 ?>

 <?php
 $header_txt_intro = get_theme_mod('header_txt_intro');
 $header_txt_metier_1 = get_theme_mod('header_txt_metier_1');
 $header_txt_metier_2 = get_theme_mod('header_txt_metier_2');
 $header_txt_metier_3 = get_theme_mod('header_txt_metier_3');
  ?>

  <?php echo file_get_contents( get_stylesheet_directory_uri() . '/images/hello-part1.svg' ); ?>
  <div class="txt-job-responsive">
    <div class="txt-job-content">
      <h1 class="txt-job animated fadeInUp">
        <span><?php echo esc_html($header_txt_intro);?></span>
        <span><?php echo esc_html($header_txt_metier_1);?></span>
        <span><?php echo esc_html($header_txt_metier_2);?></span>
        <span class="txt-and-responsive">&</span>
        <span><?php echo esc_html($header_txt_metier_3);?></span>
      </h1>
  </div>
  </div>
  <?php echo file_get_contents( get_stylesheet_directory_uri() . '/images/hello-part2.svg' ); ?>
