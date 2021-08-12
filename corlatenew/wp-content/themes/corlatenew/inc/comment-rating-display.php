<?php
/*
	Function Name: ci_comment_rating_display_rating
*/
//Display the rating on a submitted comment.
add_filter( 'comment_texts', 'ci_comment_rating_display_rating');
function ci_comment_rating_display_rating(){
$comment_texts = '';
if ( $rating = get_comment_meta( get_comment_ID(), 'rating', true ) ) {
	$stars = '<p class="stars">';
	for ( $i = 1; $i <= $rating; $i++ ) {
		$stars .= '<span class="dashicons dashicons-star-filled"></span>';
	}
	$stars .= '</p>';	
	$comment_texts = $comment_texts . $stars;
	return $comment_texts;
	} else {
	return $comment_texts;
}
}