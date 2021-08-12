<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package corlatenew
 */

get_header();
?>
<?php 
if ( is_single() && 'post' == get_post_type() ) {
	$page = get_page_by_title('Blog Single');
	if( have_rows('content_',$page->ID) ):
		while ( have_rows('content_',$page->ID) ) : the_row();

			if( get_row_layout() == 'blog_Single_page_fields' ):
				get_template_part( 'template-parts/blogs/content','blogs__single_lhs' );
				get_template_part( 'template-parts/blogs/content','blogs__single_rhs' );

			endif;
		endwhile;
	endif;

}else{
	?>
	<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'corlatenew' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'corlatenew' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
		endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

	<?php
	get_sidebar();
}
get_footer();
