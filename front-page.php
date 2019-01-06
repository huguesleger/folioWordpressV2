<?php
/**
 * Front page
 *
 * @package portfoliohl
 */
get_header();

?>
<div class="sections-content">
<?php

do_action('portfoliohl_frontpage_before_section_parts');

  if(! has_action('portfoliohl_frontpage_section_parts')) {

    $sections = apply_filters(
        'portfoliohl_frontpage_sections_order',
        array(
              'create',
              'design',
              'slider',
              'service',
              'webdesign',
              'post'
        )
      );

  foreach ($sections as $section) {
      if(! get_theme_mod( $section.'_disable')) {

          do_action('portfoliohl_before_section_' . $section);
          do_action('portfoliohl_before_section_part' . $section);

          get_template_part('section-parts/section', $section);

          do_action('portfoliohl_after_section_part'. $section);
          do_action('portfoliohl_after_section_' . $section);
      }
  }

} else {
  do_action('portfoliohl_frontpage_section_parts');
}
  do_action('portfoliohl_frontpage_after_section_parts');
?>
</div><!-- sections-content -->
<?php
get_footer();
