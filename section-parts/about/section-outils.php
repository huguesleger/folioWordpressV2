<?php
/**
 * Section outils
 *
 * @package portfoliohl
 */
 ?>
 <?php
  $classes = 'section-outils';
  $outils_title    = get_theme_mod( 'outils_title' );
   ?>
 <section class="<?php echo esc_attr( apply_filters( 'portfoliohl_section_class', $classes, 'outils' ) ); ?>">
   <div class="container">
      <div class="row no-gutters">
        <div class="title-outil col-md-12">
          <h2><?php echo esc_html( $outils_title );?></h2>
        </div>
     <?php
      for ($c = 1; $c <= 12; $c++) {
       $outil_image    = get_theme_mod( 'outil_image'. $c );
       $outil_name  = get_theme_mod( 'outil_name'. $c );

    if ( $outil_image ) {
            ?>
              <div class="content-outil col-md-2">
              <div class="icon-outil">
                <img class="img-responsive" src="<?php echo esc_url($outil_image); ?>"/>
                <span class="outil-name"><?php echo esc_html($outil_name); ?></span>
              </div>
            <?php } ?>
              </div>

   <?php
    }
   ?>
   </div>
    </div>
    </section>
