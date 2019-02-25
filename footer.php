<?php
/**
* Contains the closing of the #content div and all content after.
*
* @package portfoliohl
*/
?>

</div><!-- #content -->
<?php
$facebook_url      = get_theme_mod( 'social_facebook_url' );
$facebook_icon      = get_theme_mod( 'social_facebook_icon' );
$linkedin_url      = get_theme_mod( 'social_linkedin_url' );
$linkedin_icon      = get_theme_mod( 'social_linkedin_icon' );
$instagram_url      = get_theme_mod( 'social_instagram_url' );
$instagram_icon      = get_theme_mod( 'social_instagram_icon' );
 ?>
<footer class="footer">
<div class="wrap-copy">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
    <p class="text-center"><a href="#" class="gotop"><i class="fas fa-angle-up"></i></a></p>
    <p class="copy text-center"><img class="img-fluid logo-footer" src="<?php echo get_template_directory_uri(); ?>/images/logo_hl19.svg"> &copy HL Developerz <?php echo date('Y'); ?> - Tous droits réservés</p>
    </div>
  </div>
  </div>
</div>
<div class="social py-2">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <ul class="text-center">
        <?php
        if ( $facebook_url ) { ?>
        <li class="social-footer"><a class="item" href="https://<?php echo esc_html( $facebook_url ); ?>" target="_blank" rel="noopener noreferrer"><i class="fab <?php echo esc_html( $facebook_icon ); ?>"></i></a></li>
        <?php
        }
        if ( $linkedin_url ) { ?>
        <li class="social-footer"><a class="item" href="https://<?php echo esc_html( $linkedin_url ); ?>" target="_blank" rel="noopener noreferrer"><i class="fab <?php echo esc_html( $linkedin_icon ); ?>"></i></a></li>
        <?php
        }
        if ( $instagram_url ) { ?>
        <li class="social-footer"><a class="item" href="https://<?php echo esc_html( $instagram_url ); ?>" target="_blank" rel="noopener noreferrer"><i class="fab <?php echo esc_html( $instagram_icon ); ?>"></i></a></li>
        <?php
        } ?>
      </ul>
    </div>
  </div>
  </div>
</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
