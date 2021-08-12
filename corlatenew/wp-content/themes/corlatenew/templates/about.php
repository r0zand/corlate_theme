<?php 
/*
Template Name: About Us 
*/

get_header();
while ( have_rows('content_') ) : the_row();
	$layout = get_row_layout();
	if( get_row_layout() == $layout ):
		// Template Part For Slider Posts Section
		get_template_part( 'template-parts/aboutus/content', $layout );
	endif;
endwhile;

get_footer();
?>