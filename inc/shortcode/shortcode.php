<?php
/**
 * @package portfoliohl
 */

 /**********block img************/
 function block_fullimg_shortcode( $atts , $content = null ) {
 	extract( shortcode_atts(
 		array(
 			'img'=>'',
 			'class'=>'',
 			'height' =>'',
 			'padding' => ''
 		), $atts )
 	);
 return '<div class="'. $class .' cover-full-img" style="height:'. $height .'; padding-top:'. $padding .'; padding-bottom:'. $padding .'; background-image: url(' . $img . ')"></div>';
 }
 add_shortcode( 'block_fullimg', 'block_fullimg_shortcode' );


 /**********block img + txt************/
 function block_shortcode( $atts , $content = null ) {
 	extract( shortcode_atts(
 		array(
      'title' =>'',
 			'class'=>'',
 			'full' =>'',
      'txt' => '',
      'background'=> '#fff',
 			'bg_section' => '',
      'color' => '#333',
 			'padding' => '',
 			'img' => $content
 		), $atts )
 	);
 return '<div class="block-img-txt" style=" background-color:'. $bg_section .'; padding-top:'. $padding .'; padding-bottom:'. $padding .'">
 				<div class="container '. $full .'">
 				<div class="img-txt '. $class .'"><div class="cover-detail" style="background-image: url(' . $img . ')"></div>
 				<div class="content-detail" style=" background-color:'. $background .'">
         <div class="detail-title"><h3 style="color:'. $color .'">'.$title.'</h3></div>
         <div class="detail-txt-block"><p style="color:'. $color .'">'.$txt.'</p></div>
         </div>
 				</div>
 				</div>
 				</div>';
 }
 add_shortcode( 'block', 'block_shortcode' );

 /**********block detail-project************/
 function block_detail_shortcode( $atts , $content = null ) {
 	extract( shortcode_atts(
 		array(
      'txt' => '',
 			'txt_min' =>'',
 			'txt_annee' =>'',
 			'txt_env' =>'',
 			// 'category' => get_the_term_list( $post->ID, 'works', ' ', ', ' ),
      'background'=> '#fff',
      'color' => '#333'
 		), $atts )
 	);
 return '
 				<div class="content-detail-project" style=" background-color:'. $background .'">
 				<div class="container">
         <div class="detail-txt"><p style="color:'. $color .'">'.$txt.'</p></div>
 				<div class="row">
 				<div class="detail-txt-rea col-md-6">
 				<h4 style="color:'. $color .'">Objectif</h4>
 				<p style="color:'. $color .'">'.$txt_min.'</p>
 				</div>
 				<div class="detail-txt-infos col-md-4">
 				<h4 style="color:'. $color .'">Infos</h4>
 				<p style="color:'. $color .'">Année : '.$txt_annee.'</p>
 				<p style="color:'. $color .'">Technologies : '.$txt_env.'</p>
 				</div>
 				</div>
         </div>
 				</div>';
 }

 add_shortcode( 'block_detail', 'block_detail_shortcode' );

 /**********block txt + txt************/
 function block_2textes_shortcode( $atts , $content = null ) {
 	extract( shortcode_atts(
 		array(
 			'txt' => '',
 			'txt_2' => '',
      'background'=> '#fff',
      'color' => '#333'
 		), $atts )
 	);
 	return '
 					<div class="content-txt-project style=" background-color:'. $background .'"">
          <div class="container">
 					<div class="row">
 	        <div class="block-txt-title col-md-6 col-sm-6"><h2 style="color:'. $color .'">'.$txt.'</h2></div>
 					<div class="block-txt-text col-md-6 col-sm-6"><p style="color:'. $color .'">'.$txt_2.'</p></div>
 	        </div>
          </div>
 					</div>';
 }
 add_shortcode( 'block_2textes', 'block_2textes_shortcode' );

 /**********block 3textes************/
 function block_3textes_shortcode( $atts , $content = null ) {
 	extract( shortcode_atts(
 		array(
      'txt' => '',
 			'txt_2' => '',
 			'txt_3' => '',
      'background'=> '#fff',
      'color' => '#333'
 		), $atts )
 	);
 return '
 				<div class="content-tree-txt" style=" background-color:'. $background .'">
 				<div class="container">
        <div class="row">
         <div class="block-tree-txt col-md-4 col-sm-9"><p style="color:'. $color .'">'.$txt.'</p></div>
 				<div class="block-tree-txt col-md-4 col-sm-9"><p style="color:'. $color .'">'.$txt_2.'</p></div>
 				<div class="block-tree-txt col-md-4 col-sm-9"><p style="color:'. $color .'">'.$txt_3.'</p></div>
         </div>
         </div>
 				</div>';
 }
 add_shortcode( 'block_3textes', 'block_3textes_shortcode' );



 add_action('init','add_buttons');
 function add_buttons(){
 	if(current_user_can('edit_posts') && current_user_can('edit_pages')) {
 		add_filter('mce_external_plugins','add_plugins');
 		add_filter('mce_buttons','register_buttons');
 	}
 }


 function add_plugins($plugins){
 	$plugins['block_detail']  = get_bloginfo('template_url').'/inc/shortcode/js/tinymce/block-txt.js';
 	$plugins['block']         = get_bloginfo('template_url').'/inc/shortcode/js/tinymce/block.js';
 	$plugins['block_2textes'] = get_bloginfo('template_url').'/inc/shortcode/js/tinymce/block-2txt.js';
 	$plugins['block_3textes'] = get_bloginfo('template_url').'/inc/shortcode/js/tinymce/block-3txt.js';
 	$plugins['block_fullimg'] = get_bloginfo('template_url').'/inc/shortcode/js/tinymce/block-fullimg.js';
 	return $plugins;
 }

 function register_buttons($buttons){
 	array_push ($buttons,'block_detail');
 	array_push ($buttons,'block');
 	array_push ($buttons,'block_2textes');
 	array_push ($buttons,'block_3textes');
 	array_push ($buttons,'block_fullimg');
 	return $buttons;
 }

 add_action ( 'after_wp_tiny_mce', 'mytheme_tinymce_extra_vars' );

 if ( !function_exists( 'mytheme_tinymce_extra_vars' ) ) {
 	function mytheme_tinymce_extra_vars() { ?>
 		<script type="text/javascript">
 			var tinyMCE_object = <?php echo json_encode(
 				array(
 					'button_name' => esc_html__('block img/txt', 'mythemeslug'),
 					'button_title' => esc_html__('block img/txt', 'mythemeslug'),
 					'image_title' => esc_html__('Url image', 'mythemeslug'),
 					'image_button_title' => esc_html__('Upload image', 'mythemeslug'),
 				)
 				);
 			?>;
 		</script><?php
 	}
 }
