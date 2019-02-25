<?php
/**
 *
 * @package portfoliohl
 */
?>
<?php
$facebook_url      = get_theme_mod( 'social_facebook_url' );
$facebook_icon      = get_theme_mod( 'social_facebook_icon' );
$linkedin_url      = get_theme_mod( 'social_linkedin_url' );
$linkedin_icon      = get_theme_mod( 'social_linkedin_icon' );
$instagram_url      = get_theme_mod( 'social_instagram_url' );
$instagram_icon      = get_theme_mod( 'social_instagram_icon' );
 ?>
 <div class="contact">
<div class="d-md-flex">
    <div class="col-md-7 p-md-5">
      <div class="contact-form pt-5 pt-md-0">
        <?php the_content(); ?>
      </div>
    </div>
    <div class="col-md-5 p-md-5 py-5 py-md-0 content-infos">
      <div class="infos-contact pb-5">
        <h3 class="title-list">Infos</h3>
        <ul class="content-list-contact py-2">
          <li class="pb-2"><i class="fas fa-map-marker-alt icon-list"></i>3400 Montpellier</li>
          <li class="pb-2"><a class="email" href="mailto:contactme@hl-developerz.com"><i class="fas fa-envelope-open icon-list"></i>contactme@hl-developerz.com</a></li>
        </ul>
      </div>
      <div class="social-contact pt-5">
        <h3 class="title-list">Réseaux</h3>
        <ul class="content-list-contact py-2">
      <?php
        if ( $facebook_url ) { ?>
      <li class="social-list"><a class="link-social" href="https://<?php echo esc_html( $facebook_url ); ?>" target="_blank" rel="noopener noreferrer"><i class="fab <?php echo esc_html( $facebook_icon ); ?>"></i></a></li>
    <?php
  }
        if ( $linkedin_url ) { ?>
      <li class="social-list"><a class="link-social" href="https://<?php echo esc_html( $linkedin_url ); ?>" target="_blank" rel="noopener noreferrer"><i class="fab <?php echo esc_html( $linkedin_icon ); ?>"></i></a></li>
      <?php
    }
    if ( $instagram_url ) { ?>
      <li class="social-list"><a class="link-social" href="https://<?php echo esc_html( $instagram_url ); ?>" target="_blank" rel="noopener noreferrer"><i class="fab <?php echo esc_html( $instagram_icon ); ?>"></i></a></li>
      <?php
    } ?>
    </ul>
  </div>
    </div>
</div>
</div>
