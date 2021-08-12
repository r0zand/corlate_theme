 <section id="portfolio">
    <div class="container">
        <div class="center">
            <?php 
            // Retreiving The Title Of Portfolio Section 
            $title = get_sub_field( 'title_' );
            // Retreiving The Cointent of Portfolio Section 
            $content = get_sub_field( 'content' );
            if ( $title ) { 
            ?>
            <h2><?php echo $title; ?></h2>
            <?php }
            if ( $content ) { 
            ?>
            <p class="lead"><?php echo $content; ?></p>
            <?php }
            ?>
        </div>
        

        <ul class="portfolio-filter text-center">
            <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
            <?php 
            $terms = get_terms( array( 
                'taxonomy' => 'portfolio-type',
                'order'    => 'ASC',
            ) );
            if ( is_array($terms) ){
                foreach ($terms as $term) {
                    $tslug = $term->slug; 
                    $tname = $term->name;                          
                    ?>
                    <li><a class="btn btn-default" href="#" data-filter="<?php echo "." . $tslug; ?>"><?php echo $tname; ?></a></li>
                    <?php
                }
            }
            ?>
        </ul><!--/#portfolio-filter-->

        <div class="row">
            <div class="portfolio-items">
                <?php 
                if ( is_front_page() ) {
                        $paged = (get_query_var('page')) ? get_query_var('page') : 1; // for static page
                    }
                    else {
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                    };  
                    $custom_query = new WP_Query( array(
                    'post_type' => 'portfolio_post', // Custom post type posts
                    'posts_per_page' => -1, 
                    'order'     =>  'ASC',
                )); 
                    if ( $custom_query->have_posts() ) {
                        while ( $custom_query->have_posts() ) {
                           $custom_query->the_post();//Running Wp query to display custom posts 
                           $thumb_id = get_post_thumbnail_id( get_the_ID() );
                           //Getting alternative text 
                           $alt = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true );
                           $terms = get_the_terms( $post->ID, 'portfolio-type' );
                           //var_dump($terms);
                           $terms_string = join(' ', wp_list_pluck($terms, 'slug'));
                           //var_dump($terms_string);

                           ?>
                           <div class="portfolio-item <?php echo $terms_string; ?> col-xs-12 col-sm-4 col-md-3">
                            <div class="recent-work-wrap">
                                <img class="img-responsive" src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="<?php echo $alt; ?>">
                                <div class="overlay">
                                    <div class="recent-work-inner">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p><?php the_content(); ?></p>
                                        <a class="preview" href="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                    </div> 
                                </div>
                            </div>
                        </div><!--/.portfolio-item-->
                        <?php 
                    }
                }
                wp_reset_postdata();
                ?>  
            </div>
        </div>
    </div>
</section><!--/#portfolio-item-->