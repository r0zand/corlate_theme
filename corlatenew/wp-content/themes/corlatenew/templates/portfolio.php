<?php 
/*
Template Name: Portfolio 
*/

get_header();
while ( have_rows('content_') ) : the_row();

	if( get_row_layout() == 'portfolio_section' ):
		// Template Part For Portfolio Isotope Section
		get_template_part( 'template-parts/portfolio/content', 'portfolio' );
		
	endif;
endwhile;

get_footer();
?>