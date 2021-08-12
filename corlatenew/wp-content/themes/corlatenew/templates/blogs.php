<?php 
 /*
Template Name: Blogs
 */
get_header();
while ( have_rows('content_') ) : the_row();

	if ( get_row_layout() == 'blogs_listing_page_fields' ):
				// Template Part For Blogs LHS Section
		get_template_part( 'template-parts/blogs/content','blogs_lhs' );
				// Template Part For Blogs RHS Section
		get_template_part( 'template-parts/blogs/content','blogs_rhs' );

	endif;
endwhile;

get_footer();