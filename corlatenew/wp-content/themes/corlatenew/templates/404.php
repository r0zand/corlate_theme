 <?php 
/*
Template Name: About Us 
*/

get_header();
while ( have_rows('content_') ) : the_row();

	if( get_row_layout() == '404_page_fields' ):
		// Template Part For Error Page 
		get_template_part( 'template-parts/content','404' );

	endif;
endwhile;

get_footer();
