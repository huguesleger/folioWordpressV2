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
  $img_mouse = (get_template_directory_uri() . '/assets/img/macintosh-mouse.png');
/* metier */
  $header_txt_intro = get_theme_mod('header_txt_intro');
  $header_txt_metier_1 = get_theme_mod('header_txt_metier_1');
  $header_txt_metier_2 = get_theme_mod('header_txt_metier_2');
  $header_desc_metier_1 = get_theme_mod('header_desc_metier_1');
  $header_txt_metier_3 = get_theme_mod('header_txt_metier_3');
  $header_desc_metier_2 = get_theme_mod('header_desc_metier_2');
/* presentation */
  $header_present_name = get_theme_mod('header_present_name');
  $header_present_age = get_theme_mod('header_present_age');
  $header_present_ville = get_theme_mod('header_present_ville');
  $header_present_description = get_theme_mod('header_present_description');

/* header page home */
  if ( is_front_page() && ! is_home() ) { ?>
<header class="header-home">
    <div class="wrap-hello col-md">
      <div class="hello">
        <?php get_template_part( 'template-parts/svg/content', 'illu-hello' ); ?>
      </div>
      <div class="btn-hello btn-round btn-round-sm">
        <i class="fas fa-play"></i>
      </div>
      <div class="enter-responsive">
        <div class="go-enter">
        <a class="enter" id="enterResponsive" href="#create"><img class="mouse img-responsive" src="<?php echo esc_url($img_mouse); ?>"/></a>
        </div>
      </div>
    </div>
    <div class="wrap-whale col-md">
      <h1 class="txt-job">
        <span><?php echo esc_html($header_txt_intro);?></span>
        <span><?php echo esc_html($header_txt_metier_1);?></span>
        <span><?php echo esc_html($header_txt_metier_2);?></span>
        <span class="sub-title-job"><?php echo esc_html($header_desc_metier_1);?></span>
        <span class="txt-and">&</span>
        <span class="txt-dev"><?php echo esc_html($header_txt_metier_3);?></span>
        <span class="sub-title-job"><?php echo esc_html($header_desc_metier_2);?></span>
      </h1>
      <div class="whale" id ="whale">
        <?php get_template_part( 'template-parts/svg/content', 'illu-whale' ); ?>
      </div>
      <!-- presentation -->
      <div class="presentation">
        <div class="btn-close btn-round btn-round-xs mb-3">
          <i class="fas fa-times"></i>
        </div>
        <h2><?php echo esc_html($header_present_name);?></h2>
        <h3><?php echo esc_html($header_present_age);?></h3>
        <span class="presentation-ville"><?php echo esc_html($header_present_ville);?></span>
        <p><?php echo esc_html($header_present_description);?></p>
      </div>
      <div class="scroll-down">
        <p>Click To Enter</p>
        <a class="enter" id="enter" href="#create"><img class="mouse img-responsive" src="<?php echo esc_url($img_mouse); ?>"/></a>
      </div>
    </div>
</header>
<?php
/* header page portfolio */
} elseif (is_page()) { ?>
    <header class="header-portfolio">
      <div class="header-img" style="background-image: url(<?php echo esc_url($img_header_page)?>)">
        <div class="title-page-portfolio">
          <h1><?php the_title() ?></h1>
          <?php if (get_field('baiseline')): { ?>
            <span><?php echo the_field('baiseline')?></span>
            <?php
          }
          endif; ?>
        </div>
      </div>
    </header>
<?php
/* header page */
 // <header class="header-page">
 //   <div class="header-txt">
 //     <h1>title</h1>
 //   </div>
 //   <div class="wrap-header-img">
 //     <div class="header-img" style="background-image: url()"></div>
 //   </div>
 // </header>
} else {
return null;
}
}
add_action( 'portfoliohl_after_header', 'portfoliohl_header', 9);
