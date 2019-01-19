<?php
/**
* Template Name: Portfolio
* @package portfoliohl
*/
?>
<?php get_header();?>

<?php
$portfolio_class = get_theme_mod('portfolio_class', 'container');

while ( have_posts() ) : the_post(); ?>
  <?php if((get_the_content())): { ?>
    <div class="content-portfolio">
    <div class="container">
      <?php the_content(); ?>
    </div>
    </div>
  <?php
  }
  endif; ?>
<?php endwhile; ?>
<div class="works-content">
<!-- <div class="container" id="folio_fullwidth"> -->
<?php echo '<div class="'. $portfolio_class .'">'; ?>
<div class="row px-custom">
<?php
$query = new WP_query(array(
  'post_type'=>'portfolio',
  ));
?>
<?php while($query->have_posts()): $query->the_post();?>
<?php get_template_part( 'template-parts/content', 'portfolio' ); ?>
<?php endwhile;?>
</div>
</div>
</div>
<?php get_footer();?>
