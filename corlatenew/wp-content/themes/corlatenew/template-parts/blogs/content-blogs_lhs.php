<section id="blog" class="container">
    <div class="center">
        <?php 
        // Retreiving Title Of Blog Page 
        $title = get_sub_field( 'title_' );
        // Retreiving Content Of Blog Page 
        $content = get_sub_field( 'content' );
        if ( $title ) { 
            ?>
            <h2><?php echo $title; ?></h2>
            <?php 
        }
        if ( $content ) { 
            ?>
            <p class="lead"><?php echo $content; ?></p>
            <?php 
        }
        ?>
    </div>

    <div class="blog">
        <div class="row">
         <div class="col-md-8">
            <?php 
            if(is_front_page()) {
                        $paged = (get_query_var('page')) ? get_query_var('page') : 1; // for static page
                    }
                    else {
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                    };  
                    $custom_query = new WP_Query( array(
                                'post_type'     => 'post', // Custom post type posts
                                'posts_per_page' => 1,
                                'paged' => $paged,
                                'order'         =>  'ASC',
                            )); 
                    if( $custom_query->have_posts() ){
                        while( $custom_query->have_posts() ){
                            $custom_query->the_post();
                            $ID           = get_the_tags( get_the_ID() ); //Getting The Tags from Post ID 
                            ?>
                            <div class="blog-item">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-2 text-center">
                                        <div class="entry-meta">
                                            <?php
                                                $today_day    = get_the_date("d"); // Getting post published day
                                                 $today_month  = get_the_date("M"); // Getting post published month
                                                 $year         = get_the_date("Y"); // Getting post published year
                                                $today_date   = get_the_date("d M,Y"); // Getting date according to day-month-year format.
                                                ?>
                                                <span id="publish_date"><?php echo $today_day. "&nbsp" . $today_month; ?></span>
                                                <span><i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"><?php echo get_the_author(); ?></a></span>
                                                <span><i class="fa fa-comment"></i> <a href="<?php echo comments_link_feed(); ?>"><?php echo get_comments_number( get_the_ID() ) . "&nbsp"; _e( 'Comments','corlatenew'); ?></a></span>
                                                <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xs-12 col-sm-10 blog-content">
                                            <a href="<?php the_permalink();?>"><img class="img-responsive img-blog" src="<?php the_post_thumbnail_url();?>" width="100%" alt="" /></a>
                                            <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                                            <h3><?php the_content(); ?></h3>
                                            <a class="btn btn-primary readmore" href="<?php the_permalink(); ?>"><?php _e( 'Read More','corlatenew' ); ?> <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>    
                                </div><!--/.blog-item-->
                                <?php 
                            }
                            $pagination = paginate_links( array(
                                'total' => $custom_query->max_num_pages,
                                'current' => $paged,
                                'type'    => 'array',
                                'prev_text' => '<i class="fa fa-long-arrow-left"></i>Previous Page',
                                'next_text' =>  'Next Page<i class="fa fa-long-arrow-right"></i>',
                                'before_page_number' => '',
                                'after_page_number' => ''));
                                ?>
                                
                                <ul class="pagination pagination-lg">
                                    <?php foreach ( $pagination as $key => $page_link ){ 
                        //var_dump($page_link); ?>
                        <li><?php echo $page_link; ?></li>
                        <?php
                    }
                    ?>
                </ul><!--/.pagination-->
            </div><!--/.col-md-8-->
            <?php
        }
        wp_reset_postdata();
        ?>
        