 <?php 
 /*
Template Name: Shortcodes 
 */
get_header();
while ( have_rows('content_') ) : the_row();
	$layout = get_row_layout();
	if( get_row_layout() == $layout ):
				// Template Part Accordin Section
		get_template_part( 'template-parts/shortcodes/content', $layout );
	endif;
endwhile;

get_footer();
