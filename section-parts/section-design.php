<?php
/**
 * Section design
 *
 * @package portfoliohl
 */
 ?>
 <?php
$section_design_title = get_theme_mod('section_design_title');
$section_design_img = get_theme_mod( 'section_design_img' );
$classes = 'section-design';
  ?>

 <section id="design" class="<?php echo esc_attr( apply_filters( 'portfoliohl_section_class', $classes, 'design' ) ); ?> py-5">
   <div class="container">
     <div class="title">
       <?php
          if ( $section_design_title ) { ?>
           <h3 class="title-section"><?php echo esc_html( $section_design_title ) ?></h3>
           <?php
          }
          ?>
     </div>
     <div class="row no-gutters">
       <div class="design-left col-xl-7">
         <?php
            for ($c = 1; $c <= 3; $c++ ) {
              $section_design_icon = get_theme_mod( 'section_design_icon_' . $c );
              $section_design_subtitle = get_theme_mod( 'section_design_subtitle_' . $c );
              $section_design_txt = get_theme_mod( 'section_design_txt_' . $c );
               ?>
              <div class="design-block col-sm-4">
                <h5 class="title-block"><span class="design-icon"><i class="<?php echo esc_html( $section_design_icon ) ?>"></i></span><?php echo esc_html( $section_design_subtitle ) ?></h5>
                <p><?php echo esc_html( $section_design_txt ) ?></p>
              </div>
            <?php
            }
          ?>
       </div>
         <div class="design-img col-md-6 col-xl-5">
                <img class="img-fluid" src="<?php echo (get_template_directory_uri() . '/assets/img/imac.png'); ?>">
                <div class="device-img">
                  <img class="img-fluid" src="<?php echo esc_url($section_design_img); ?>">
                </div>
         </div>
     </div>
   </div>
 </section>
