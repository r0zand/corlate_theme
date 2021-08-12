<?php
/**
 * Retrives All The Comments With Their Ratings
 * Function Name: better_comments
 */
function better_comments( $comment, $args, $depth ) {
    ?>
    <div class="media comment_section">
        <div class="pull-left post_comments">
            <a href="#">
                <?php echo get_avatar( $comment, $size='80' ); ?>
            </a></div>
            <div class="media-body post_reply_comments">
                <h3><?php echo get_comment_author(); ?></h3>
                <h4><?php echo get_comment_date(); ?></h4>
                <p><?php echo comment_text(); ?></p>
                <?php
                // Displaying Comment Rating 
                if ( function_exists( 'ci_comment_rating_display_rating' ) ) {
                    echo ci_comment_rating_display_rating();  
                }   
                // Getting Comment Reply Link         
                $c = get_comment_reply_link( array_merge(
                    $args,
                    array(
                        'reply_text' => esc_html__( 'Reply', 'corlatenew' ),
                        'add_below'  => 'comment',
                        'depth'      => $depth,
                        'max_depth'  => $args['max_depth'],
                        'before'     => '',
                        'after'      => '',
                    )
                ), $comment );
                if ( $c ) {
                    // Display Comment Reply Links
                    echo $c;
                }
                ?>
            </div>
        </div> 
        <?php
    }