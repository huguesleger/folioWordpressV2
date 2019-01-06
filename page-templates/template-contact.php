<?php
/**
* Template Name: Contact
* @package portfoliohl
*/
?>
<?php get_header();?>
<?php
while ( have_posts() ) : the_post();
 get_template_part( 'template-parts/content', 'contact' );
endwhile;
?>
<?php get_footer();?>
