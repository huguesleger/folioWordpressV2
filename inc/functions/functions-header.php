<?php
/**
 * Header functions
 * @package portfoliohl
 */
?>

<?php
/**
* Header type
*/
function portfoliohl_header() {

  $img_header_page = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
  $img_hero = (get_template_directory_uri() . '/assets/img/illu-hero.png');
/* metier */
  $header_txt_intro = get_theme_mod('header_txt_intro');
  $header_txt_metier_1 = get_theme_mod('header_txt_metier_1');
  $header_txt_metier_2 = get_theme_mod('header_txt_metier_2');
  $header_desc_metier_1 = get_theme_mod('header_desc_metier_1');
  $header_desc_metier_2 = get_theme_mod('header_desc_metier_2');

/* header page home */
  if ( is_front_page() && ! is_home() ) { ?>
<header class="hero hero-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="hello">
            <?php get_template_part( 'template-parts/svg/content', 'illu-hello' ); ?>
          </div>
            <div class="hero-title animated fadeInUp delay-2s">
              <span><?php echo esc_html($header_txt_intro);?></span>
              <h1><?php echo esc_html($header_txt_metier_1);?></h1>
              <h2><?php echo esc_html($header_txt_metier_2);?></h2>
              <p><?php echo esc_html($header_desc_metier_1);?></p>
              <p><?php echo esc_html($header_desc_metier_2);?></p>
          </div>
            <a id="enter" class="btn btn-default btn-default-primary my-4 animated fadeInUp delay-3s" href="#design">Enter<i class="fas fa-angle-down"></i></a>
        </div>
        <div class="col-md-6">
          <div class="img-hero">
            <img class="img-fluid animated fadeIn delay-2s" src="<?php echo esc_url($img_hero); ?>" alt="illustration webdesigner et intégrateur web" title="webdesigner intégrateur web">
          </div>
        </div>
      </div>
    </div>
</header>

<?php
/* header page min*/
} elseif (is_page_template( 'page-templates/template-portfolio.php') || is_page_template('page-templates/template-contact.php' )) { ?>
    <header class="header-page">
      <div class="header-page-img" style="background-image: url(<?php echo esc_url($img_header_page)?>)">
        <div class="container">
          <div class="hero-page">
            <h1><?php the_title() ?></h1>
            <?php if (get_field('baiseline')): { ?>
              <h2 class="baseline"><?php echo the_field('baiseline')?></h2>
              <?php
            }
            endif; ?>
          </div>
      </div>
      </div>
    </header>

<?php
} elseif (is_404()) {
  return null;
}elseif (is_single()){
    return null;
} else {
  ?>
  <header class="header-page">
    <div class="header-page-img" style="background-image: url(<?php echo esc_url($img_header_page)?>)">
      <div class="container">
        <div class="hero-page">
          <h1><?php the_title() ?></h1>
        </div>
    </div>
    </div>
  </header>
  <?php
}
}
add_action( 'portfoliohl_after_header', 'portfoliohl_header', 9);
