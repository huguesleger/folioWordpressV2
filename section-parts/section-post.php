<?php
/**
* Section post
*
* @package portfoliohl
*/
?>
<?php
$classes = 'section-post';
$query = new WP_query(array(
  'post_type'=>'portfolio',
  'posts_per_page'=>3,
  'order' => 'DESC',
  ));
$section_post_title = get_theme_mod('section_post_title');
$section_post_description = get_theme_mod('section_post_description');
?>
<section id="post" class="<?php echo esc_attr( apply_filters( 'portfoliohl_section_class', $classes, 'post' ) ); ?> pt-5">
  <div class="container">
    <div class="block-txt-post">
      <h3 class="title-section"><?php echo esc_html($section_post_title);?></h3>
      <?php if ( $section_post_description ) { ?>
      <div class="desc-section">
        <p><?php echo esc_html($section_post_description);?></p>
    </div>
    <?php
  }
  ?>
    </div>
  </div>
  <?php while($query->have_posts()): $query->the_post(); global $post; ?>
  <?php  $post_thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
  <div class="wrap-post my-5">
    <div class="container">
      <div class="row">
        <div class="content-txt col-lg-5 wow <?php the_field('wow-txt'); ?>" data-wow-duration="1200ms" data-wow-delay="900ms">
          <div class="wrap-icon-post">
            <?php
            $terms_list = wp_get_post_terms($post->ID,'works');
            foreach ($terms_list as $term) {
            ?>
            <div class="icon-post">
            <i class="<?php echo $term->description;?>"></i><span class="cat-post"><?php echo $term->name;?></span>
            </div>
            <?php
            }
            ?>
          </div>
            <h4 class="title-post"><?php the_title(); ?></h4>
            <?php echo the_excerpt(); ?>
            <div class="btn-post">
              <a class="btn btn-outline btn-outline-primary btn-default-lg mt-5" href="<?php the_permalink()?>" role="button"><i class="far fa-image"></i> voir le projet</a>
            </div>
        </div>
        <div class="content-img col-lg-7">
          <div class="wrap-img wow <?php the_field('wow-img'); ?>" data-wow-duration="1200ms" data-wow-delay="900ms">
            <?php if( get_field('image') ): ?>
            <img class="img-fluid" src="<?php the_field('image'); ?>">
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
</section>
