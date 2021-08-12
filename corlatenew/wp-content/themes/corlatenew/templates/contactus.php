<?php 
/*
Template Name: Contact Us 
*/

get_header();
while ( have_rows('content_') ) : the_row();

	if( get_row_layout() == 'contact_us_' ):
		// Template Part For Contact Us Section
		get_template_part( 'template-parts/contactus/content', 'contactus_sections' );

	endif;
endwhile;

get_footer();
?>