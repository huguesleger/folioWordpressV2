<?php
/**
 * Section create
 *
 * @package portfoliohl
 */
 ?>
<?php
$section_create_title = get_theme_mod('section_create_title');
$section_create_description = get_theme_mod('section_create_description');
$classes = 'section-create';
 ?>
<section id="create" class="<?php echo esc_attr( apply_filters( 'portfoliohl_section_class', $classes, 'create' ) ); ?> pb-5">
  <div class="content-create">
    <div class="illustration col-xl-8">
      <?php get_template_part('template-parts/svg/content-illu', 'create'); ?>
    </div>
    <div class="desc-create col-xl-4" id="txtCreate">
      <div class="title-create">
        <div class="btn-create">
          <?php echo file_get_contents(get_stylesheet_directory_uri() . '/images/btn-create.svg'); ?>
        </div>
        <h3><?php echo esc_html($section_create_title);?></h3>
      </div>
      <?php if ( $section_create_description ) { ?>
      <div class="txt-create">
        <p><?php echo esc_html($section_create_description);?></p>
    </div>
    <?php
  }
  ?>
    </div>
    </div>
  </div>
</section>
