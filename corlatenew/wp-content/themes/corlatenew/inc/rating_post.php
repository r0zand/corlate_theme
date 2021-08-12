<?php
add_action( 'comment_post', 'ci_comment_rating_save_comment_rating' );
/*
 * Function Name: ci_comment_rating_save_comment_rating
 * Saving the Comment Rating in Database  
*/
function ci_comment_rating_save_comment_rating( $comment_id ) {
if ( ( isset( $_POST['rating'] ) ) && ( '' !== $_POST['rating'] ) )
$rating = intval( $_POST['rating'] );
add_comment_meta( $comment_id, 'rating', $rating );
}