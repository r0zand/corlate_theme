<?php
// Retreiving Title oF Blog Page 
$title = get_sub_field( 'title_' );
// Retreiving The content of Blog Page 
$content = get_sub_field( 'content' );
// Retreiving The Reply Title 
$reply_title    = get_sub_field( 'reply_title' );
// Retreiving The Reply Details 
$reply_details  = get_sub_field( 'reply_details_' );
?>
<section id="blog" class="container">
    <div class="center">
        <?php if ( $title ) { 
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
                <div class="blog-item">
                    <img class="img-responsive img-blog" src="<?php the_post_thumbnail_url(); ?>" alt="" />
                    <div class="row">  
                        <div class="col-xs-12 col-sm-2 text-center">
                            <div class="entry-meta">
                             <?php
                             $today_day    = get_the_date("d"); // Getting post published day
                             $today_month  = get_the_date("F"); // Getting post published month
                             $year         = get_the_date("Y"); // Getting post published year
                            $today_date   =  get_the_date("F,Y"); // Getting date according to day-month-year format.
                            $author_name =  get_the_author_meta('first_name', $post->post_author );
                            ?>
                            <span id="publish_date"><?php echo $today_day. "&nbsp" . $today_month; ?></span>
                            <span><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url( $post->post_author,$author_name ); ?>"><?php echo $author_name; ?></a></span>
                            <span><i class="fa fa-comment"></i> <a href="<?php echo comments_link_feed(); ?>"><?php echo get_comments_number( get_the_ID() ) . "&nbsp"; _e( 'Comments','corlatenew'); ?></a></span>
                            <span><i class="fa fa-heart"></i><a href="#"><?php _e( '56 Likes', 'corlatenew' ); ?></a></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-10 blog-content">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>

                        <div class="post-tags">
                            <strong><?php _e( 'Tag:', 'corlatenew' ); ?></strong> 
                            <?php $tags = get_tags();
                            foreach ( $tags as $tag ) {
                                ?>    
                                <a href="<?php echo get_tag_link( $tag->term_id );?>"><?php echo $tag->name;?></a> /
                                <?php 
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div><!--/.blog-item-->

            <div class="media reply_section">
                <div class="pull-left post_reply text-center">
                 <?php
                 $author_id    = get_the_author_meta('ID');
                 $author_badge = get_field('user_image_', 'user_'. $post->post_author );
                 ?>
                 <a href="#"><img src="<?php echo $author_badge['url'];?>" class="img-circle" alt="" /></a>
                 <ul>
                     <?php 
                     $author_id = get_the_author_meta('ID');
                     if( have_rows( 'social_links_', 'user_'. $post->post_author ) ):
                        while ( have_rows( 'social_links_', 'user_'. $post->post_author  ) ) : the_row();
                            $fa_code = get_sub_field('fa_code');

                            $social_link = get_sub_field('link_url_');
                            ?>
                            <li><a href="<?php echo $social_link; ?>" target="_blank"><i class="<?php echo $fa_code; ?>"></i></a></li>
                            <?php
                        endwhile;
                    endif;
                    ?>

                </ul>
            </div>
            <div class="media-body post_reply_content">
                <h3><?php echo get_the_author_meta( 'first_name', $post->post_author ); ?></h3>
                <p class="lead"><?php echo get_the_author_meta( 'user_description', $post->post_author ); ?></p>
                <p><strong><?php _e( 'Web:', 'corlatenew' ); ?></strong> <a href="<?php echo get_the_author_meta( 'user_url', $post->post_author ); ?>" target="_blank"><?php echo get_the_author_meta( 'user_url', $post->post_author ); ?></a></p>
            </div>
        </div> 
        <div id="contact-page clearfix">
            <div class="status alert alert-success" style="display: none"></div>
            <div class="message_heading">
                <h4><?php echo $reply_title; ?></h4>
                <p><?php echo $reply_details; ?></p>
            </div> 


            <?php

            if ( comments_open() || get_comments_number() ) :
                comments_template();
        endif;
        ?>

    </div><!--/#contact-page-->
</div><!--/.col-md-8-->
