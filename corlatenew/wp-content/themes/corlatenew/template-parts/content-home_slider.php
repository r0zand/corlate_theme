<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php

    // Loop through rows.
            while ( have_rows('content_') ) : the_row();
        // Case: Paragraph layout.
                if( get_row_layout() == 'banner_image_' ):
                    $image = get_sub_field('slider_image__');
            //var_dump($image);
                    $c=1; 
                    $custom_query = new WP_Query( array(
                    'post_type'       => 'cl_slider', // Custom post type posts
                    'orderby'         =>  'ASC',
                ));
                    if( $custom_query->have_posts() ) {
                        while( $custom_query->have_posts() ) {
                            $custom_query->the_post(); 
                            ?>
                            <div class="<?php if( $c==1 ){
                                echo "item active";
                            }
                            else{
                                echo "item";
                            }
                            ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                            <div class="container">

                                <div class="row slide-margin">
                                    <div class="col-sm-6">
                                        <div class="carousel-content">
                                            <h1 class="animation animated-item-1"><?php the_title(); ?></h1>
                                            <h2 class="animation animated-item-2"><?php the_content(); ?></h2>
                                            <a class="btn-slide animation animated-item-3" href="<?php the_permalink();?>"><?php _e( 'Read More', 'corlatenew' ); ?></a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 hidden-xs animation animated-item-4">
                                        <div class="slider-img">
                                            <img src="<?php echo get_template_directory_uri()?>./images/slider/img1.png" class="img-responsive">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!--/.item-->
                        <?php
                        $c++; 
                    }
                }
                wp_reset_postdata();
            endif;
        endwhile;
        ?>
    </div><!--/.carousel-inner-->
</div><!--/.carousel-->
<a class="prev hidden-xs" href="#main-slider" data-slide="prev">
    <i class="fa fa-chevron-left"></i>
</a>
<a class="next hidden-xs" href="#main-slider" data-slide="next">
    <i class="fa fa-chevron-right"></i>
</a>
</section><!--/#main-slider-->