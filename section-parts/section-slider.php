<?php
/**
 * Section slider
 *
 * @package portfoliohl
 */
 ?>
 <?php
  $section_slider_speed = get_theme_mod('section_slider_speed', '7000');
  $section_slider_class = get_theme_mod('section_slider_class', 'container-fluid');
  $classes = 'section-slider';
  ?>

 <section id="slider" class="<?php echo esc_attr( apply_filters( 'portfoliohl_section_class', $classes, 'slider' ) ); ?>">
     <?php
    echo '<div class="'. $section_slider_class .'">';
 		echo 	'<div class="slider" data-sliderspeed="' . absint($section_slider_speed) . '">';

 			for ($c = 1; $c <= 3; $c++) {

 				$section_slide_title 	 = get_theme_mod('section_slide_title_' . $c);
 				$section_slide_txt  = get_theme_mod('section_slide_txt_' . $c);

 				$section_slide_image 	 = get_theme_mod('section_slide_image_' . $c, get_template_directory_uri() . '/assets/img/slider_' . $c . '.jpg');
 				if ( $section_slide_image ) { ?>
 					<div class="slider-item">
 						<?php if ( $c != 1 ) : ?>
            <div class="slider-img" style="background-image: url(<?php echo $section_slide_image ?>);"></div>
 						<!-- <img class="img-responsive" src="<?php echo esc_url($section_slide_image); ?>"> -->
 						<?php else : ?>
            <div class="slider-img" style="background-image: url(<?php echo $section_slide_image ?>);"></div>
 						<!-- <img class="img-responsive" src="<?php echo esc_url($section_slide_image); ?>"/> -->
 						<?php endif;
             if ( $section_slide_title ) {?>
             <div class="main-slider-caption">
                 <h1><?php echo esc_html($section_slide_title); ?></h1>
                 <p><?php echo esc_html($section_slide_txt); ?></p>
                 <a class="btn btn-default btn-dark mt-3" href="#" role="button">voir le projet<i class="fas fa-caret-right"></i></a>
             </div>
             	<?php }?>
 					</div>
 				<?php }
 			}
       ?>
    </div>
  </div>
 </section>
