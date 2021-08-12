 <?php 
 /*
Template Name: Blog Single
 */
 get_header();

echo "string";
if( have_rows('content_',24) ):
 while ( have_rows('content_',24) ) : the_row();

	if( get_row_layout() == 'blog_Single_page_fields' ):
 get_template_part( 'template-parts/blogs/content','blogs__single_lhs' );
  get_template_part( 'template-parts/blogs/content','blogs__single_rhs' );

endif;
endwhile;
endif;


get_footer();