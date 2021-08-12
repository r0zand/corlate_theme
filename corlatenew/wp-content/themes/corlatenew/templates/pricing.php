<?php 
/*
Template Name: Pricing 
*/

get_header();
while ( have_rows('content_') ) : the_row();

	if( get_row_layout() == 'pricing_tables_section' ):
		// Template Part For Pricing Section
		get_template_part( 'template-parts/pricing/content', 'pricing' );
	endif;
endwhile;

get_footer();
?>