<?php
/**
* Section service
*
* @package portfoliohl
*/
?>
<?php
$section_service_title        = get_theme_mod( 'section_service_title' );
$section_service_desc         = get_theme_mod( 'section_service_desc' );
$section_service_class        = get_theme_mod('section_service_class', 'style-inline');
$section_service_style_icon   = get_theme_mod('section_service_style_icon','icon-square');
$classes                      = 'section-service';

$query = new WP_query(array(
 'post_type'      =>'service',
 'order'          =>'ASC',
 'posts_per_page' =>10,
 ));
?>
<section id="service" class="<?php echo esc_attr( apply_filters( 'portfoliohl_section_class', $classes, 'service' ) ); ?> py-5">
  <div class="container">
    <div class="row">
      <?php
      if ($section_service_class == 'style-column') {
        echo '<div class="content-service '. $section_service_class .' col-md-12">';
        ?>
        <div class="block-txt-service col-md-12 col-lg-8 col-xl-6 mb-5">

    <?php if ( $section_service_title ) { ?><h3 class="title-section"><?php echo esc_html( $section_service_title ); ?></h3><?php } ?>
    <?php if ( $section_service_desc ) { ?><div class="desc-section"><p><?php echo esc_html( $section_service_desc ); ?></p></div><?php } ?>
        </div>
      <?php
      echo 	'<div class="content-icon '. $section_service_class .' col-md-12 col-xl-6">';
      for ($c = 1; $c <= 6; $c++) {

      $section_service_icon   = get_theme_mod('section_service_icon_' . $c);
      $section_service_icon_desc  = get_theme_mod('section_service_icon_desc_' . $c);

      if( $section_service_icon) { ?>
        <div class="col col-md-4 col-xl icon-style">
          <div class="icon-item <?php echo esc_attr( $section_service_style_icon ); ?>">
          <?php if ($c != 1) : ?>
            <i class="<?php echo esc_attr( $section_service_icon ); ?>"></i>
          <?php else : ?>
            <i class="<?php echo esc_attr( $section_service_icon ); ?>"></i>
          <?php endif; ?>
          </div>
          <div class="icon-caption">
            <p><?php echo esc_html($section_service_icon_desc); ?></p>
          </div>
        </div>
      <?php
      }
      }
      ?>
      </div><!-- content-icon -->
      </div><!-- content-service -->
      <?php
      echo '<div class="detail-service '. $section_service_class .' col-md-12">';
      ?>
        <div class="row">
        <?php while($query->have_posts()): $query->the_post(); global $post; ?>
        <div class="accordion col-6" id="accordionService<?php the_ID(); ?>">
          <div class="card">
            <div class="card-header" id="heading<?php the_ID(); ?>">
              <div class="title-collapse">
              <h5 class="mb-0">
                <span class="mr-auto"><?php the_title()?></span>
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php the_ID(); ?>" aria-expanded="false" aria-controls="collapse<?php the_ID(); ?>">
                  <i class="fas fa-plus-circle"></i>
                </button>
              </h5>
            </div>
            </div>
            <div id="collapse<?php the_ID(); ?>" class="collapse" aria-labelledby="heading<?php the_ID(); ?>" data-parent="#accordionService<?php the_ID(); ?>">
              <div class="card-body">
                <?php the_content() ?>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile;
      ?>
        </div>
      </div><!-- detail-service -->
      <?php
      } else {
        echo '<div class="content-service '. $section_service_class .' col-md-12">';
        ?>
          <div class="block-txt-service col-md-12 col-lg-8 col-xl-6 mb-5">

      <?php if ( $section_service_title ) { ?><h3 class="title-section"><?php echo esc_html( $section_service_title ); ?></h3><?php } ?>
      <?php if ( $section_service_desc ) { ?><div class="desc-section"><p><?php echo esc_html( $section_service_desc ); ?></p></div><?php } ?>
          </div>
          <?php
          echo '<div class="detail-service '. $section_service_class .'">';
          ?>
            <div class="row">
            <?php while($query->have_posts()): $query->the_post(); global $post; ?>
            <div class="accordion col-6" id="accordionService<?php the_ID(); ?>">
              <div class="card">
                <div class="card-header" id="heading<?php the_ID(); ?>">
                  <div class="title-collapse">
                  <h5 class="mb-0">
                    <span class="mr-auto"><?php the_title()?></span>
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php the_ID(); ?>" aria-expanded="false" aria-controls="collapse<?php the_ID(); ?>">
                      <i class="fas fa-plus-circle"></i>
                    </button>
                  </h5>
                </div>
                </div>
                <div id="collapse<?php the_ID(); ?>" class="collapse" aria-labelledby="heading<?php the_ID(); ?>" data-parent="#accordionService<?php the_ID(); ?>">
                  <div class="card-body">
                    <?php the_content() ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile;
          ?>
            </div>
          </div><!-- detail-service -->
          <?php
          echo 	'<div class="content-icon '. $section_service_class .'">';
          for ($c = 1; $c <= 6; $c++) {

          $section_service_icon   = get_theme_mod('section_service_icon_' . $c);
          $section_service_icon_desc  = get_theme_mod('section_service_icon_desc_' . $c);

          if( $section_service_icon) { ?>
            <div class="col col-md-4 col-xl icon-style">
              <div class="icon-item <?php echo esc_attr( $section_service_style_icon ); ?>">
              <?php if ($c != 1) : ?>
                <i class="<?php echo esc_attr( $section_service_icon ); ?>"></i>
              <?php else : ?>
                <i class="<?php echo esc_attr( $section_service_icon ); ?>"></i>
              <?php endif; ?>
              </div>
              <div class="icon-caption">
                <p><?php echo esc_html($section_service_icon_desc); ?></p>
              </div>
            </div>
          <?php
          }
          }
          ?>
        </div><!-- content-icon -->
        </div><!-- content-service -->
        <?php
      }
      ?>
    </div>
  </div>
</section>
