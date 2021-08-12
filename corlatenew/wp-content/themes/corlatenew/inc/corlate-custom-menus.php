<?php
/* 
 * Functions for custom menus
*/ 
function custom_header_menu() {
	register_nav_menu(
		'my-custom-header-menu',__( 'My Custom Header Menu','corlatenew' ));
	  
}
add_action( 'init', 'custom_header_menu' );

function custom_header_submenu() {
	register_nav_menu(
		'my-custom-header-submenu',__( 'My Custom Header Sub-Menu','corlatenew' ));
	  
}
add_action( 'init', 'custom_header_submenu' );


function custom_footer_menu() {
	register_nav_menu(
		'my-custom-footer-menu',__( 'My Custom Footer Menu','corlatenew' ));
}
add_action( 'init', 'custom_footer_menu' );

function custom_footer_menu1() {
	register_nav_menu(
		'my-custom-footer-menu1',__( 'My Custom Footer Menu1','corlatenew' ));
}
add_action( 'init', 'custom_footer_menu1' );

function custom_footer_menu2() {
	register_nav_menu(
		'my-custom-footer-menu2',__( 'My Custom Footer Menu2','corlatenew' ));
}
add_action( 'init', 'custom_footer_menu2' );

function custom_footer_menu3() {
	register_nav_menu(
		'my-custom-footer-menu3',__( 'My Custom Footer Menu3','corlatenew' ));
}
add_action( 'init', 'custom_footer_menu3' );

function custom_footer_menu4() {
	register_nav_menu(
		'my-custom-footer-menu4',__( 'My Custom Footer Menu4','corlatenew' ));
}
add_action( 'init', 'custom_footer_menu4' );


 