<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package corlatenew
 */

get_header();
$page = get_page_by_title('404');
while ( have_rows('content_',$page->ID) ) : the_row();

	if( get_row_layout() == '404_page_fields' ):
		// Template Part For Error Page 
		get_template_part( 'template-parts/content','404' );

	endif;
endwhile;

get_footer();

