<?php
/**
 *
 * @package portfoliohl
 */

?>

<?php
$portfolio_grid     = absint( get_theme_mod( 'portfolio_grid', 3 ) );
$classes = '';
switch ($portfolio_grid) {
    case 2:
        $classes = 'col-sm-6 col-md-6';
        break;
    case 3:
        $classes = 'col-sm-6 col-md-4';
        break;
    case 4:
        $classes = 'col-sm-6 col-md-3';
        break;
    default:
        $classes = 'col-sm-6 col-md-4';
}
 ?>
  <div class="work <?php echo esc_attr($classes); ?>">
  <?php if ( has_post_thumbnail() ) : ?>

    <?php
    $post_thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
    if ( $post_thumb ) {

       ?>
<div class="effect-thumb" style="background-image: url(<?php echo $post_thumb; ?>);">
   <?php } ?>

  <a class="thumb-cover" href="<?php the_permalink(); ?>">


	<?php endif; ?>
  <div class="effect-content">
    <?php
    the_title( '<h4>', '</h4>' );
    	if ( 'post' === get_post_type() && get_theme_mod( 'hide_meta_index' ) != 1) : ?>

    <?php
    endif;

      $terms_list = wp_get_post_terms($post->ID,'works');
      foreach ($terms_list as $term) {
      ?>
      <div class="cat-name-works">
        <span><?php echo $term->name;?></span>
      </div>
      <?php
      }
      ?>
  </div>
  </a>
</div>
</div>
