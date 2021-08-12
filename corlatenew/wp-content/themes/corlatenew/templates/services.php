<?php 
/*
Template Name: Services 
*/

get_header();
while ( have_rows('content_') ) : the_row();
	$layout = get_row_layout();
	if ( get_row_layout() == $layout ):
		// Template Part Features Section
		get_template_part( 'template-parts/services/content', $layout );
	endif;
endwhile;

get_footer();
?>