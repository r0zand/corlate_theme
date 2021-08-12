<?php 
/*
Template Name: Ajax 
*/
get_header();

$terms = get_terms( array( 'taxonomy' => 'portfolio-type', 'orderby' => 'name' ) );
//var_dump($terms);

?>
<form action="<?php echo site_url(); ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
		<select id="your_select" name="categoryfilter">
			<option  value="">Select category...</option>
			<option  value="">All</option>
		<?php 
		foreach($terms as $term) : ?>
			<option value="<?php $term->term_id; ?>"><?php echo $term->name; ?></option>
		<?php 
	endforeach; 
	?>
	</select>
</form>
<section class="blog-section padding">
   <div class="container" id="response">
               <?php 
               if(is_front_page()) {
                        $paged = (get_query_var('page')) ? get_query_var('page') : 1; // for static page
                    }
                    else {
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                    };  
                    $custom_query = new WP_Query( array(
                                'post_type'     => 'portfolio_post', // Custom post type posts
                                'posts_per_page' => -1,
                                'paged' => $paged,
                                'order'         =>  'ASC',
                            )); 
                    if( $custom_query->have_posts() ) {
                        while( $custom_query->have_posts() ) {
                            $custom_query->the_post();
                            $categories          = get_the_category( get_the_ID() ); //Getting The Tags from Post ID 
                            ?>
                            <div class="col-sm-6 padding-15">
                              <div class="blog-item box-shadow">
                                 <div class="blog-thumb">
                                    <img src="<?php echo esc_url( the_post_thumbnail_url() ); ?>" alt="post">
                                    <?php 
                                    foreach ($categories as $cat) {
                                                        //var_dump($cat)
                                        ?>    
                                        <span class="category"><a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>"><?php echo $cat->name; ?></a></span>
                                        <?php 
                                    }
                                    ?>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="<?php esc_url( the_permalink() ); ?>"><?php echo the_title(); ?></a></h3>
                                    <p><?php the_content(); ?></p>
                                    
                                </div>
                            </div>
                        </div>

                        <?php 
                    }
                }
                wp_reset_postdata();

                $pagination = paginate_links( array(
                    'total' => $custom_query->max_num_pages,
                    'current' => $paged,
                    'type'    => 'array',
                    'prev_text' => '<i class="ti-arrow-left"></i>',
                    'next_text' =>  '<i class="ti-arrow-right"></i>',
                ));
                ?>
            </div>
    
</section>
<?php
get_footer();