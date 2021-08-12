<?php
//Create the rating interface.
add_action( 'comment_form_logged_in_after', 'ci_comment_rating_rating_field' );
add_action( 'comment_form_after_fields', 'ci_comment_rating_rating_field' );

/*
 Function Name: ci_comment_rating_field 
*/
function ci_comment_rating_rating_field () {
?>
<label for="rating">Rating<span class="required">*</span></label>
<label><fieldset class="comments-rating">
<span class="rating-container">
<?php for ( $i = 5; $i >= 1; $i-- ) : ?>
<input type="radio" id="rating-<?php echo esc_attr( $i ); ?>" name="rating" value="<?php echo esc_attr( $i ); ?>" /><label for="rating-<?php echo esc_attr( $i ); ?>"><?php echo esc_html( $i ); ?></label>
<?php endfor; ?>
<input type="radio" id="rating-0" class="star-cb-clear" name="rating" value="0" /><label for="rating-0">0</label>
</span>
</fieldset>
</label>
<?php
}