<?php
/*
 * Function Name: my_custom_post_type
 * Creating Custom Post type for Portfolio Post 
*/
function my_custom_post_type() {
	register_post_type('portfolio_post',
		array(
			'labels'        => array(
				'name'          => __('Portfolio Posts', 'corlate'),
				'singular_name' => __('Portfolio Post', 'corlate'),
			),
			'public'        => true,
			'has_archive'   => true,
			'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'page-attributes'),
			'rewrite' => array('slug' => 'portfolio-post'),
				
			'menu_icon'     =>  'dashicons-format-aside'
		)
	);
}
add_action('init', 'my_custom_post_type');

/*
 * Function Name: my_taxanomy
 * Creating Taxanomies for Custom Post type Portfolio Post 
*/
function my_taxonomy(){
	$labels = array(
		'name'              => _x( 'Taxonomies', 'taxonomy general name' ),
		'singular_name'     => _x( 'Taxanomy', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Taxanomies' ),
		'all_items'         => __( 'All Taxanomyies' ),
		'parent_item'       => __( 'Parent Taxanomies' ),
		'parent_item_colon' => __( 'Parent Taxanomy' ),
		'edit_item'         => __( 'Edit Taxanomy' ),
		'update_item'       => __( 'Update Taxanomy' ),
		'add_new_item'      => __( 'Add New Taxanomy' ),
		'new_item_name'     => __( 'New Taxanomy Name' ),
		'menu_name'         => __( 'Taxanomy' ),
	);
	$args   = array(
         'hierarchical'      => true, // make it hierarchical (like categories)
         'labels'            => $labels,
         'show_ui'           => true,
         'show_admin_column' => true,
         'query_var'         => true,
         'rewrite'           => [ 'slug' => 'portfolio-type' ],
     );
	register_taxonomy( 'portfolio-type', array('portfolio_post'), $args );
}
add_action( 'init', 'my_taxonomy' );