<?php
/**
 * Section cursus
 *
 * @package portfoliohl
 */
 ?>
 <?php
  $classes = 'section-cursus';
   ?>
 <section class="<?php echo esc_attr( apply_filters( 'portfoliohl_section_class', $classes, 'cursus' ) ); ?>">

<div class="container">
  <div class="row">
    <div class="title-cursus col-md-12">
      <h2>Parcours</h2>
    </div>
  </div>
  <?php
   for ($c = 1; $c <= 3; $c++) {
    $cursus_formation_year    = get_theme_mod( 'cursus_formation_year'. $c );
    $cursus_formation_school  = get_theme_mod( 'cursus_formation_school'. $c );
    $cursus_formation_title   = get_theme_mod( 'cursus_formation_title'. $c );
    $cursus_formation_description       = get_theme_mod( 'cursus_formation_description'. $c );

 if ( $cursus_formation_school ) {
         ?>
          <div class="row">
           <div class="content-cursus col-md-9">
             <div class="number-cursus">
                <?php if ($c == 1) : ?>
                  <span>01</span>
                <?php elseif ($c == 2): ?>
                  <span>02</span>
                <?php elseif ($c == 3): ?>
                  <span>03</span>
                  <?php endif; ?>
                </div>
           <div class="formation">
             <p><?php echo esc_html($cursus_formation_year); ?></p>
             <p><?php echo esc_html($cursus_formation_title); ?><span class="formation-school pl-2"><?php echo esc_html($cursus_formation_school); ?></span></p>
           </div>
           <div class="description">
             <p><?php echo esc_html($cursus_formation_description); ?></p>
           </div>
         <?php } ?>
           </div>
         </div>

<?php
 }
?>
</div>
 </section>
