<?php
/**
 * @package portfoliohl
 */

  /**
   * Register a book post type.
   *
   * @link http://codex.wordpress.org/Function_Reference/register_post_type
   */
  function register_portfolio() {
  	$labels = array(
  		'name'               => 'Portfolio',
  		'singular_name'      => 'Réalisation',
  		'menu_name'          => 'Portfolio',
  		'name_admin_bar'     => 'Portfolio',
  		'add_new'            => 'Ajouter une nouvelle réalisation',
  		'add_new_item'       => 'Ajouter une réalisation',
  		'new_item'           => 'Nouvelle réalisation',
  		'edit_item'          => 'Editer une réalisation',
  		'view_item'          => 'Voir une réalisation',
  		'all_items'          => 'Toute les réalisations',
  		'search_items'       => 'Rechercher une réalisation',
  		'parent_item_colon'  => 'Parent Item',
  		'not_found'          => 'Aucune réalisation',
  		'not_found_in_trash' => 'Aucune réalisation dans la corbeille'
  	);

  	$args = array(
  		'labels'             => $labels,
      'description'        => __( 'Description.', 'your-plugin-textdomain' ),
  		'public'             => true,
  		'publicly_queryable' => true,
  		'show_ui'            => true,
  		'show_in_menu'       => true,
      'show_in_rest'       => true,
  		'query_var'          => true,
  		'rewrite'            => array( 'slug' => 'portfolio' ),
  		'capability_type'    => 'post',
      'menu_icon'          => 'dashicons-images-alt2',
  		'has_archive'        => true,
  		'hierarchical'       => false,
  		'menu_position'      => 5,
  		'supports'           => array( 'title', 'editor', 'author', 'excerpt', 'thumbnail','revisions'),
  	);

  	register_post_type( 'portfolio', $args );

  }
  add_action('init','register_portfolio');

  function register_portfolio_taxonomies(){

    //add new taxonomy hierarchical
    $labels = array(
           'name'=>'Categories',
           'singular_name'=>'Categorie',
           'search_items'=>'Search Categories',
           'all_items'=>'All Categories',
           'parent_item'=>'Parent Categorie',
           'parent_item_colon'=>'Parent Categorie:',
           'edit_item'=>'Edit Categorie',
           'update_item'=> 'Update Categorie',
           'add_new_item'=>'Add new Categorie',
           'new_item_name'=>'New Categorie name',
           'menu_name'=>'Categories'
                 );
    $args = array(
           'hierarchical'=> true,
           'labels'=>$labels,
           'show_ui'=> true,
           'show_in_rest'=> true,
           'show_admin_column'=>true,
           'query_var'=> true,
           'rewrite'=> array( 'slug' => 'works' )
    );
    register_taxonomy('works', array('portfolio'),$args);


  }

  add_action('init','register_portfolio_taxonomies');
