<?php
/**
 * @package portfoliohl
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<script defer src="https://use.fontawesome.com/releases/v5.6.1/js/all.js" integrity="sha384-R5JkiUweZpJjELPWqttAYmYM1P3SNEJRM6ecTQF05pFFtxmCO+Y1CiUhvuDzgSVZ" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
  <?php //Used for portfoliohl_header_bar()
	do_action('portfoliohl_header'); ?>

	<?php //Used for portfoliohl_header_hero()
	do_action('portfoliohl_after_header'); ?>

  <div class="phone-orientation">
    <div class="phone-content">
      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/smartphone.svg">
      <p>pour une meilleure experience, retournez votre smartphone en mode portrait.</p>
    </div>
  </div>

<div id="content" class="site-content">
