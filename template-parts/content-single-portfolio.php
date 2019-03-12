<?php
/**
 * The content single-portfolio file.
 *
 * @package portfoliohl
 */
 ?>
 <header class="header-single-portfolio">
   <div class="title-header-single">
     <div class="container">
       <h1 class="title-post-single"><?php the_title()?></h1>
       <?php
       $terms_list = wp_get_post_terms($post->ID,'works');
       foreach ($terms_list as $term) { ?>
       <span class="cat-post-single"><i class="<?php echo $term->description;?>"></i><?php echo $term->name;?></span>
       <?php
       }
       ?>
       <?php if ( get_field('lien_du_site') ): ?>
       <div class="btn-header-single">
         <a class="btn btn-default btn-dark btn-lg mt-4" href="<?php the_field('lien_du_site'); ?>" target="_blank">voir le site</a>
       </div>
     <?php endif ;?>
     </div>
   </div>
   <div class="header-content">
     <div class="wrap-img-single">
     <img class="img-fluid img-single" src="<?php the_field('image'); ?>">
     </div>
   </div>
 </header>
 <div class="content-single-portfolio">
<?php the_content(); ?>

<?php
// Previous/next post navigation.

the_post_navigation( array(
  'prev_text' => '<span class="title-meta btn-default-lg"><i class="fas fa-long-arrow-alt-left"></i> Page précédente</span>',
  'next_text' => '<span class="title-meta btn-default-lg">Page suivante <i class="fas fa-long-arrow-alt-right"></i></span>',
) );
?>
 </div>
