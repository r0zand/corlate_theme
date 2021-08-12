<?php
function load_scripts(){

	// register our main script but do not enqueue it yet
	wp_register_script( 'ajax', get_stylesheet_directory_uri() . '/js/filtering.js', array('jquery'), NULL , true );
 
	wp_localize_script( 'ajax', 'myfilters', array(
		'nonce' => wp_create_nonce( 'wp_rest' ),
		'url' => admin_url('admin-ajax.php'), // WordPress AJAX
	) );
 
 	wp_enqueue_script( 'ajax' );
}
 
add_action( 'wp_enqueue_scripts', 'load_scripts' );