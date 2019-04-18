<?php
/**
 * Section number
 *
 * @package portfoliohl
 */
 ?>
 <?php
  $classes = 'section-number';
   ?>
 <section class="<?php echo esc_attr( apply_filters( 'portfoliohl_section_class', $classes, 'number' ) ); ?>">
   <div class="container">
      <div class="row">
     <?php
      for ($c = 1; $c <= 3; $c++) {
       $number_number    = get_theme_mod( 'number_number'. $c );
       $number_type  = get_theme_mod( 'number_type'. $c );
       $number_desc   = get_theme_mod( 'number_desc'. $c );

    if ( $number_number ) {
            ?>
              <div id ="contentNumber-<?php echo esc_html($c)?>" class="content-number col-md-4 pb-4">
              <div class="number">
                <p class="counter" data-count="<?php echo esc_html($number_number); ?>" >0</p>
              </div>
              <div class="number-type">
                <p><?php echo esc_html($number_type); ?></p>
              </div>
              <p class="number-desc"><?php echo esc_html($number_desc); ?></p>
            <?php } ?>
              </div>

   <?php
    }
   ?>
   </div>
    </div>
    </section>
